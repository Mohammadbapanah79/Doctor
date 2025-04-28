jQuery(document).ready(function () {

    // home page sec-1 slider
    jQuery("#home-slider .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        navText:["<span class=' border bg-light border-info owl-next text-pr-1'><i class='fas fa-arrow-alt-right' /></span>","<span class=' border bg-light border-info owl-next text-pr-1'><i class='fas fa-arrow-alt-left' /></span>"],
        dots: false,
        autoplay:true,
        autoplayTimeout:2000,
        rtl:true,
        responsive : {
            0: {
                items: 1
            },

            1000 : {
                items: 1
            }
        }
    });

    // home page sec-2 categouries owl carousel
    jQuery("#categouries .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        navText:["<span class=' border bg-light border-info owl-prve text-pr-1'><i class='fas fa-arrow-alt-left' /></span>","<span class=' border bg-light border-info owl-next text-pr-1'><i class='fas fa-arrow-alt-right' /></span>"],
        dots: false,
        autoplay:true,
        autoplayTimeout:2000,
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000 : {
                items: 5
            }
        }
    });

   // home page sec-3 doctors owl carousel
    jQuery("#doctors .owl-carousel").owlCarousel({
        loop: true,
        nav: true,

        navText:["<span class=' border bg-light border-info owl-prve text-pr-1'><i class='fas fa-arrow-alt-left' /></span>","<span class=' border bg-light border-info owl-next text-pr-1'><i class='fas fa-arrow-alt-right' /></span>"],
        dots: false,
        autoplay:true,
        autoplayTimeout:2000,
        responsive : {
            0: {
                items: 1
            },
            700: {
                items: 2
            },
            1000 : {
                items: 3
            }
        }
    });

    jQuery(window).scroll(function () {
		if (window.scrollY > '600') {
			jQuery('.scroul-top').fadeIn();

		} else {
			jQuery('.scroul-top').css('display','none');
		}
	});

    jQuery('.scroul-top').click(function () {
		jQuery('body').animate({ scrollTop: '0' }, '1000ms');
		jQuery('html').animate({ scrollTop: '0' }, '1000ms');

	})


      var selectedGender = "" ;
      var selectedCat = "" ;
      if(window.location.pathname === "/doctors"){

        var jQuerygrid = jQuery('.grid').isotope({
            // options
          });
          // filter items on button click



        jQuery.urlParam = function(name){
            var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
            if (results==null) {
                return null;
        }
            return decodeURI(results[1]) || 0;
        }

        var some = jQuery.urlParam("category");

        some = some || "all";

        selectedCat = "."+some;



        var jQuerygrid = jQuery('.grid').isotope({
            // options
        });

        jQuerygrid.isotope({ filter: "."+some });

        jQuery.each(jQuery("[name = 'category']"), function (indexInArray, valueOfElement) {
              if(jQuery(valueOfElement).val() == "."+some){
                  jQuery(valueOfElement).attr("checked",true);
             }



      jQuery("[name='gender']").change(function () {
          console.log($(this).val());
          selectedGender = jQuery(this).val();
          jQuerygrid.isotope({ filter: selectedCat+selectedGender });
      })

      jQuery("[name='category']").change(function () {
        console.log($(this).val());
        selectedCat = jQuery(this).val();
          jQuerygrid.isotope({ filter: selectedCat+selectedGender });
      })




      jQuery('.filter').on( 'click', function() {

        jQuerygrid.isotope({ filter: selectedCat+selectedGender });


	  });








        });



    }






})



