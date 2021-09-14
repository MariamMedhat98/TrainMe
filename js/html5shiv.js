define(['isSVG'], function(isSVG) {
/**
  * @optionName html5shiv
  * @optionProp html5shiv
  */
  // Take the html5 variable out of the html5shiv scope so we can return it.
  var html5;
  if (!isSVG) {
    /**
     * @preserve HTML5 Shiv 3.7.3 | @afarkas @jdalton @jon_neal @rem | MIT/GPL2 Licensed
     */
    ;(function(window, document) {
      ...
      /**
       * The `html5` object is exposed so that more elements can be shived and
       * existing shiving can be detected on iframes.
       * @type Object
       * @example
       *
       * // options can be changed before the script is included
       * html5 = { 'elements': 'mark section', 'shivCSS': false, 'shivMethods': false };
       */
      var html5 = {
        ...
      };
 
      /*--------------------------------------------------------------------------*/
 
      // expose html5
      window.html5 = html5;
      // shiv the document
      shivDocument(document);
      if(typeof module == 'object' && module.exports){
        module.exports = html5;
      }
    }(typeof window !== 'undefined' ? window : this, document));
  }
  return html5;
});