module.exports = {
	js: {
		files: [{
		    expand: true,
		    cwd: 'src/js',
		    src: ['**/*.js'],
		    dest: '<%= dist %>/js'
		}]
	},
    php: {
    	files: [{
		    expand: true,
		    cwd: 'src',
		    src: ['*.php'],
		    dest: '<%= dist %>'
    	}]
    },
    assets: {
    	files: [{
		    expand: true,
		    cwd: 'src/assets',
		    src: ['*'],
		    dest: '<%= dist %>/assets'
    	}]
    }
};
