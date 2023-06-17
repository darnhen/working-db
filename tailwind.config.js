/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/**/*.{js,ts,jsx,tsx}",
    "./pages/**/*.{js,ts,jsx,tsx}",
    "./components/**/*.{js,ts,jsx,tsx}",

    // Or if using `src` directory:
    "./src/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      colors: {
        dbpink: '#FEC9F2',
        dbpurple: '#9096CE',
        dbyellow: '#F3F3D0',
        dbbrown: '#C68E8E'
      },
      fontFamily: {
        courier: ['Courier Prime', 'monospace'],
        carta: ["CartaNueva", "cursive"],
        times: ["Times New Roman", "serif"],
        sans: ["Arial", "Helvetica", "sans-serif"]
      },
    }
  },
  plugins: []
}

