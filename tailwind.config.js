/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        jomhuria: ['Jomhuria','serif'],
        jockey_one: ['Jockey One','serif'],
        inter: ['Inter','serif'],
      }
    },
  },
  plugins: [],
}