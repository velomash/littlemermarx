module.exports = {
	styles: {
		files: ['src/less/**/*.less'],
		tasks: ['less:dev'],
		options: {
			livereload: true
		}
	},
	scripts: {
		files: ['src/js/**/*.js'],
		tasks: ['copy:js'],
		options: {
			livereload: true
		}
	},
	markup: {
		files: ['src/**/*.php'],
		tasks: ['copy:php'],
		options: {
			livereload: true
		}
	}
};
