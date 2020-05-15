$("document").ready(function(){
      $(".card").mouseover (function(){
        var i = $(this).index();                   
        $(".border-effect").eq(i).animate({ width: "100%" }, 200 );
        $(this).find("img").css({
            '-moz-transform':'scale(1.1)',
            '-webkit-transform':'scale(1.1)',
            'transform':'scale(1.1)'
        })
      })

      $(".card").mouseleave(function(){
        var i = $(this).index();       
        $(".border-effect").eq(i).animate({ width: "20%" }, 200 );
        $(this).find("img").css({
            '-moz-transform':'scale(1.0)',
            '-webkit-transform':'scale(1.0)',
            'transform':'scale(1.0)'
        })        
      })


    // Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
})