module.exports = {
	files: {
		'src/js/flatpickr.js': {
			dist: 'vendors/flatpickr/',
			rename: 'script.js',
			combine_files: false,
			webpack: true,
			uglify: true,
			watch: true
		}
	},
	config: {
		combine_files: {
			append: 'wponion-append',
			prepend: 'wponion-prepend',
			inline: 'wponion-inline',
		}
	}
};
