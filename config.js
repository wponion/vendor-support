let $files                            = {};
$files[ 'src/scss/selectize.scss' ]   = {
	dist: 'vendors/selectize/',
	combine_files: true,
	scss: true,
	autoprefixer: true,
	minify: true,
	rename: 'selectize.css',
	watch: true,
};
$files[ 'src/js/selectize.js' ]       = {
	dist: 'vendors/selectize/',
	combine_files: true,
	uglify: true,
	rename: 'selectize.js',
	watch: true,
};
$files[ 'src/scss/flatpickr.scss' ]   = {
	dist: 'vendors/flatpickr/',
	combine_files: true,
	scss: true,
	autoprefixer: true,
	minify: true,
	rename: 'style.css',
	watch: true,
};
$files[ 'src/js/flatpickr.js' ]       = {
	dist: 'vendors/flatpickr/',
	combine_files: true,
	uglify: true,
	rename: 'script.js',
	watch: true,
};
$files[ 'src/scss/pickr/pickr.scss' ] = {
	dist: 'vendors/pickr/',
	combine_files: true,
	scss: true,
	autoprefixer: true,
	minify: true,
	rename: 'pickr.css',
	watch: true,
};
module.exports                        = {
	files: $files,
	config: {
		combine_files: {
			append: 'wponion-append',
			prepend: 'wponion-prepend',
			inline: 'wponion-inline',
		},
		webpack_pickr: {
			mode: 'production',
			output: { filename: '[name].js', },
			target: 'node',
			module: {
				rules: [
					{
						test: /\.js$/,
						loader: 'babel-loader',
						options: {
							presets: [ '@babel/preset-env' ],
							plugins: [ 'module:@babel/plugin-proposal-class-properties' ]
						}
					}
				]
			},
		}
	}
};
