/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{php,html,js}",
    "templates/*.{php,html,js}",
    "templates/template-parts/*.{php,html,js}",
  ],
  theme: {
    extend: {},
    colors: {
      primary: {
        100: "#dddddd",
        200: "#bababa",
        300: "#989898",
        400: "#757575",
        500: "#535353",
      },
      secondary: {
        100: "#dae7fd",
        200: "#b5cffb",
        300: "#8fb8fa",
        400: "#6aa0f8",
        500: "#4588f6",
      },
      tertiary: {
        100: "#e3f4d3",
        200: "#c7e9a7",
        300: "#abde7c",
        400: "#8fd350",
        500: "#73c824",
      },
      dark_component: {
        100: "#d4d4d4",
        200: "#a9a9a9",
        300: "#7f7f7f",
        400: "#545454",
        500: "#292929",
      },
      white: "#FAFBF6",
      transparent: "transparent",
    },
  },
  plugins: [],
};
