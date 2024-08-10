// tailwind.config.js
module.exports = {
  content: [
    'public/**/*.{html,js,php}', // Loyihangizdagi HTML va JS fayllari joylashgan katalogga ko'ra o'zgartiring
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'), // Tailwind CSS Forms plaginini qo'shish
  ],

}
// const defaultTheme = require('tailwindcss/defaultTheme')
//
// module.exports = {
//   theme: {
//     extend: {
//       fontFamily: {
//         sans: ['Inter var', ...defaultTheme.fontFamily.sans],
//       },
//     },
//   },
//   // ...
// }