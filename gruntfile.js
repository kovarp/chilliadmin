module.exports = function (grunt) {
	require('jit-grunt')(grunt);
	require('time-grunt')(grunt);

	grunt.initConfig(
		{
			watch:   {
				sass: {
					files: ['assets/scss/**/*.scss'],
					tasks: ['compile_css']
				}
			},
			sass:    {
				dist: {
					options: {
						outputStyle: 'compressed',
						sourceMap:   false
					},
					files:   {
						'assets/css/styles.css': 'assets/scss/style.scss'
					}
				}
			},
			postcss: {
				options: {
					map:        false,
					processors: [
						require('autoprefixer')({
							browsers: [
								'last 3 versions',
								'ios 6',
								'ie 9'
							]
						}),
						require('postcss-flexbugs-fixes')
					]
				},
				dist:    {
					src: ['assets/css/styles.css']
				}
			}
		}
	);

	grunt.registerTask('default', ['compile_css', 'watch']);
	grunt.registerTask('compile_css', ['sass', 'postcss']);
};