/** @type {import('tailwindcss').Config} */
module.exports = {

    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        fontFamily: {
            'sans': ['Nunito Sans', 'sans serif']
        },
        colors: {
            'primary': '#00ADB5',
            'black': '#222831',
            'text': '#393E46',
            'white': '#FFFFFF'
        },
    },
    plugins: [
    ],
    variants: {
        extends: {
            display: ['group-focus']
        }
    }
}
