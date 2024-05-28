/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container:{
      center: true,
    },extend: {
      colors : {
        primary: '#F8F7F3',
        secondary:'#999999',
        third:'#F0EEE5',
        fourth: '#3C4043',
        fifth: '#BAE6FF',
      },
      fontFamily: {
        'MadeTomy-Light': ['MadeTomy-Light'],
        'MadeTomy-Thin': ['MadeTomy-Thin'],
        'MadeTomy-Regular': ['MadeTomy-Regular'],
        'MadeTomy-Medium': ['MadeTomy-Medium'],
        'MadeTomy-Bold': ['MadeTomy-Bold'],
        'MadeTomy-ExtraBold': ['MadeTomy-ExtraBold'],
      },
    },
  },
  plugins: [],
}