import { Inter } from "next/font/google";
import "./globals.css";
import StoreProvider from "./StoreProvider";

const inter = Inter({ subsets: ["vietnamese"] });

export default function RootLayout({ children }) {
  return (
    <StoreProvider>
    <html lang="vi">
      <body className={inter.className}>
        {children}
        <div className="text-right mr-10 text-white">ZDN@2024</div>
      </body>
    </html>
    </StoreProvider>
  );
}
