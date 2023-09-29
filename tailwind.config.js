/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './public/**/*.{css,vue,js,jsx,ts,tsx,scss}',
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

