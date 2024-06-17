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
        "2xs": "10px"
      }
    },
  },
  plugins: [],
}

