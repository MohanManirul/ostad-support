import {Hind_Siliguri, Roboto} from "next/font/google";
import LocalFont from "next/font/local"; 
import Script from "next/script";
import "./globals.css";

// import NavBar from "./components/NavBar";

import dynamic from "next/dynamic";

const Nav = dynamic(()=>import('./components/NavBar'))
// const Nav = dynamic(()=>import('./components/NavBar'),{ssr:false}) // {ssr:false} disable the server side rendering 
const Nav2 = dynamic(()=>import('./components/NavBar'),{
  loading:()=><p>loading...</p>
}) // if chunk files take time to load 


const MyLocalFont = LocalFont({
  src:'./fonts/SolaimanLipi.ttf',
  variable: "--local-font",
})

const Siliguri = Hind_Siliguri({
  subsets: ["latin"],
  weight: ["300", "400", "500", "600"],
  variable: "--font-siliguri",
})

const roboto_font = Roboto({
  subsets: ["latin"],
  weight: ["300", "400", "500"],
  variable: "--font-roboto",
})
 
export default function RootLayout({ children }) {
  return (
    // for single font <html lang="en" className={Siliguri.variable}> 
    <html lang="en" className={`${Siliguri.variable} ${roboto_font.variable} ${MyLocalFont.variable} `}> 
      <body>
        <Nav />
        <Nav />
        <Nav />
        <Nav />
        <Nav />
        <Nav />
        <Nav />
        <Nav />
        <Nav />
        <Nav />
        <Nav />
        {children}
        <Script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js" />
        <img src="images/happy-man.jpg" alt="happy-man" />
      </body>
    </html>
  );
}
