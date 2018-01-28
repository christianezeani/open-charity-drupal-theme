# OpenCharity Drupal Theme
OpenCharity is an open source theme for Drupal 7 created by Christian Ezeani. It uses SCSS, HTML5, and Gulp for all tasks.


## Getting Started
To begin using this theme, follow the steps below to get started:
1. Clone the repo: `git clone https://github.com/christianezeani/opencharity-drupal-theme.git`
2. Navigate into the project folder: `cd opencharity-drupal-theme`
3. Install nodejs dev dependencies for Gulp: `npm install`

## Modifying the Source Files
After following the steps listed above, run `gulp start` or `npm start` before modifying the contents of the `./src` folder. 

### What it does
* Compiles the SCSS files in `src/scss` folder into `theme/assets/css/style.css`, and minifies the output into `theme/assets/css/style.min.css`.
* Compiles the Javascript (ES6) files in `src/scss` folder into `theme/assets/js/script.js` and minifies the output into `theme/assets/js/script.min.js`.
* Watches the SCSS and JS files for changes and recompiles.

### Note
Do not modify the javascript and CSS files in `theme/assets` folder. Changes made to `theme/assets/css/style.css`, `theme/assets/css/style.min.css`, `theme/assets/js/script.js` and `theme/assets/js/script.min.js` files will be overwritten by the `gulp build` process.

## Building the theme
Build the theme's javascript and CSS using `gulp build` or `npm run build`.

Once the build process is complete a new zip archive, ready for installation on your Drupal 7 site, is generated and written to `build/opencharity.zip`.

## Credits
Without these projects, OpenCharity Drupal Theme wouldn't be where it is today.
* [SASS / SCSS](https://sass-lang.com)
* [Gulp](https://gulpjs.com)

