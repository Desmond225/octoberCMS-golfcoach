const pack = require('@codestackers/webpack');

module.exports = pack.mapOctoberThemes(function(theme_path) {
    
    return pack.makeConfig(theme_path, {
    	mode: 'development',
        sass: true,
        react: true,
        jquery: true,
        bootstrap: true
    });
});