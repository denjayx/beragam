/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        poppins: ['"Poppins"', ...defaultTheme.fontFamily.sans], monstserrat: ['"Monstserrat"', ...defaultTheme.fontFamily.sans]
      }
    },
  },
  plugins: [],
}

