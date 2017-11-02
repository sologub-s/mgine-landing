/**
 * Created by User on 10.05.2017.
 */

var mozjpeg = require('imagemin-mozjpeg');

module.exports = function(grunt) {

    require('load-grunt-tasks')(grunt);

    grunt.initConfig({
        image: {
            dynamic: {
                options: {
                    pngquant: true,
                    optipng: true,
                    zopflipng: true,
                    jpegRecompress: true,
                    mozjpeg: true,
                    guetzli: false,
                    gifsicle: true,
                    svgo: true
                },
                files: [{
                    expand: true,
                    cwd: 'img-src/',
                    src: ['**/*.{png,jpg,jpeg,gif,svg}'],
                    dest: 'img/'
                }]
            }
        },
        imagemin: {
            dynamic: {
                options: {
                    optimizationLevel: 7,
                    svgoPlugins: [{removeViewBox: false}],
                    use: [mozjpeg()] // Example plugin usage
                },
                files: [{
                    expand: true,
                    cwd: 'img/',
                    src: ['**/*.{png,jpg,gif,jpeg}'],
                    dest: 'img/'
                }]
            }
        },
        concat: {
            options: {
                separator: ';',
            },
            dist: {
                src: [
                    'js/jquery-1.10.2.js',
                    'js/sliderotziv.js',
                    'js/slider-book.js',
                    'js/codokna.js',
                    'js/jquery.maskedinput.min.js',
                    'js/jquery.anoslide.js',
                    'fancybox/jquery.mousewheel-3.0.6.pack.js',
                    'fancybox/source/jquery.fancybox.js',
                    'js/custom.js'
                ],
                dest: 'js/bundle.js6',
            },
        },
        es6transpiler: {
            dist: {
                files: {
                    'js/bundle.js': 'js/bundle.js6'
                }
            },
            options: {
                disallowUnknownReferences: false,
                disallowDuplicated: false
            }
        },
        uglify: {
            my_target: {
                options: {
                    sourceMap: true,
                    sourceMapName: 'js/bundle.map'
                },
                files: {
                    'js/bundle.min.js': ['js/bundle.js']
                }
            }
        },
        sass: {
            options: {
                sourceMap: true
            },
            dist: {
                files: {
                    'css/custom.css': 'css/custom.scss'
                }
            }
        },
        cssmin: {
            options: {
                mergeIntoShorthands: false,
                roundingPrecision: -1
            },
            target: {
                files: {
                    'css/bundle.min.css': ['css/style.css', 'css/style-mobile.css', 'fancybox/source/jquery.fancybox.css', 'css/font-awesome-4.7.0/css/font-awesome.css']
                }
            }
        }
    });

    grunt.registerTask('build', ['image','concat','es6transpiler','uglify','cssmin']);

}