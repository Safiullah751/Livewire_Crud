/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    extend: {
        margin:{
            '4.5' :'18px',
            '18' :'72px'
        },
        width:{
            'custom-widht':'32rem',
        }
    },
  },
  plugins: [],
}

