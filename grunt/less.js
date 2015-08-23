module.exports = {
    dev: {
        files: {
        	'<%= dist %>/style.css': ['<%= srcfiles.less %>']
        },
        options: {
            compress: false,
            sourceMap: true,
            sourceMapFilename: '<%= dist %>/style.css.map',
            sourceMapURL: 'style.css.map'
        }
    },
    prod: {
        files: {
        	'<%= dist %>/style.css': ['<%= srcfiles.less %>']
        },
        options: {
            compress: true,
            sourceMap: false
        }
    }
};
