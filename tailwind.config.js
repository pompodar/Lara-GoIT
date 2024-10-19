import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        screens: {
			sm: '480px',
			md: '768px',
			lg: '1024px',
			xl: '1280px',
			'2xl': '1366px',
			'6xl': '1920px',
		},
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
			fontSize: {
				xsm: ['10px', '12.19px'],
                '1.5xsm': ['12px', '14.63px'],
				sm: ['14px', '14px'],
                '1.5sm': ['14px', '16px'],
                '3sm': ['14px', '17.07px'],
				xbase: ['15px', '17.85px'],
				'x1.5xbase': ['16px', '16px'],
				xxbase: ['16px', '19.5px'],
				base: ['16px', '24px'],
				lg: ['18px', '28px'],
				xl: ['20px', '30px'],
				xxl: ['21px', '24.99px'],
				'2xl': ['24px', '32px'],
				'2.5xl': ['24px', '28.56px'],
				'2.75xl': ['24px', '29.76px'],
				'3xl': ['30px', '37.2px'],
				'3.5xl': ['32px', '48.2px'],
				'3.75xl': ['33px', '40.92px'],
				'4xl': ['36px', '44px'],
				'4.5xl': ['44px', '54.56px'],
				'5xl': ['48px', '56px'],
				'6xl': ['50px', '48.2px'],
				'8xl': ['73px', '90.52px'],
			},
			lineHeight: {
				tight: '1.1',
				normal: '1.5',
				relaxed: '1.75',
				loose: '2',
			},
			letterSpacing: {
				'-tight': '-0.05em',
			},
			backgroundColor: (theme) => ({
				primary: '#2400FF',
				secondary: '#0000000A',
				main: '#FFFFFF',
			}),
			colors: {
				secondary: '#2400FF',
                ternary: '#AAB3B9',
				orange: {
					DEFAULT: '#FF6B0A',
					light: '#F07F2E',
				},
				black: '#000000',
				violet: {
					light: '#B49BC8',
					DEFAULT: '#9C6FE2',
					dark: '#503659',
				},
				azure: {
					light: '#AFC8D8',
					DEFAULT: '#6D9BF5',
				},
				blue: {
					DEFAULT: '#273DA4',
					light: '#496DF8',
				},
				teal: {
					DEFAULT: '#2F7E7A',
					light: '#477D95',
				},
				red: '#EB1E32',
				pink: {
					DEFAULT: '#DE78A1',
					light: '#F4CED3',
					dark: '#DC148C',
				},
				green: '#1DA551',
				yellow: {
					DEFAULT: '#F1E325',
					light: '#D7F463',
				},
				gray: {
					DEFAULT: '#31343A',
					light: '#FAFAFA',
					dark: '#87878a',
				},
			},
			keyframes: {
				side: {
					'0%, 100%': { transform: 'translateX(25%)' },
					'50%': { transform: ' translateY(0)' },
				},
			},
			animation: {
				side: 'side 1s ease-in-out infinite',
			},
        },
    },
    plugins: [],
};
