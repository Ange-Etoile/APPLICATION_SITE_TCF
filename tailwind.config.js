/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage:{
        'gradient-button':'linear-gradient(to right, rgb(182,227,212), rgba(19,94,242,1))',
      },
      colors:{
        'color-proposition' :'#bdd5e9',
      }
    },
  },
  plugins: [],
}

