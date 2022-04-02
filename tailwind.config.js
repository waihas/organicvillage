module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
          secondary: '#9CCE00',
          primary: {
              light: '#B9D135',
              default: '#C2CF00',
              dark: '#868F03',
              gray: '#171a1d',
          },
      },
    },
  },
  plugins: [],
}
