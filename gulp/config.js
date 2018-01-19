const fs = require('fs');

// Read Copyright File
const Copyright = fs.readFileSync('./Copyright');

// Source Directories
const SOURCE_BASE_DIR = 'src';
const DESTINATION_BASE_DIR = 'public';

module.exports = {
  Copyright: Copyright,
  SOURCE_BASE_DIR: SOURCE_BASE_DIR,
  DESTINATION_BASE_DIR: DESTINATION_BASE_DIR
};