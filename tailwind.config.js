/** @type {import('tailwindcss').Config} */
const colors = require("tailwindcss/colors");
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                sky: colors.sky,
                teal: colors.teal,
                cyan: colors.cyan,
                rose: colors.rose,
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
        require('flowbite/plugin'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp'),

    ],
}

