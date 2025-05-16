module.exports = {
  content: [
    "./index.html",
    "./preachings.html",
    "./music.html",
    "./about.html",
    "./contact.html",
    "./css/**/*.css",
    "./js/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#4A90E2',
        secondary: '#D0021B',
        accent: '#F5A623',
      },
      fontFamily: {
        sans: ['Helvetica', 'Arial', 'sans-serif'],
        serif: ['Georgia', 'serif'],
      },
    },
  },
  plugins: [],
}