/*
Bones Scripts Enhancements
Author: Forsvunnet

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/
(function($){
  // A helper function to measure heights
  // If you're using borders or outlines
  var map_height = function (index, element) {
    return $(this).outerHeight();
  };
  // Equalise heights
  var equalise = function(element, group_size) {
    // Reset element height
    element.height('');

    // Group results
    if (group_size === undefined) { group_size = 0; }

    if (group_size == 1) {
      return;
    }
    var groups = [];
    if (group_size) {
      // Not a clone, but a different object of with the same selection
      var clone = $(element);
      while (clone.length > 0) {
        groups.push($(clone.splice(0, group_size)));
      }
    }
    else {
      groups = [element];
    }

    // Measure the heights and then apply the highest measure to all
    var heights, height;
    for (var i in groups) {
      heights = groups[i].map(map_height).get();
      height = Math.max.apply(null, heights);
      groups[i].height(height);
    }
  };
  // Expose:
  window.equalise = equalise;
})(jQuery);

// as the page loads, call these scripts
jQuery(document).ready(function($) {

  // Menu (button) script:
  $('body').addClass('js');
  var menu_button = $('<p>').addClass('clickable mobile-only').text('Meny');
  var menu_icon = '<div class="menu-icon"><div></div><div></div><div></div></div>';
  menu_button.append(menu_icon);
  $('.nav').before(menu_button);

  $('.clickable, .nav a').click(function(event) {
    if (min_width(768)) { return; }
    var sub = $(this).next();
    if (event.which === 1 && sub.length && sub[0].nodeName.toLowerCase() == 'ul') {
      if (this.nodeName.toLowerCase() == 'p' || !sub.hasClass('show')) {
        sub.toggleClass('show');
        return false;
      }
    }
  });
 
  if(!Modernizr.svg) {
    // Replace svg file-extention with png.
    // Note: This is only for browsers that does not support svg
    // and therefore if there is no png available it will not make a difference
    // it will appear just as broken as before.
    $('img[src$=".svg"]').attr('src', function() {
        return $(this).attr('src').replace('.svg', '.png');
    });
  }

  // Adjust menu top position:
});