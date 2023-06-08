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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                discord: {
                    error: '#f06c6b',
                    blue: '#6064f4',
                    bluehover: '#4854c4',
                    whitetext: '#fff',
                    graytext: '#9dacb3',
                    bluetext: '#0b9be3',
                    backgrounddark: '#1e1f22',
                    backgroundmedium: '#2b2d31',
                    backgroundlight: '#313338',
                    hover: '#3d3e44',
                    icon: '#dadde0',


                },
            },
        },
        
    },

    plugins: [forms],
};
