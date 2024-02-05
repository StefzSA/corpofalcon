/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{php,html,js}",
    "templates/*.{php,html,js}",
    "templates/template-parts/*/*.{php,html,js}",
    "includes/*.{php,html,js}",
  ],
  theme: {
    extend: {},
    container: {
      padding: {
        DEFAULT: "1rem",
        sm: "2rem",
        lg: "4rem",
        xl: "5rem",
        "2xl": "6rem",
      },
      center: true,
    },
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
      lightblue: {
        100: "#e9f1fe",
        200: "#d3e3fd",
        300: "#bcd4fb",
        400: "#a6c6fa",
        500: "#90b8f9",
      },
      tertiary: {
        100: "#e3f4d3",
        200: "#c7e9a7",
        300: "#abde7c",
        400: "#8fd350",
        500: "#73c824",
      },
      darkgreen: {
        100: "#d9e4d1",
        200: "#b4c9a3",
        300: "#8ead74",
        400: "#699246",
        500: "#437718",
        600: "#365f13",
        700: "#28470e",
        800: "#1b300a",
        900: "#0d1805",
      },
      dark_component: {
        100: "#d4d4d4",
        200: "#a9a9a9",
        300: "#7f7f7f",
        400: "#545454",
        500: "#292929",
      },
      white: "#FAFBF6",
      twhite: "#FFFFFF",
      transparent: "transparent",
    },
  },
  plugins: [
    require("tailwindcss/nesting")(require("postcss-nesting")),
    require("tailwindcss"),
  ],
};
