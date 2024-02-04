import { Inter } from "next/font/google";
import "./globals.css";
import Nav from "@/components/Nav";

const inter = Inter({ subsets: ["vietnamese"] });

export const metadata = {
  title: "Cửu âm đại điển",
};

export default function RootLayout({ children }) {
  return (
    <html lang="vi">
      <body className={inter.className}>
        <Nav />
        {children}
      </body>
    </html>
  );
}
