/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        ifoodTitle: ['iFoodRCTitulos', 'sans-serif'],
        ifood: ['IFoodRCTextos', 'sans-serif']
      },
      backgroundImage: {
        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))'
      },
      boxShadow: {
        'menu': '0px -3px 5px rgba(0,0,0,.2)',
        'card': '0px 0px 3px rgba(0,0,0,.2)'
      }
    },
  },
  plugins: [],
}

