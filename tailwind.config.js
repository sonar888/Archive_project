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
        "light": "#f0ebd8"
        
      }
    },
  },
  plugins: [],
}

