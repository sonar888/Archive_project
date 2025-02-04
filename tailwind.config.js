/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    
    extend: {
      colors: {
        "black" : "#0d1321",
        "dark": "#1d2d44",
        "dark-blue": "#3e5c76",
        "blue": "#748cab",
        "light": "#cfd0ca"
        
      },
      fontFamily: {
        "archive" : ['Grey Qo', 'Helvetica']
      }

    },
  },
  plugins: [],
}


// @import "tailwindcss";


//   @theme {
//     --spacing: 1px;
//       --color-black: #0d1321;
//       --color-dark: #1d2d44;
//       --color-dark-blue: #3e5c76;
//       --color-blue: #748cab;
//       --color-light: #cfd0ca;
//       --font-archive: 'Grey Qo', 'Helvetica';
  
//   }





    
