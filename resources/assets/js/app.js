/**
 * Created by xzjs on 16/5/3.
 */
window.$ = window.jQuery = require('jquery');
require('bootstrap-sass');
$( document ).ready(function() {
    console.log($.fn.tooltip.Constructor.VERSION);
});