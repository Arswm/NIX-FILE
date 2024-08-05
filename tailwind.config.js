/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {
        colors: {
            'primary-color' : '#EB4334' ,
            'secondary-color' : '#FF9900',
            'text-color' : '#71717a',
        }
    },
  },
  plugins: [

  ],
}

