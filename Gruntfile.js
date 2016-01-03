'use strict';

module.exports = function (grunt) {
    require('load-grunt-config')(grunt, {
    	data: {
	        nodedir: 'node_modules',
	        srcdir: 'src',
	        tmpdir: '.tmp',
	        dist: 'content/themes/existential',
	        srcfiles: {
	            js: ['./src/js/**/*.js'],
	            less: ['./src/less/main.less']
	        }
    	}
    });

    grunt.registerTask('default', ['serve']);
    grunt.registerTask('serve', ['clean:dev', 'less:dev', 'copy:js', 'copy:php', 'copy:assets', 'shell:dev', 'php:dev', 'watch']);
    grunt.registerTask('build', ['clean:prod', 'less:prod', 'copy:js', 'copy:prod', 'copy:assets']);
    grunt.registerTask('deploy', ['build', 'rsync:prod']);
    grunt.registerTask('js', ['concat:js', 'babel']);
};
