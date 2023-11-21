/*
Template: CONSULTER - Business Consulting HTML Template
Author: RRDevs
*/

(function ($) {
	"use strict";

	$(document).ready(function () {

		/*** Sticky header */
		$(window).scroll(function () {
			if ($("body").scrollTop() > 0 || $("html").scrollTop() > 0) {
				$("header").addClass("stop");
			} else {
				$("header").removeClass("stop");
			}
		});



		/*** mobile menu  */
		$("#hamburger").on("click", function () {
			$(".mobile-nav").addClass("show");
			$(".offcanvas-overlay").addClass("overlay-open");
		});

		$(".close-nav").on("click", function () {
			$(".mobile-nav").removeClass("show");
			$(".offcanvas-overlay").removeClass("overlay-open");
		});

		$(window).scroll(function () {
			if ($("body").scrollTop() > 0 || $("html").scrollTop() > 0) {
				$(".mobile-nav").removeClass("show");
				$(".offcanvas-overlay").removeClass("overlay-open");
			}
		});

		/*** Dropdown Need class added Added */
		$(".consulter-mobile-nav ul li ul").addClass("dropdown-menu");
		$(".consulter-mobile-nav ul li ul").parent().addClass("dropdown");

		$(".main-menu ul li ul").parent().addClass("dropdown");
		$('.main-menu li.dropdown > a').append("<i class='far fa-chevron-down'></i>");


		/** Sidr submenu */
		function consulterMobileMenu() {
			$('.consulter-mobile-nav ul')[0].classList.add("consulter-navbar-mobile");

			var $nav = $(".consulter-navbar-mobile"),
				$back_btn = $nav.find(" > li.dropdown > ul.dropdown-menu").prepend("<li class='dropdown-back d-flex flex-wrap align-items-center justify-content-between'><div class='control ml-auto d-flex align-items-center' style='white-space: nowrap'>Back<i style='font-size: 20px; font-weight: 500; margin-left: 5px;' class='fal fa-long-arrow-left'></i></div></li>");


			// For Title
			$('.consulter-navbar-mobile li.dropdown > a').each(function () {
				$(this).siblings("ul").find("li.dropdown-back").prepend("<div class='title'><a style='color: #000'>" + $(this).text() + "</a></div>");
			});

			// open sub-level
			$('.consulter-navbar-mobile li.dropdown > a').append("<span class='dropdown-toggle' data-toggle='dropdown'></span>");
			$('.consulter-navbar-mobile li.dropdown > a .dropdown-toggle').on("click", function (e) {
				e.preventDefault();
				e.stopPropagation();

				$(this).parent().parent().addClass("is-open");
				$(this).parents().find('.consulter-navbar-mobile').addClass("is-parent");


				var header = $(this).parent().parent().find('ul.dropdown-menu').height(),
					gutter = $('.consulter-mobile-nav');

				if (gutter) {
					gutter.height(header + 15);
				}
			});

			// go back
			$back_btn.on("click", ".dropdown-back", function (e) {
				e.stopPropagation();
				$(this)
					.parents(".is-open")
					.first()
					.removeClass("is-open");

				var header = $(this).parents(".is-parent").first().height();

				$(this)
					.parents(".is-parent")
					.first()
					.removeClass("is-parent");

				var gutter = $('.consulter-mobile-nav');

				setTimeout(function () {
					if (gutter) {
						gutter.height(header);
					}
				}, 200);
			});
		}
		consulterMobileMenu();


	});


	$(document).ready(function () {
		$(".rw-slider-box .owl-carousel").owlCarousel({
			loop: true,
			nav: false,
			margin: 20,
			dots: false,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 3
				},
				1000: {
					items: 4
				}
			}
		});
		// Custom Button Events
		$(".customNextBtn").click(function () {
			$(".rw-slider-box .owl-carousel").trigger('next.owl.carousel');
		});
		$(".customPrevBtn").click(function () {
			$(".rw-slider-box .owl-carousel").trigger('prev.owl.carousel');
		});

		$(".testimonial-slider .owl-carousel").owlCarousel({
			loop: true,
			margin: 5,
			dots: false,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				991: {
					items: 2,
					nav: false
				},
				1300: {
					items: 2,
					nav: true,
					loop: false
				}
			}
		});

		$(".blog-slider .owl-carousel").owlCarousel({
			loop: true,
			margin: 0,
			dots: false,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				991: {
					items: 2,
					nav: false
				},
				1300: {
					items: 3,
					nav: true,
					loop: false
				}
			}
		});
	});

	// end document ready function

	function loader() {
		$(window).on('load', function () {
			// Animate loader off screen
			const preloader = $(".preloader");
			preloader.addClass('loaded');
			preloader.delay(600).fadeOut();

			/*** Number Counter */
			$('.counter').counterUp({
				delay: 10,
				time: 1000
			});
		});
	}
	loader();

})(jQuery); // End jQuery


// Function to animate the counter with symbols
function animateValue(obj, start, end, duration, suffix = '') {
	let startTimestamp = null;
	const step = (timestamp) => {
		if (!startTimestamp) startTimestamp = timestamp;
		const progress = Math.min((timestamp - startTimestamp) / duration, 1);
		obj.innerHTML = Math.floor(progress * (end - start) + start) + suffix;
		if (progress < 1) {
			window.requestAnimationFrame(step);
		}
	};
	window.requestAnimationFrame(step);
}

// Use IntersectionObserver to detect when the section is in view
const observer = new IntersectionObserver((entries, observer) => {
	entries.forEach(entry => {
		if (entry.isIntersecting) {
			$('.item h3').each(function () {
				// Extract the numbers and symbols
				const text = $(this).text();
				const number = parseInt(text.replace(/[^\d]/g, ''));
				const nonNumericCharacters = text.replace(/[\d]/g, '');

				// Run the animation with the symbols
				animateValue(this, 0, number, 2000, nonNumericCharacters); // 2000ms animation duration
			});
			observer.disconnect(); // Stop observing after animation
		}
	});
}, {
	threshold: 0.6
}); // 60% of the item is visible

// Target the section to observe
observer.observe(document.getElementById('animatedNumbers'));
