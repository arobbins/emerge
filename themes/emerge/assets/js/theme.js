(function ($) {

	$(function () {


		$('.carousel-container').slick();

	});

})(jQuery);


(function ($) {

    $(function () {

        $('.multiple-items').slick({
          infinite: true,
          slidesToShow: 3,
          slidesToScroll: 3
        });
    });
        
})(jQuery);
