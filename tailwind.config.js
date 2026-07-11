/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./src/**/*.html",
    "./*.html",
    "./resources/js/**/*.js",
  ],
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        primary: {
          light: '#4f46e5',
          DEFAULT: '#3b82f6',
          dark: '#1d4ed8',
        },
      },
    },
  },
  plugins: [],
}