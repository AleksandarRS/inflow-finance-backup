'use strict';

$ = require('jquery');

const Navigation = require('./core/navigation');
const svgconvert = require('./site/svgconvert');
const addremoveclass = require('./site/addremoveclass');
const accordion = require('./site/accordion');
const stickysocial = require('./site/stickysocial');
const example = require('./site/example');

jQuery( function(){

  /**
   * Initialize site navigation
   */
  Navigation.init();

  /**
   * Initialize svgconvert module
   */
  svgconvert.init();

  /**
   * Initialize addremoveclass module
   */
  addremoveclass.init();

  /**
   * Initialize accordion module
   */
  accordion.init();

  /**
   * Initialize stickysocial module
   */
  stickysocial.init();

  /**
   * Initialize sample module
   */
  example.init();

});