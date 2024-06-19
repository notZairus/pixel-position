/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
        "Hanken-grotesk": ['Hanken Grotesk', 'sans-serif']
      },
      fontSize: {
        "2xs": "10px",
        "10xl" : "3rem"
      },
      height : {
        '0.1' : "0.5px"
      },
    },
  },
  plugins: [],
}

