let $a           = require( 'easy-gulp-tasker' );
let $gulp        = require( 'gulp' );
//let rename       = require( 'gulp-rename' );
let $node_path   = "./node_modules/";
let $assets_path = "./vendors/";

/**
 * {ActualPATH:DISTPATH}
 * @type {}
 */
let $filesToCopy = {
	'./node_modules/select2/dist/js/*.full.min.js': 'select2/',
	'./node_modules/select2/dist/css/*.min.*': 'select2/',
	'./node_modules/chosen-js/*.jquery.min.js': 'chosen/',
	'./node_modules/chosen-js/*.min.css': 'chosen/',
	'./node_modules/chosen-js/*.png': 'chosen/',
	'./node_modules/inputmask/dist/min/*.js': 'inputmask',
};

$gulp.task( 'copy', () => {
	let $x;
	for( $x in $filesToCopy ) {
		let $dist_path = $filesToCopy[ $x ];
		$gulp.src( $x )
			 .pipe( $gulp.dest( $assets_path + $dist_path ) );
	}

} );
