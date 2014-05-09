module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON( 'package.json' ),

    watch: {
      options: {
        livereload: true,
        spawn: false
      },

      scss: {
        files: '**/*.scss',
        tasks: ['compass:development']
      },

      js: {
        files: '**/*.js',
        tasks: [],
      },

      html: {
        files: '**/*.html',
        tasks: [],
      }
    },

    compass: {
      options: {
        // httpPath: "/",
        banner: "/* <%= pkg.author %>, Version: <%= pkg.version %> */",
        cssDir: 'assets/css',
        imagesDir: 'assets/img',
        noLineComments: false,
        sassDir: 'assets/scss',
        specify: "assets/scss/*.scss"
      },
      development: {
        options: {
          environment: 'development'
        }
      },
      production: {
        options: {
          environment: 'production'
        }
      }
    },

    // requirejs: {
    //   development: {
    //     options: {
    //       baseUrl: "assets/js",
    //       mainConfigFile: "assets/js/.js",
    //       name: "",
    //       optimize: 'none',
    //       out: "build/.js"
    //     }
    //   },
    //   production: {
    //     options: {
    //       baseUrl: "assets/js",
    //       mainConfigFile: "assets/js/.js",
    //       name: "",
    //       out: "build/.js"
    //     }
    //   }
    // }

  });

  grunt.loadNpmTasks('grunt-contrib-compass');
  // grunt.loadNpmTasks('grunt-contrib-requirejs');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['compass:development']);
  grunt.registerTask('production', ['compass:production']);

};