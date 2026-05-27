import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {

            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                primary: '#15803d', // verde oscuro
                secondary: '#22c55e', // verde principal
                accent: '#86efac', // verde claro
                soft: '#f0fdf4', // fondo suave verde
            },

            boxShadow: {
                soft: '0 10px 25px rgba(21, 128, 61, 0.15)',
                strong: '0 20px 40px rgba(21, 128, 61, 0.25)',
            },

            borderRadius: {
                xl: '1rem',
                '2xl': '1.5rem',
            },
        },
    },

    plugins: [forms],
};