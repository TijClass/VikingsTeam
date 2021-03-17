const colors = require("tailwindcss/colors");

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                montserrat: ["Montserrat", "sans-serif"],
            },
            colors: {
                oceangreen: {
                    100: "#539F7D",
                },
            },
        },
        variants: {},
        plugins: [require("tailwind-scrollbar-hide")],
    },
}