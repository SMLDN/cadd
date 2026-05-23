import { Inter } from "next/font/google";
import "./globals.css";
import StoreProvider from "./StoreProvider";
import { GoogleAnalytics } from "@next/third-parties/google";
import Script from "next/script";

const inter = Inter({ subsets: ["vietnamese"] });

export default function RootLayout({ children }) {
  return (
    <StoreProvider>
      <html lang="vi">
        <head>
          <Script
            async
            src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5491378674308309"
            crossOrigin="anonymous"
            strategy="afterInteractive"
          />
        </head>
        <body className={inter.className}>
          {children}
          <div className="text-right mr-10 text-white">ZDN@2026</div>
        </body>
        <GoogleAnalytics gaId="G-7X3R39YR6Z" />
      </html>
    </StoreProvider>
  );
}
