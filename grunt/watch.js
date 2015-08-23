module.exports = {
	dev: {
		less: {
			files: 'src/less/**/*.less',
			tasks: ['less:dev'],
			options: {
				livereload: true
			}
		},
		js: {
			files: 'src/js/**/*.js',
			tasks: ['copy:js'],
			options: {
				livereload: true
			}
		},
		js: {
			files: 'src/**/*.php',
			tasks: ['copy:php'],
			options: {
				livereload: true
			}
		}
	}
};
