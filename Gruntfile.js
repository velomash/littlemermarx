'use strict';

module.exports = function (grunt) {
    require('time-grunt')(grunt);
    require('load-grunt-config')(grunt);

    grunt.registerTask('default', []);
    grunt.registerTask('serve', []);
    grunt.registerTask('build', []);
    grunt.registerTask('deploy', []);
};
