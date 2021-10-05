const colors = require('tailwindcss/colors');

module.exports = {
  purge: {
    // 環境変数に反応しないので、手動でパージを操作
    // enabled: true,
    content: ['./src/**/*.php', './src/**/*.html', './src/js/**/*.js'],
    options: {
      keyframes: true,
    },
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        cyan: colors.cyan,
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
