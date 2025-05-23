/** @type {import('tailwindcss').Config} */
export default {
  content: ["./**/*.{html,js,php}","./includes/**/*.php", "./assets/js/**/*.js"],
  darkMode: "class", // Use class strategy for dark mode
  theme: {
    extend: {
      colors: {
        primary: {
          100: "#e6edf5",
          200: "#ccdcec",
          300: "#99b8d8",
          400: "#6695c5",
          500: "#3371b1",
          600: "#0e3163", // Main primary color
          700: "#0b274f",
          800: "#081c3c",
          900: "#051128",
        },
        secondary: {
          100: "#fde9e7",
          200: "#fbd3cf",
          300: "#f8a7a0",
          400: "#f47c70",
          500: "#f15744", // Main secondary color (Sec2Pay-red)
          600: "#d94e3c",
          700: "#b23c2f",
          800: "#8c2f25",
          900: "#662219",
        },
        accent: {
          100: "#e6f7fa",
          200: "#cceff5",
          300: "#99dfeb",
          400: "#66cfe0",
          500: "#33bfd6",
          600: "#00afc6",
          700: "#008c9e",
          800: "#006977",
          900: "#00454f",
        },
        success: {
          100: "#e8f5e9",
          200: "#d1ebd3",
          300: "#a3d7a7",
          400: "#76c47c",
          500: "#48b050",
          600: "#3c9d48",
          700: "#2e7d3a",
          800: "#235e2c",
          900: "#19401e",
        },
        danger: {
          100: "#ffebee",
          200: "#ffd7dc",
          300: "#ffafba",
          400: "#ff8797",
          500: "#ff5f75",
          600: "#ff3751",
          700: "#cc2c41",
          800: "#992131",
          900: "#661620",
        },
      },
      boxShadow: {
        dark: '0 4px 6px -1px rgba(0, 0, 0, 0.3), 0 2px 4px -1px rgba(0, 0, 0, 0.26)',
      },
      animation: {
        'fade-in': 'fadeIn 0.3s ease-in-out',
        'fade-out': 'fadeOut 0.3s ease-in-out',
        'slide-in': 'slideIn 0.4s ease-out',
        'scroll': 'scroll 30s linear infinite',
        'pulse-scale': 'pulseScale 0.4s ease-out', // New animation for tab selection
        'bounce-once': 'bounceOnce 0.3s ease-out', // New animation for tab selection
      },
      keyframes: {
        fadeIn: {
          '0%': { opacity: '0', transform: 'translateY(10px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        fadeOut: {
          '0%': { opacity: '1', transform: 'translateY(0)' },
          '100%': { opacity: '0', transform: 'translateY(10px)' },
        },
        slideIn: {
          '0%': { transform: 'translateX(20px)', opacity: '0' },
          '100%': { transform: 'translateX(0)', opacity: '1' },
        },
        scroll: {
          '0%': { transform: 'translateX(0)' },
          '100%': { transform: 'translateX(-50%)' },
        },
        pulseScale: {
          '0%': { transform: 'scale(1)' },
          '50%': { transform: 'scale(1.05)' },
          '100%': { transform: 'scale(1)' },
        },
        bounceOnce: {
          '0%': { transform: 'translateY(0)' },
          '40%': { transform: 'translateY(-10px)' },
          '70%': { transform: 'translateY(-4px)' },
          '100%': { transform: 'translateY(0)' },
        },
       

      },
    },
    fontFamily: {
      inter: ["Inter", "sans-serif"],
    },
  },
  plugins: [],
};