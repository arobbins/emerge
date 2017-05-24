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

		function updateFlowGraph() {
			$('.in-market-bg').toggleClass('is-active');
			$('#in-market tspan').toggleClass('is-active');
		}

		function turnOffPreLaunch() {
			$('.pre-launch-bg').removeClass('is-active');
			$('#pre-launch tspan').removeClass('is-active');
		}


		/*

		Initialize What We Do Component

		*/
		function initComponentWhatWeDo() {

			$('.service-analytics, .service-sales').hover(function() {

				if (!$('.service-analytics, .service-sales').hasClass('is-active')) {
					$('.service-analytics, .service-sales').addClass('is-active');
				}

			});

			$('.service-branding, .service-logistics, .service-operations, .service-strategy').hover(function() {

				$('.service-branding, .service-logistics, .service-operations, .service-strategy, .service-analytics, .service-sales').toggleClass('is-active');

				updateFlowGraph();
				turnOffPreLaunch();

			});

			$('.service-transitions').hover(function() {
				$('.service-transitions, .service-analytics, .service-sales').toggleClass('is-active');
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
