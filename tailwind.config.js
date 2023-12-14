/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/view/**/*.{html,php}"],
  theme: {
    extend: {
      colors: {
        bgcolor: "#251D3A",
        bgcolorLight: "#C8C6C6",
        container: "#2A2550",
        putih: "#F3EEEA",
        putihDash: "#F7F6F2",
        main: "#FF7700",
        mainDash: "#FDB827",
        secDash: "#21209C",
        hitam: "#23120B",
      },
      fontFamily: {
        poppins: ["Poppins", "sans-serif"],
      },
      aspectRatio: {
        "2/3": "2/3",
      },
    },
  },
  plugins: [],
};
