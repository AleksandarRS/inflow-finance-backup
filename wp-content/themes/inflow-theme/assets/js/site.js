'use strict';

$ = require('jquery');

const wow = require('./site/wow');
const Navigation = require('./core/navigation');
const equalheight = require('./site/equalheight');
const svgconvert = require('./site/svgconvert');
const addremoveclass = require('./site/addremoveclass');
// const lottie = require('./site/lottie');
const jsonconvert = require('./site/jsonconvert');
const tabs = require('./site/tabs');
const accordion = require('./site/accordion');
const stickysocial = require('./site/stickysocial');
const smoothscroll = require('./site/smoothscroll');
const example = require('./site/example');

jQuery( function(){

  /**
   * Initialize site wow
   */
   wow.init();

  /**
   * Initialize site navigation
   */
  Navigation.init();

  /**
   * Initialize equalheight module
   */
   equalheight.init();
   
  /**
   * Initialize svgconvert module
   */
  svgconvert.init();

   /**
   * Initialize jsonconvert module
   */
  jsonconvert.init();

  /**
   * Initialize tabs module
   */
  tabs.init();
  
  /**
   * Initialize accordion module
   */
  accordion.init();

   /**
   * Initialize addremoveclass module
   */
  addremoveclass.init();


  /**
   * Initialize stickysocial module
   */
  stickysocial.init();

  /**
   * Initialize smoothscroll module
   */
   smoothscroll.init();

  /**
   * Initialize sample module
   */
  example.init();

});