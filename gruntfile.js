module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    watch: {
      all: {
        files: '**/*.*',
        tasks: ['compass'],
        options: {
          livereload: true
        }
      }
    },

    compass: {
      dist: {
        options: {
          config: 'config.rb'
        }
      }
    }

  });

  // load plugins
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // register tasks
  grunt.registerTask('default', ['compass']);

};