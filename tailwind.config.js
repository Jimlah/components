/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: ['class', '[data-dark-mode-on=true]'],
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
