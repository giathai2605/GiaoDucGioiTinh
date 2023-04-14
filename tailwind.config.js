/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  mode: 'jit',
  content: [
    "./app/views/**/**/**/*.{html,js,php,blade.php}",
    "./app/views/**/**/*.{html,js,php,blade.php}",
    "./app/views/**/*.{html,js,php,blade.php}", './node_modules/tw-elements/dist/js/**/*.js'],
  theme: {
    extend: {
      keyframes: {
        down: {
          '0%': { transform: 'translateY(-100%)' },
          '100%': { transform: 'translateY(0)' },

        },
        up: {
          '0%': { transform: 'translateY(0)' },
          '100%': { transform: 'translateY(-100%)' },
        },
        fade: {
          '0%': { opacity: 0 },
          '100%': { opacity: 1 },
        },
        popup: {
          '0%': { transform: 'scale(0.5)', opacity: 0 },
          '100%': { transform: 'scale(1)', opacity: 1 },
        },
        slideUP: {
          '0%': { transform: 'translateY(100%)' },
          '100%': { transform: 'translateY(0)' },
        },
        slideInLeft: {
          '0%': { transform: 'translateX(-100%)' },
          '100%': { transform: 'translateX(0)' },
        },

      },
      animation: {
        down: 'down 0.9s ease-in-out',
        up: 'up 0.9s ease-in-out',
        fade: 'fade .5s ease-in-out',
        popup: 'popup .5s ease-in-out',
        slideUP: 'slideUP .7s ease-in-out',
      },
      fontFamily: {
        'montserrat': ['Montserrat', 'sans-serif'],
      }
    },
  },
  plugins: [
    require('tw-elements/dist/plugin'),
    require("daisyui"),
  ],
  daisyui: {
    styled: true,
    themes: true,
    base: true,
    utils: true,
    logs: true,
    rtl: false,
    prefix: "",
    darkTheme: "dark",
  },
}
