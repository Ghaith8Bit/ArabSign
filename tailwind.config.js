/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.{html,js,blade.php}"],
    theme: {
        extend: {
            colors: {
                primaryColor: '#275270',
                secondaryColor: '#6099BD',
                textColor: '#363636',
            },
        },
    },
    plugins: [],
}

