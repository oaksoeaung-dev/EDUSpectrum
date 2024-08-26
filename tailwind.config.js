/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors : {
            primary : {
                DEFAULT : "#163020",
                hover : "#304D30"
            },
            secondary : "#272829",
            accent:{
                DEFAULT : "#B6C4B6",
                secondary : "#F4F0ec",
                hover : "#B88C5D"
            }
        }
    },
    container: {
        padding: {
            DEFAULT: '15px'
        },
    },
    screens : {
        sm : "640px",
        md : "768px",
        lg : "960px",
        xl : "1200px",
    },
    fontFamily : {
        primary : ["Poppins", "sans-serif"],
    },
    backgroundImage : {
        hero : "url(/public/images/hero/bg.jpg)",
        grid : "url(/public/images/grid.png)"
    },
    animation : {
        rotateY : "rotateY 8s linear infinite"
    },
    keyframes : {
        rotateY : {
            "0%" : {transform: 'rotateY(-180deg)'},
            "100%" : {transform : 'rotateY(180deg)'}
        }
    }
  },
  plugins: [],
}

