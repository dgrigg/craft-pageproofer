module.exports = {
  important: true,
  theme: {
     aspectRatio: { // defaults to {}
      'none': 0,
      'square': [1, 1], // or 1 / 1, or simply 1
      '16/9': [16, 9],  // or 16 / 9
      '4/3': [4, 3],    // or 4 / 3
      '21/9': [21, 9],  // or 21 / 9
    },
    fontFamily: {
      display: ["Montserrat", "sans-serif"],
      body: ["Montserrat", "sans-serif"],
    },
    extend: {
      boxShadow: {
        '2xl': ' 0px 25px 41px -32px rgba(0,0,0,0.8)',
      },
      colors: {
        black: '#050505',
        gray : {
          200: '#e5e5e5',
          900: '#232323',
        },
        orange: {
          900: '#e46735',
        },
        teal: {
          900: '#0c3a46',
        },
      },
      fontSize: {
        '2xl': '1.5625rem', //25
        '3xl':  '1.6875rem', //27
        '4xl': '2.375rem', //38
        '6xl': '3.75rem', //60

        'xxl': '35vw',
      },
      height: {
        "0": "0",
      },
      inset: {
        '-5vw': '-5vw',
        '-10vw': '-10vw',
      },
      padding: {
        "11": "2.75rem",
        "13": "3.25rem",
        "14": "3.5rem",
        "15": "3.75rem",
        "18": "4.5rem",
        "22": "5.5rem",
        "25": "6.25rem",
        "28": "7rem",
        "30": "7.5rem",
        "35": "8.75rem",
        "37": "9.375rem", //150
      },
      margin: {
        "96": "24rem",
        "128": "32rem",
      },
      maxHeight: {
        "0": "0",
        "56": "14rem"

      },
      maxWidth: {
        "xxs": "10rem",
      },
      scale: {
        '102': '1.02',
      },
    },
  },
  variants: {
    aspectRatio: ['responsive'],
    backgroundColor: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
    boxShadow: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
    height: ['responsive', 'hover', 'focus', "group-hover"],
    maxHeight: ['responsive', 'hover', 'focus', "group-hover"],
    opacity: ["responsive", "hover", "group-hover"],
    padding: ['responsive', 'hover', 'focus'],
    position: ['responsive', 'hover', 'focus', 'group-hover'],
    scale: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
    textColor: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
    transitionProperty: ['responsive', 'hover', 'focus', 'group-hover'],
  },
  plugins: [
    require('tailwindcss-aspect-ratio'),
  ],
};
