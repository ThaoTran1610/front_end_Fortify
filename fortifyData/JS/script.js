 jQuery.fn.collapse = function() {
     return this.each(function() {
         var header = $(this).find('.collapse-header-aboutus a');

         var headerDiv = $(this).find('.collapse-header-aboutus');
         var arrow = $(this).find('collapse-header-aboutus a i');
         var count = 0;
         var content = $(this).find('.collapse-content-aboutus');
         header.on('click', function() {
             count++;
             content.slideToggle(100);
             if (count % 2 == 0) {
                 headerDiv.css("background-color", "#00182e");
                 header.css("color", "#fff");
             } else {
                 headerDiv.css("background-color", "#fff");
                 header.css("color", "#000");
             }
         });
         arrow.on('click', function() {
             arrow.toggleClass("icon-circle-arrow-up icon-circle-arrow-down");
         });
     });
 }

 $(function() {
     $('div.collapse-aboutus').collapse();
 });