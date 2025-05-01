/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{php,html,js}",
    "./**/*.{php,html,js}",
    "!./node_modules/**/*",
    "./.dist/**/*",
  ],
  theme: {
    extend: {
      fontFamily: {
        poppins: ["Poppins", "sans-serif"],
        Baskervville: ['"NewBaskerville"', "serif"],
        playfair: ['"Playfair Display"', "serif"],
        Raleway: ["Raleway", "sans-serif"],
      },
      colors: {
        fargo: "#977e62",
      },
    },
  },
  plugins: [],
};
