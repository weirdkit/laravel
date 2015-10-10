'use strict';

module.exports = {
    plugins: {
        pattern: ['gulp-*', 'gulp.*', 'browser-sync'],
        camelize: true
    },

    env: {
        file: '.env.json'
    }
};
