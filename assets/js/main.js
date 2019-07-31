$(document).ready(function () {

    $(function(){
        $(".nav-item a").click(function() {
            
            $(".navbar-collapse").removeClass("show");
        });
    });

    $(function(){
        $(".flip-card-front button").click(function() {
            $(this).closest(".flip-card").addClass("hover");
        });

        $(".flip-card-back").click(function() {
            $(this).closest(".flip-card").removeClass("hover");
        });
    });
    
    $('.nav-item a[href^="#"]').click(function() {
        var destino = $(this.hash);
        if (destino.length == 0) {
          destino = $('a[name="' + this.hash.substr(1) + '"]');
        }
        if (destino.length == 0) {
          destino = $('html');
        }
        $('html, body').animate({ scrollTop: destino.offset().top }, 500);
        return false;
      });

});
