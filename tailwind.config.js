const theme = require('./theme.json');
const defaultTheme = require('tailwindcss/defaultTheme');
const tailpress = require('@jeffreyvr/tailwindcss-tailpress');

module.exports = {
  content: [
    './*.php',
    './**/*.php',
    './resources/css/*.css',
    './resources/js/*.js',
    './safelist.txt',
    './node_modules/tw-elements/dist/js/**/*.js',
  ],
  safelist: [
    {
      // Paddings
      pattern: /^\-?m(\w?)-/,
      variants: ['sm', 'md', 'lg', 'xl', '2xl'],
    },
    {
      // Margins
      pattern: /^p(\w?)-/,
      variants: ['sm', 'md', 'lg', 'xl', '2xl'],
    },
    {
      // Rounded Corners
      pattern: /rounded-(none|md|lg|full)/,
    },
  ],
  theme: {
    container: {
      padding: {
        DEFAULT: '1rem',
        md: '1.5rem',
        xl: '2rem',
      },
    },
    extend: {
      colors: tailpress.colorMapper(
        tailpress.theme('settings.color.palette', theme)
      ),
      fontSize: tailpress.fontSizeMapper(
        tailpress.theme('settings.typography.fontSizes', theme)
      ),
      fontFamily: {
        sans: ['Poppins', ...defaultTheme.fontFamily.sans],
      },
      typography: {
        DEFAULT: {
          css: {
            color: '#000',
            a: {
              color: '#335978',
              '&:hover': {
                color: '#002f56',
              },
            },
          },
        },
      },
    },
    screens: {
      xs: '480px',
      sm: '640px',
      md: '768px',
      // lg: tailpress.theme('settings.layout.contentSize', theme),
      // xl: tailpress.theme('settings.layout.wideSize', theme),
      lg: '1024px',
      xl: '1280px',
      '2xl': '1440px',
      '3xl': '1536px',
      '4xl': '1921px',
    },
  },
  plugins: [
    tailpress.tailwind,
    require('tw-elements/dist/plugin'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/aspect-ratio'),
  ],
};
