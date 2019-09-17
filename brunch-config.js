// See http://brunch.io for documentation.
exports.files = {
  javascripts: {
    joinTo: {
      'js/app.js': /^app/,
      'js/vendors.js': /^node_modules/
    }
  },
  stylesheets: {
    joinTo: {
      'css/app.css': /^app/,
      'css/vendors.css': /^node_modules/
    }
  }
};
exports.plugins = {
  // Paramétrage de sass
  sass: {
    options: {
      includePaths: [
        // déclaration a SASS d'autres fichiers sass
        'node_modules/bootstrap',
        'node_modules/slick-carousel',
        'node_modules/reset-css/sass',
        'node_modules/animate.css'
      ]
    }
  },
  browserSync: {
    files: ['*']
  },
  copycat: {
    'fonts': ['node_modules/font-awesome/fonts'],
  }
};
exports.watcher = {
  usePolling: true,
  awaitWriteFinish: true
}
exports.npm = {
  styles: {
    'reset-css': ['reset.css'],
    'font-awesome': ['css/font-awesome.css'],
    'bootstrap': ['dist/css/bootstrap.css'],
    'slick-carousel': ['slick'],
    'animate.css': ['animate.css']
  },
  globals: {
    '$': 'jquery',
    'jQuery': 'jquery',
    'scrollex': 'jquery.scrollex',
    'bootstrap': 'bootstrap',
    'slick': 'slick-carousel'
  }
},
  exports.modules = {
    autoRequire: {
      'js/app.js': ['initialize', 'navbar', 'galery'],
    }
  }