module.exports = {
  purge: [
    'source/**/*.blade.php',
    'source/**/*.md',
    'source/**/*.html',
  ],
  theme: {
    extend: {
      container: {
        center: true
      },
      colors: {
        blue: {
          150: '#dbeafc',
          750: '#223e7c',
        }
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
