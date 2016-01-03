module.exports = {
    options: {
        sourceMap: true,
        presets: ['es2015']
    },
    dist: {
        files: {
            '<%= dist %>/js/scripts.js': '<%= dist %>/js/scripts.es6.js'
        }
    }
};
