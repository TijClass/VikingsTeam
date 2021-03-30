const colors = require("tailwindcss/colors");

module.exports = {
  theme: {
    extend: {
      backgroundImage: (theme) => ({
        "right-bg": "url('./src/assets/img/blob-haikei.svg')",
      }),
      fontFamily: {
        montserrat: ["Montserrat", "sans-serif"],
      },
      colors: {
        oceangreen: {
          100: "#539F7D",
        },
        "light-blue": colors.lightBlue,
        cyan: colors.cyan,
      },
    },
  },
  variants: {},
  plugins: [require("tailwind-scrollbar-hide")],
};
