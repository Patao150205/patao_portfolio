const NODE_ENV = (process.env.NODE_ENV || '').trim() || 'development';
const IS_DEV = NODE_ENV === 'development';
const browserSync = require('browser-sync').create();

module.exports = {
  env: {
    NODE_ENV,
    IS_DEV,
  },
  path: {
    input: './src',
    output: './public',
  },
  sass: {
    outputStyle: IS_DEV ? 'expanded' : 'compressed',
  },
  uglify: {},
  browserSync,
};
