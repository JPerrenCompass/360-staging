/*
* See readme.md for instructions
*/

module.exports = function(grunt){

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
            dist: {
                options:{
                    style: 'compressed'
                },
                files: {
                    'style.css' : 'assets/sass/style.scss'
                }
            }
        },

        //minification of JS
        uglify: {
            options: {
                sourceMap:        false,
                preserveComments: 'some',
                separator:        ';'
            },
            main: {
                files: {
                    'assets/js/main.js': ['assets/js/src/**/*.js']
                }
            }
        },

        watch: {
            css: {
                files: [
                    'assets/sass/*.scss', 'assets/sass/**/*.scss'],
                tasks: ['sass', 'usebanner']
            },

            js: {
                files: 'assets/js/src/**/*.js',
                tasks: ['uglify:main']
            }
        },

        banner: '/*\n' +
          'Theme Name: \n' +
          'Author: Jessica Perren\n' +
          'Description: Custom theme for Compass Community\n' +
          'Version: 1.0.0 \n' +
          '*/',
        usebanner: {
            dist: {
                options: {
                    position: 'top',
                    banner: '<%= banner %>'
                },
                files: {
                    src: [ 'style.css' ]
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-banner');
    grunt.registerTask('default',['watch']);
};
