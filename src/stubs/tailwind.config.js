module.exports = {
    purge: [],
    theme: {
        fontFamily: {
            'base': 'Inter',
            // 'base-ar': 'Tajawal' // I love this font for arabic
        },
        extend: {},
    },
    variants: {},
    plugins: [
        require('@tailwindcss/custom-forms'),
    ],
};
