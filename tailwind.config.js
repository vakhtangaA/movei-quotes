module.exports = {
    important: true,
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            spacing: {
                1000: "1000px",
            },
            colors: {
                "costum-black": "#3F3D3D",
                cadet_blue: "#5F9EA0",
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [require("@tailwindcss/forms")],
};
