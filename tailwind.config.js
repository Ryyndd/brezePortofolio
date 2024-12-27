import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            animation: {
                'fade-in': 'fadeIn 0.5s ease-out',
                'slide-up': 'slideUp 0.5s ease-out',
                'scale-in': 'scaleIn 0.5s ease-out',
            },
            keyframes: {
                fadeIn: {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                },
                slideUp: {
                    '0%': { transform: 'translateY(20px)', opacity: '0' },
                    '100%': { transform: 'translateY(0)', opacity: '1' },
                },
                scaleIn: {
                    '0%': { transform: 'scale(0.9)', opacity: '0' },
                    '100%': { transform: 'scale(1)', opacity: '1' },
                },
            },
            colors: {
                primary: {"50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554"}
              },    
        },
    },

    plugins: [
        require('flowbite/plugin'),
        forms],
        safelist: [
            // Text colors
            'text-red-500',
            'text-amber-500',
            'text-lime-500',
            'text-emerald-500',
            'text-sky-500',
            'text-violet-500',
            'text-fuchsia-500',
            'text-rose-500',
            'text-yellow-500',
            'text-green-500',
            'text-blue-500',
            'text-indigo-500',
            'text-purple-500',
            'text-pink-500',
            'text-gray-500',
            'text-orange-500',
            'text-teal-500',
            'text-cyan-500',
            
            // Background colors
            'bg-red-300',
            'bg-amber-300',
            'bg-lime-300',
            'bg-emerald-300',
            'bg-sky-300',
            'bg-violet-300',
            'bg-fuchsia-300',
            'bg-rose-300',
            'bg-yellow-300',
            'bg-green-300',
            'bg-blue-300',
            'bg-indigo-300',
            'bg-purple-300',
            'bg-pink-300',
            'bg-gray-300',
            'bg-orange-300',
            'bg-teal-300',
            'bg-cyan-300',
            
            'bg-red-400',
            'bg-amber-400',
            'bg-lime-400',
            'bg-emerald-400',
            'bg-sky-400',
            'bg-violet-400',
            'bg-fuchsia-400',
            'bg-rose-400',
            'bg-yellow-400',
            'bg-green-400',
            'bg-blue-400',
            'bg-indigo-400',
            'bg-purple-400',
            'bg-pink-400',
            'bg-gray-400',
            'bg-orange-400',
            'bg-teal-400',
            'bg-cyan-400',
        ],
};
