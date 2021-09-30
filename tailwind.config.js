const _ = require("lodash");
const theme = require("./theme.json");
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

module.exports = {
  mode: "jit",
  purge: {
    content: [
      "./*/*.php",
      "./**/*.php",
      "./resources/css/*.css",
      "./resources/js/*.js",
      "./safelist.txt",
    ],
  },
  theme: {
    fontFamily: {
      sans: ["'Baloo 2'", "ui-sans-serif", "sans-serif"],
    },
    container: {
      padding: {
        DEFAULT: "1rem",
        sm: "2rem",
        lg: "0rem",
      },
    },
    extend: {
      colors: tailpress.colorMapper(
        tailpress.theme("settings.color.palette", theme)
      ),
      colors: {
        gray: {
          DEFAULT: "#484444",
          100: "#E5E4E4",
          200: "#BFBBBB",
          300: "#989191",
          400: "#706969",
          500: "#484444",
          600: "#383434",
          700: "#292626",
          800: "#191818",
          900: "#0A0A0A",
        },
        secondary: {
          DEFAULT: "#525990",
          100: "#E5E6F0",
          200: "#BEC1DA",
          300: "#979DC3",
          400: "#7178AD",
          500: "#525990",
          600: "#404670",
          700: "#2F3351",
          800: "#1D2033",
          900: "#0C0D14",
        },
        primary: {
          DEFAULT: "#F7A933",
          100: "#FEF3E2",
          200: "#FCE0B6",
          300: "#FACD89",
          400: "#F8BA5D",
          500: "#F7A933",
          600: "#DF8A09",
          700: "#A26407",
          800: "#653F04",
          900: "#3D2603",
        },
        pink: {
          DEFAULT: "#EC2561",
          100: "#FCE0E9",
          200: "#F8B2C7",
          300: "#F484A5",
          400: "#F05584",
          500: "#EC2561",
          600: "#D9134E",
          700: "#A30E3B",
          800: "#6D0927",
          900: "#360514",
        },
      },
    },
    screens: {
      sm: "640px",
      md: "768px",
      lg: "1280px",
      xl: tailpress.theme("settings.layout.wideSize", theme),
    },
  },
  plugins: [tailpress.tailwind],
};
