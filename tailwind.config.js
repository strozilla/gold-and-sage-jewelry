import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Lato", ...defaultTheme.fontFamily.sans],
                serif: [
                    "Playfair Display SC",
                    ...defaultTheme.fontFamily.serif,
                ],
            },
            colors: {
                primary: {
                    dark: "#3F4843",
                    light: "#67746D",
                },
                secondary: "#e59f09",
                cream: "#F8F6D9",
            },
        },
    },
    plugins: [],
};
