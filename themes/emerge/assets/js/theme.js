(function ($) {

  $(function () {


		/*

		Initialize Partners Component

		*/
		function initComponentPartners() {
			$('.multiple-items').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1
      });
		}


		/*

		Initialize Marquee Component

		*/
		function initComponentMarquee() {
			$('.carousel-container').slick();
		}


    /*

    Turn On

    */
    function turnOnPreLaunch() {
      $('.service-analytics, .service-sales').addClass('is-active');
      $('.pre-launch-bg').addClass('is-active');
      $('#pre-launch tspan').addClass('is-active');

      $('.service-content-analytics, .service-content-sales').addClass('is-active');

    }

		function turnOnInMarket() {
      $('.service-branding, .service-logistics, .service-operations, .service-strategy').addClass('is-active');
			$('.in-market-bg').addClass('is-active');
			$('#in-market tspan').addClass('is-active');

      $('.service-content-branding, .service-content-logistics, .service-content-operations, .service-content-strategy').addClass('is-active');

      $('.service-content-graph-wrapper').addClass('is-tall');

		}

    function turnOnEndOfLife() {
      $('.service-transitions').addClass('is-active');
			$('.end-of-life-bg').addClass('is-active');
			$('#end-of-life tspan').addClass('is-active');

      $('.service-content-transitions').addClass('is-active');
		}


    /*

    Turn off

    */
		function turnOffPreLaunch() {
      $('.service-analytics, .service-sales').removeClass('is-active');
			$('.pre-launch-bg').removeClass('is-active');
			$('#pre-launch tspan').removeClass('is-active');


      $('.service-content-analytics, .service-content-sales').removeClass('is-active');



		}

    function turnOffInMarket() {
      $('.service-branding, .service-logistics, .service-operations, .service-strategy').removeClass('is-active');
      $('.in-market-bg').removeClass('is-active');
			$('#in-market tspan').removeClass('is-active');

      $('.service-content-branding, .service-content-logistics, .service-content-operations, .service-content-strategy').removeClass('is-active');

      $('.service-content-graph-wrapper').removeClass('is-tall');

    }

    function turnOffEndOfLife() {
      $('.service-transitions').removeClass('is-active');
      $('.end-of-life-bg').removeClass('is-active');
			$('#end-of-life tspan').removeClass('is-active');

      $('.service-content-transitions').removeClass('is-active');

    }


		/*

		Initialize What We Do Component

		*/
		function initComponentWhatWeDo() {



			$('.service-analytics, .service-sales').hover(function() {

        turnOffInMarket();
        turnOffEndOfLife();
        turnOnPreLaunch();

			});


			$('.service-branding, .service-logistics, .service-operations, .service-strategy').hover(function() {

        if (! $('.service-branding').hasClass('is-active')) {
          turnOffPreLaunch();
          turnOffEndOfLife();
          turnOnInMarket();
        }

      }, function() {

        // console.log('hover out');
        // if (! $('.service-branding').hasClass('is-active')) {
        //   turnOffInMarket();
  			// 	turnOffEndOfLife();
        //   turnOnPreLaunch();
        // }


      });


			$('.service-transitions').hover(function() {

        turnOffInMarket();
				turnOffPreLaunch();
        turnOnEndOfLife();

      }, function() {

        // console.log('hover out');
        //
        // turnOffInMarket();
				// turnOffEndOfLife();
        // turnOnPreLaunch();

      });

		}


		/*

		Initialize app

		*/
		initComponentMarquee();
		initComponentPartners();
		initComponentWhatWeDo();


  });

})(jQuery);
