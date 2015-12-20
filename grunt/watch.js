module.exports = {
	styles: {
		files: ['src/less/**/*.less'],
		tasks: ['less:dev'],
		options: {
			livereload: 35729
		}
	},
	scripts: {
		files: ['src/js/**/*.js'],
		tasks: ['copy:js'],
		options: {
			livereload: 35729
		}
	},
	markup: {
		files: ['src/**/*.php'],
		tasks: ['copy:php'],
		options: {
			livereload: 35729
		}
	}
};
