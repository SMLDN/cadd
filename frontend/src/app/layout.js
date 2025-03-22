import { Inter } from "next/font/google";
import "./globals.css";
import StoreProvider from "./StoreProvider";
import { GoogleAnalytics } from '@next/third-parties/google'

const inter = Inter({ subsets: ["vietnamese"] });

export default function RootLayout({ children }) {
  return (
    <StoreProvider>
    <html lang="vi">
      <body className={inter.className}>
        {children}
        <div className="text-right mr-10 text-white">ZDN@2025</div>
      </body>
      <GoogleAnalytics gaId="G-7X3R39YR6Z" />
    </html>
    </StoreProvider>
  );
}
