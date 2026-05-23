"use client";

import Image from "next/image";
import React, { useState, useEffect } from "react";

export default function SearchBox() {
  const delay = 200;
  const [inputValue, setInputValue] = useState("");
  const [debouncedInputValue, setDebouncedInputValue] = useState("");
  const [menuData, setMenuData] = useState([]);

  const handleInputChange = (event) => {
    setInputValue(event.target.value);
  };

  const clearResultBox = () => {
    // console.log("clear");
    setMenuData([]);
  };

  const hasItem = menuData.length > 0;

  const getMenuItems = () => {
    return menuData.map((item) => {
      let slug = "";
      let kindText = "";
      let border = "";
      let desc = "";
      if (item.kind === "inner") {
        slug = `/noi-cong/${item.slug}/${item.maxLevel}`;
        kindText = "[Nội Công]";
        border = "border-red-500 border-solid border rounded-sm";
        desc = item.desc;
      } else if (item.kind === "skill") {
        slug = `/vo-cong/${item.slug}/${item.maxLevel}`;
        kindText = "[Võ Công]";
        border = "border-green-500 border-solid border rounded-sm";
        desc = item.name;
      }

      return (
        <a
          key={slug}
          href={slug}
          className="block m-0 mt-4 mb-4 search-result-item"
        >
          <div className="flex items-center min-w-52">
            <div className={border}>
              <Image
                width={45}
                height={45}
                alt={`${item.name}`}
                src={`/static/img/icon/${item.photo}`}
                title={desc}
              />
            </div>
            <div className="pl-2">
              <div>{item.name}</div>
              <div>{kindText}</div>
              {/* <div>{item.desc}</div> */}
            </div>
          </div>
        </a>
      );
    });
  };

  const resultBoxOnBlur = (e) => {
    if (e.relatedTarget) {
      const node = e.relatedTarget;
      if (node.classList.contains("search-result-item")) {
        return;
      }
    }
    setTimeout(() => {
      setMenuData([]);
    }, 100);
  };

  useEffect(() => {
    const timer = setTimeout(() => {
      setDebouncedInputValue(inputValue);
    }, delay);

    return () => {
      clearTimeout(timer);
    };
  }, [inputValue, delay]);

  useEffect(() => {
    if (debouncedInputValue === "") {
      clearResultBox();
      return;
    }
    if (debouncedInputValue) {
      const searchFunc = async () => {
        const response = await fetch(`/api/search?q=${debouncedInputValue}`);
        const body = (await response.json()).data;
        setMenuData(body);
      };
      searchFunc();
    }
  }, [debouncedInputValue]);

  return (
    <>
      <input
        id="search-box"
        type="text"
        value={inputValue}
        onChange={handleInputChange}
        onBlur={resultBoxOnBlur}
        placeholder="Tìm kiếm..."
        className="ml-10 m-0 p-1 pl-2 pr-2 -mt-1 text-slate-800 bg-white outline-none rounded-sm"
      />
      {hasItem && (
        <div className="absolute z-50 bg-stone-950 ml-10 mt-2 p-2 pl-2 pr-10 rounded-sm">
          {getMenuItems()}
        </div>
      )}
    </>
  );
}
