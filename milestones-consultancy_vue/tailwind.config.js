 /** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      fontFamily:{
        'sans': ["Montserrat"],
      },

      colors:{
        'brown': '#b35032',
        'blue': '#9FD5EA',
        'burgundy': '#9b0917',
        'footer-bg': '#5f767f',
        'footer-color': '#7aa3b2'
      },
    },
  },
  plugins: [],
}
