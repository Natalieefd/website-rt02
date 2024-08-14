import { Transform } from 'stream'

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './src/**/*.html', './node_modules/flowbite/**/*.js',
  ],
  theme: {
    extend: {
        keyframes: {
            slide: {
                '0%': {Transform: '-translate-x-5'},
                '10%': {Transform: '-translate-x-10'},
                '20%': {Transform: '-translate-x-15'},
                '30%': {Transform: '-translate-x-20'},
                '40%': {Transform: '-translate-x-25'},
                '50%': {Transform: '-translate-x-30'},
                '60%': {Transform: '-translate-x-45'},
                '100%': {Transform: '-translate-x-60'},

            },
        },
        animations: {
            'slide-animation': 'slide 2s linear infinite',
        },
    },
    screen: {},
    colors: {
        'primary':"#254336",
        'secondary':"#6B8A7A",
        'teritary':"#B7B597",
        'quaternary':"#DAD3BE",
        'grey':"#F7F9FF",
        'red':"#CD3131",
        'green':"#34BE82",
        'yellow-1':"#FFDF00",
        'yellow-2':"#FFF700",
    },
    fontFamily: {
        poppins:['Poppins'],
        opensans:['Open Sans']
    },
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')({
        charts: true,
    }),],
}

