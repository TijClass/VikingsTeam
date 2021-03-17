const colors = require("tailwindcss/colors");

module.exports = {
    theme: {
        extend: {
            lineHeight: {
                'extra': '106px',
            },
            letterSpacing: {
                'tightest': '0.01em',
            },
            fontfamily: {
                'Montserrat': ['Montserrat', 'sans-serif']
            },
            colors: {

                oceangreen: {
                    100: "#539F7D",
                },
                "light-blue": 'colors.lightBlue',
                'cyan': 'colors.cyan',
                'gris': '#FFFFFF',
            },
        },
    },
    variants: {},
    plugins: [],
};