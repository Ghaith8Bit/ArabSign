/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.{html,js,blade.php}"],
    theme: {
        extend: {
            colors: {
                primaryColor: '#1b365f',
                secondaryColor: '#3f6592',
                tertiaryColor: '#709ac2',
                textColor: '#363636',
            },
        },
    },
    plugins: [],
}

