<?php

namespace Zdn\Model;

use Illuminate\Database\Eloquent\Model;
use Zdn\Utility\ZdnString;

class ZdnBaseModel extends Model
{
    protected $hidden = ["created_at", "updated_at"];

    /**
     * getAttribute Override
     *
     * @param [type] $key
     * @return void
     */
    public function getAttribute($key)
    {
        if (method_exists($this, $key)) {
            return parent::getAttribute($key);
        }
        return parent::getAttribute(ZdnString::snake($key));
    }

    /**
     * setAttribute Override
     *
     * @param [type] $key
     * @param [type] $value
     * @return void
     */
    public function setAttribute($key, $value)
    {
        return parent::setAttribute(ZdnString::snake($key), $value);
    }

    /**
     * Lấy tất cả attributes với tên key dạng camel case
     *
     * @return void
     */
    public function getAttributesCamel()
    {
        $camelAttributes = [];

        $attributes = $this->getAttributes();
        foreach ($attributes as $key => $value) {
            $camelAttributes[ZdnString::camel($key)] = $value;
        }

        return $camelAttributes;
    }

    /**
     * Lấy entity với tên key dạng camel case
     *
     * @return void
     */
    public function toArrayCamel()
    {
        $camelArray = [];
        $arrays = $this->toArray();
        foreach ($arrays as $key => $values) {
            if (is_null($values)) {
                continue;
            }
            $camelArray[ZdnString::camel($key)] = $this->recursiveToCamel($values);
        }
        return $camelArray;
    }

    /**
     * Lấy tên key camel hồi quy
     *
     * @param [type] $value
     * @return void
     */
    protected function recursiveToCamel($values)
    {
        if (!\is_array($values)) {
            return $values;
        }
        $ret = [];
        foreach ($values as $k => $v) {
            $res = $this->recursiveToCamel($v);
            if (is_null($res)){
                continue;
            }
                $ret[ZdnString::camel($k)] = $this->recursiveToCamel($v);
        }
        return $ret;
    }

    /**
     * Lấy entity với tên key dạng camel case (kèm loại trừ)
     *
     * @return void
     */
    public function toArrayCamelWithExclude(array $excludes)
    {
        if ($excludes === []) {
            return $this->toArrayCamel();
        }
        $res = $this->toArrayCamel();

        foreach ($excludes as $exclude) {
            $eList = \explode(".", $exclude);
            $eStr = 'unset($res';
            for ($i = 0; $i < count($eList); $i++) {
                $eStr .= '[$eList[' . $i . ']]';
            }
            $eStr .= ");";
            eval($eStr);
        }

        return $res;
    }

    /**
     * Lấy entity với tên key dạng camel case (kèm loại trừ property)
     *
     * @return void
     */
    public function toArrayCamelWithDefaultExclude()
    {
        return $this->toArrayCamelWithExclude($this->excludes);
    }
}
