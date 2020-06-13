module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
		extend: {
			fontFamily: {
				sans: [
					"HelveticaNeue-Light",
					"Helvetica Neue Light",
					"Helvetica Neue",
					"Helvetica",
					"Arial",
					"Lucida Grande",
					"sans-serif"
				],
				mono: [
					"Inconsolata",
					"Lucida Console",
					"Courier New",
					"monospace"
				]
			},
			fontSize: {
				bigview: "12vmin"
			},
			letterSpacing: {
				tightest: "-.1em",
				compact: "-.02em",
				widest: ".1em"
			},
      opacity: {
				'10': '0.1',
				'20': '0.2',
				'95': '0.95',
			},
			colors: {
				default: "var(--text-default-color)",
				inverse: "var(--text-inverse-color)",
				hover: "var(--text-hover-color)",
				accent: "var(--text-accent-color)",
				"accent-light": "var(--text-accent-light-color)",
				muted: "var(--text-muted-color)",
				"muted-light": "var(--text-muted-light-color)",
				error: "var(--text-error-color)"
			},
			backgroundColor: theme => ({
				page: "var(--page-background-color)",
				header: "var(--header-background-color)",
				card: "var(--card-background-color)",
				article: "var(--article-background-color)",
				button: "var(--button-background-color)",
				menu: "var(--menu-background-color)"
			}),
		}
  },
  variants: {},
  plugins: [
    require('@tailwindcss/custom-forms')
  ]
}
