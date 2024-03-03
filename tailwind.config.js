import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "rgba(24, 28, 44, 1)",
                secondary: "rgba(32, 36, 52, 1)",
                font1: "rgba(56, 60, 140, 1)",
                font2: "rgba(56, 180, 140, 1)",
            },
        },
    },

    plugins: [forms, typography],
    darkMode: "media",
};
