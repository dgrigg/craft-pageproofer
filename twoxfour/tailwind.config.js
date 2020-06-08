module.exports = {
  important: true,
  theme: {
    fontFamily: {
      display: ["Gilroy", "sans-serif"],
      body: ["Graphik", "sans-serif"],
    },
    extend: {
      boxShadow: {
        '2xl': ' 0px 25px 41px -32px rgba(0,0,0,0.8)',
      },
      colors: {
        'orange-900': '#e46735',
        'teal-900': '#0c3a46',
      },
      fontSize: {
        '6xl': '3.75rem',
        'xxl': '35vw',
      },
      inset: {
        '-10vw': '-10vw',
      },
      padding: {
        "11": "2.75rem",
        "15": "3.75rem",
        "22": "5.5rem",
        "30": "7.5rem",
        "35": "8.75rem",
      },
      margin: {
        "96": "24rem",
        "128": "32rem",
      },
      scale: {
        '102': '1.02',
      },
    },
  },
  variants: {
    backgroundColor: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
    boxShadow: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
    opacity: ["responsive", "hover"],
    padding: ['responsive', 'hover', 'focus'],
    scale: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
    textColor: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
    transitionProperty: ['responsive', 'hover', 'focus'],

  },
};
