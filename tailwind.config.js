const colors = require('tailwindcss/colors');

module.exports = {
  purge: [
    './templates/**/*.php'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        cake: {
          red: '#d33c43',
          black: '#404041'
        },
        yellow: colors.yellow
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms')
  ],
}
