import { Inter } from "next/font/google";
import "./globals.css";
import StoreProvider from "./StoreProvider";

const inter = Inter({ subsets: ["vietnamese"] });

export const metadata = {
  title: "Cửu âm đại điển",
};

export default function RootLayout({ children }) {
  return (
    <StoreProvider>
    <html lang="vi">
      <body className={inter.className}>
        {children}
      </body>
    </html>
    </StoreProvider>
  );
}
