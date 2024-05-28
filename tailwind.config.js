/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme');
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],

  darkMode:'class',

  theme: {
    extend: { 
    
    },

    fontFamily: {
      roboto:['Roboto', ...defaultTheme.fontFamily.sans],
    }

  },
  plugins: [],
}
