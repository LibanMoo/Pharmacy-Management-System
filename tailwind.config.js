module.exports = {
    theme: {
      extend: {
        colors: {
          "color-primary": "var(--color-primary)",
          "secondary-color": "var(--secondary-color)"
        },
      },
    },
  };
  const withMT = require("@material-tailwind/html/utils/withMT");
 
module.exports = withMT({
  content: ["./index.html"],
  theme: {
    extend: {},
  },
  plugins: [],
});
  