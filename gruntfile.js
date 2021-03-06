/**
 * Created by User on 10.05.2017.
 */

let mozjpeg = require('imagemin-mozjpeg');

module.exports = function(grunt) {

    const sass = require('node-sass');

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
                    //svgo: false // node_modules/grunt-image/node_modules/svgo/bin/svgo ENOENT
                },
                files: [{
                    expand: true,
                    cwd: 'img/',
                    //src: ['**/*.{png,jpg,jpeg,gif,svg}'],
                    src: ['**/*.{png,jpg,jpeg,gif,svg}'], // node_modules/grunt-image/node_modules/svgo/bin/svgo ENOENT
                    dest: 'build/img/'
                }]
            }
        },
        concat: {
            options: {
                separator: ';',
            },
            dist: {
                src: [
                    'node_modules/jquery/dist/jquery.js',
                    'node_modules/popper.js/dist/umd/popper.js',
                    'node_modules/bootstrap/dist/js/bootstrap.js'
                ],
                dest: 'build/js/bundle.js6',
            },
        },
        babel: {
            options: {
                sourceMap: true,
                presets: ['@babel/preset-env']
            },
            dist: {
                files: {
                    'build/js/bundle.js': 'build/js/bundle.js6'
                }
            }
        },
        es6transpiler: {
            dist: {
                files: {
                    'build/js/bundle.js': 'build/js/bundle.js6'
                }
            },
            options: {
                disallowUnknownReferences: false,
                disallowDuplicated: false
            }
        },
        uglify: {
            compress: {
                options: {
                    sourceMap: true
                },
                files: {
                    'build/js/bundle.min.js': ['build/js/bundle.js']
                }
            }
        },
        sass: {
            options: {
                implementation: sass,
                sourceMap: true
            },
            dist: {
                files: {
                    'build/css/custom.css': 'scss/custom.scss'
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
                    'build/css/bundle.css': [
                        'node_modules/bootstrap/dist/css/bootstrap.css',
                        //'node_modules/tether/dist/css/tether.css',
                        'node_modules/font-awesome/css/font-awesome.css',
                        'build/css/custom.css'
                    ]
                }
            }
        },
        postcss: {
            options: {
                map: true,
                processors: [
                    require('pixrem')(), // add fallbacks for rem units
                    require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
                    require('cssnano')() // minify the result
                ]
            },
            dist: {
                src: 'build/css/bundle.css',
                dest: 'build/css/bundle.min.css'
            },
        },
        copy: {
            main: {
                expand: true,
                cwd: 'node_modules/font-awesome/fonts',
                src: '**',
                dest: './build/fonts',
            },
            customFonts: {
                expand: true,
                cwd: 'fonts',
                src: '**',
                dest: './build/fonts',
            }
        },
        watch: {
            sass: {
                files: './scss/{,*/}*.{scss,sass}',
                tasks: ['sass:dist']
            },
            image: {
                files: './img/{,*/}*.{png,jpg,jpeg,gif,svg}',
                tasks: ['image']
            }
        }
    });

    grunt.registerTask('sources', ['concat','babel','uglify','sass','cssmin','postcss','copy']);
    grunt.registerTask('build', ['image','sources']);
    grunt.registerTask('css', ['sass','cssmin','postcss','copy']);

}