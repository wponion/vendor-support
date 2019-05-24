let $files = {};

$files[ 'src/scss/selectize.scss' ] = {
	dist: 'vendors/selectize/',
	combine_files: true,
	scss: true,
	autoprefixer: true,
	minify: true,
	rename: 'selectize.css',
	watch: true,
};
$files[ 'src/js/selectize.js' ]     = {
	dist: 'vendors/selectize/',
	combine_files: true,
	uglify: true,
	rename: 'selectize.js',
	watch: true,
};

$files[ 'src/scss/flatpickr.scss' ] = {
	dist: 'vendors/flatpickr/',
	combine_files: true,
	scss: true,
	autoprefixer: true,
	minify: true,
	rename: 'style.css',
	watch: true,
};
$files[ 'src/js/flatpickr.js' ]     = {
	dist: 'vendors/flatpickr/',
	combine_files: true,
	uglify: true,
	rename: 'script.js',
	watch: true,
};

module.exports = {
	files: $files,
	config: {
		combine_files: {
			append: 'wponion-append',
			prepend: 'wponion-prepend',
			inline: 'wponion-inline',
		},
	}
};
