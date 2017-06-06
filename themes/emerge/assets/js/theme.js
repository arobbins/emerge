(function ($) {

  jQuery(function () {


		/*

		Initialize Partners Component

		*/
		function initComponentPartners() {
			jQuery('.multiple-items').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 900,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
      });
		}


		/*

		Initialize Marquee Component

		*/
		function initComponentMarquee() {
			jQuery('.carousel-container').slick({
        responsive: [
            {
              breakpoint: 900,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
          ]
      });
		}


    /*

    Turn On

    */
    function turnOnPreLaunch() {
      jQuery('.service-analytics, .service-sales').addClass('is-active');
      jQuery('.pre-launch-bg').addClass('is-active');
      jQuery('#pre-launch tspan').addClass('is-active');

      jQuery('.service-content-analytics, .service-content-sales').addClass('is-active');

    }

		function turnOnInMarket() {
      jQuery('.service-branding, .service-logistics, .service-operations, .service-strategy').addClass('is-active');
			jQuery('.in-market-bg').removeClass('is-grey').addClass('is-active');
			jQuery('#in-market tspan').addClass('is-active');

      jQuery('.service-content-branding, .service-content-logistics, .service-content-operations, .service-content-strategy').addClass('is-active');

      jQuery('.service-content-graph-wrapper').addClass('is-tall');

		}

    function turnOnEndOfLife() {
      jQuery('.service-transitions').addClass('is-active');
			jQuery('.end-of-life-bg').addClass('is-active');
			jQuery('#end-of-life tspan').addClass('is-active');
      jQuery('.service-content-transitions').addClass('is-active');

      jQuery('.in-market-bg').addClass('is-grey');
      jQuery('#in-market tspan').addClass('is-grey');

		}


    /*

    Turn off

    */
		function turnOffPreLaunch() {
      jQuery('.service-analytics, .service-sales').removeClass('is-active');
			jQuery('.pre-launch-bg').removeClass('is-active');
			jQuery('#pre-launch tspan').removeClass('is-active');


      jQuery('.service-content-analytics, .service-content-sales').removeClass('is-active');



		}

    function turnOffInMarket() {
      jQuery('.service-branding, .service-logistics, .service-operations, .service-strategy').removeClass('is-active');
      jQuery('.in-market-bg').removeClass('is-active is-grey');
			jQuery('#in-market tspan').removeClass('is-active is-grey');

      jQuery('.service-content-branding, .service-content-logistics, .service-content-operations, .service-content-strategy').removeClass('is-active');

      jQuery('.service-content-graph-wrapper').removeClass('is-tall');

    }

    function turnOffEndOfLife() {
      jQuery('.service-transitions').removeClass('is-active');
      jQuery('.end-of-life-bg').removeClass('is-active');
			jQuery('#end-of-life tspan').removeClass('is-active');

      jQuery('.service-content-transitions').removeClass('is-active');

    }


		/*

		Initialize What We Do Component

		*/
		function initComponentWhatWeDo() {



			jQuery('.service-analytics, .service-sales').hover(function() {

        turnOffInMarket();
        turnOffEndOfLife();
        turnOnPreLaunch();

			});


			jQuery('.service-branding, .service-logistics, .service-operations, .service-strategy').hover(function() {

        if (! jQuery('.service-branding').hasClass('is-active')) {
          turnOffPreLaunch();
          turnOffEndOfLife();
          turnOnInMarket();
        }

      }, function() {

        // console.log('hover out');
        // if (! jQuery('.service-branding').hasClass('is-active')) {
        //   turnOffInMarket();
  			// 	turnOffEndOfLife();
        //   turnOnPreLaunch();
        // }

      });


			jQuery('.service-transitions').hover(function() {

        turnOffInMarket();
				turnOffPreLaunch();
        turnOnEndOfLife();

      }, function() {

        // console.log('hover out');
        // turnOffInMarket();
				// turnOffEndOfLife();
        // turnOnPreLaunch();

      });

		}




    function getMapStyles() {
      return [
          {
              "featureType": "all",
              "elementType": "geometry",
              "stylers": [
                  {
                      "color": "#ffffff"
                  }
              ]
          },
          {
              "featureType": "all",
              "elementType": "labels.text.fill",
              "stylers": [
                  {
                      "gamma": 0.01
                  },
                  {
                      "lightness": 20
                  }
              ]
          },
          {
              "featureType": "all",
              "elementType": "labels.text.stroke",
              "stylers": [
                  {
                      "saturation": -31
                  },
                  {
                      "lightness": -33
                  },
                  {
                      "weight": 2
                  },
                  {
                      "gamma": 0.8
                  }
              ]
          },
          {
              "featureType": "all",
              "elementType": "labels.icon",
              "stylers": [
                  {
                      "visibility": "off"
                  }
              ]
          },
          {
              "featureType": "administrative.locality",
              "elementType": "labels.text.fill",
              "stylers": [
                  {
                      "color": "#050505"
                  }
              ]
          },
          {
              "featureType": "administrative.locality",
              "elementType": "labels.text.stroke",
              "stylers": [
                  {
                      "color": "#fef3f3"
                  },
                  {
                      "weight": "3.01"
                  }
              ]
          },
          {
              "featureType": "administrative.neighborhood",
              "elementType": "labels.text.fill",
              "stylers": [
                  {
                      "color": "#0a0a0a"
                  },
                  {
                      "visibility": "off"
                  }
              ]
          },
          {
              "featureType": "administrative.neighborhood",
              "elementType": "labels.text.stroke",
              "stylers": [
                  {
                      "color": "#fffbfb"
                  },
                  {
                      "weight": "3.01"
                  },
                  {
                      "visibility": "off"
                  }
              ]
          },
          {
              "featureType": "landscape",
              "elementType": "geometry",
              "stylers": [
                  {
                      "lightness": 30
                  },
                  {
                      "saturation": 30
                  }
              ]
          },
          {
              "featureType": "poi",
              "elementType": "geometry",
              "stylers": [
                  {
                      "saturation": 20
                  }
              ]
          },
          {
              "featureType": "poi.attraction",
              "elementType": "labels.icon",
              "stylers": [
                  {
                      "visibility": "off"
                  }
              ]
          },
          {
              "featureType": "poi.park",
              "elementType": "geometry",
              "stylers": [
                  {
                      "lightness": 20
                  },
                  {
                      "saturation": -20
                  }
              ]
          },
          {
              "featureType": "road",
              "elementType": "geometry",
              "stylers": [
                  {
                      "lightness": 10
                  },
                  {
                      "saturation": -30
                  }
              ]
          },
          {
              "featureType": "road",
              "elementType": "geometry.stroke",
              "stylers": [
                  {
                      "saturation": 25
                  },
                  {
                      "lightness": 25
                  }
              ]
          },
          {
              "featureType": "road.highway",
              "elementType": "geometry.fill",
              "stylers": [
                  {
                      "visibility": "on"
                  },
                  {
                      "color": "#a1a1a1"
                  }
              ]
          },
          {
              "featureType": "road.highway",
              "elementType": "geometry.stroke",
              "stylers": [
                  {
                      "color": "#292929"
                  }
              ]
          },
          {
              "featureType": "road.highway",
              "elementType": "labels.text.fill",
              "stylers": [
                  {
                      "visibility": "on"
                  },
                  {
                      "color": "#202020"
                  }
              ]
          },
          {
              "featureType": "road.highway",
              "elementType": "labels.text.stroke",
              "stylers": [
                  {
                      "visibility": "on"
                  },
                  {
                      "color": "#ffffff"
                  }
              ]
          },
          {
              "featureType": "road.highway",
              "elementType": "labels.icon",
              "stylers": [
                  {
                      "visibility": "simplified"
                  },
                  {
                      "hue": "#0006ff"
                  },
                  {
                      "saturation": "-100"
                  },
                  {
                      "lightness": "13"
                  },
                  {
                      "gamma": "0.00"
                  }
              ]
          },
          {
              "featureType": "road.arterial",
              "elementType": "geometry.fill",
              "stylers": [
                  {
                      "visibility": "on"
                  },
                  {
                      "color": "#686868"
                  }
              ]
          },
          {
              "featureType": "road.arterial",
              "elementType": "geometry.stroke",
              "stylers": [
                  {
                      "visibility": "off"
                  },
                  {
                      "color": "#8d8d8d"
                  }
              ]
          },
          {
              "featureType": "road.arterial",
              "elementType": "labels.text.fill",
              "stylers": [
                  {
                      "visibility": "on"
                  },
                  {
                      "color": "#353535"
                  },
                  {
                      "lightness": "6"
                  }
              ]
          },
          {
              "featureType": "road.arterial",
              "elementType": "labels.text.stroke",
              "stylers": [
                  {
                      "visibility": "on"
                  },
                  {
                      "color": "#ffffff"
                  },
                  {
                      "weight": "3.45"
                  }
              ]
          },
          {
              "featureType": "road.local",
              "elementType": "geometry.fill",
              "stylers": [
                  {
                      "color": "#d0d0d0"
                  }
              ]
          },
          {
              "featureType": "road.local",
              "elementType": "geometry.stroke",
              "stylers": [
                  {
                      "lightness": "2"
                  },
                  {
                      "visibility": "on"
                  },
                  {
                      "color": "#999898"
                  }
              ]
          },
          {
              "featureType": "road.local",
              "elementType": "labels.text.fill",
              "stylers": [
                  {
                      "color": "#383838"
                  }
              ]
          },
          {
              "featureType": "road.local",
              "elementType": "labels.text.stroke",
              "stylers": [
                  {
                      "color": "#faf8f8"
                  }
              ]
          },
          {
              "featureType": "water",
              "elementType": "all",
              "stylers": [
                  {
                      "lightness": -20
                  }
              ]
          }
      ];

    }




    function initComponentConnect() {

      if (jQuery('#map').length) {

        var map = new GMaps({
          div: '#map',
          lat: 44.8651699,
          lng: -93.1614076,
          zoom: 13,
          styles: getMapStyles()
        });

        map.addMarker({
          lat: 44.8651699,
          lng: -93.1614076,
          title: '1300 Mendota Heights Road Mendota Heights, MN 55120',
          animation: google.maps.Animation.DROP,
          click: function(e) {
            alert('You clicked in this marker');
          }
        });

      }

    }



		/*

		Initialize app

		*/
    initComponentConnect();
		initComponentMarquee();
		initComponentPartners();
		initComponentWhatWeDo();


  });

})(jQuery);
