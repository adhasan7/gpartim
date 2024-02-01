(function($) {
"use strict"; // Start of use strict

// Tooltip
$('[data-toggle="tooltip"]').tooltip();

// Osahan Slider
$('.osahan-slider').slick({
	lazyLoad: 'ondemand',
	centerMode: false,
	slidesToShow: 1,
	arrows: false,
	dots: true
});

// Promo Slider
$('.promo-slider').slick({
	centerMode:true,
	centerPadding: '5px',
	infinite:true,
	speed: 500,
	slidesToShow: 1,
	arrows: false,
	adaptiveHeight: true,
	autoplay:true
});

$('.produksatuan-slider').slick({
	lazyLoad: 'ondemand',
	infinite:true,
	arrows: false,
	slidesToShow: 1,
	adaptiveHeight: true,
	dots:true
});

$('.voucher-slider').slick({
	lazyLoad: 'ondemand',
	centerMode:true,
	arrows: false,
	variableWidth: true,
	autoplay:false
});

$('.toko-slider').slick({
	lazyLoad: 'ondemand',
	centerMode:true,
	arrows: false,
	variableWidth: true,
	autoplay:false
});

$('.produk-slider').slick({
	lazyLoad: 'ondemand',
	centerMode:true,
	arrows: false,
	variableWidth: true,
	autoplay:false
});

$('.slider-flashsale').slick({
	lazyLoad: 'ondemand',
	centerMode:true,
	arrows: false,
	variableWidth: true,
	autoplay:false
});

$('.slider-toko').slick({
	lazyLoad: 'ondemand',
	arrows: false,
	variableWidth: true,
	autoplay:false
});

// fiturojek
$('.slidefitur-slider').slick({
	lazyLoad: 'ondemand',
	slidesToShow:5,
	slidesToScroll:5,
	arrows:false
});

// kategori
$('.kategori-slider').slick({
	lazyLoad: 'ondemand',
	slidesToShow:5,
	slidesToScroll:5,
	dots:true,
	arrows:false
});

// Sidebar
var $main_nav = $('#main-nav');
var $toggle = $('.toggle');

var defaultOptions = {
	disableAt: false,
	customToggle: $toggle,
	levelSpacing: 40,
	navTitle: document.getElementById('judulwebsite').value,
	levelTitles: true,
	levelTitleAsBack: true,
	pushContent: '#container',
	insertClose: 2
};

// call our plugin
var Nav = $main_nav.hcOffcanvasNav(defaultOptions);	

// Dark Mode
const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
const currentTheme = localStorage.getItem('theme');
if (currentTheme) {
		document.documentElement.setAttribute('class', currentTheme);
	
		if (currentTheme === 'dark') {
				toggleSwitch.checked = true;
		}
}
function switchTheme(e) {
		if (e.target.checked) {
				document.documentElement.setAttribute('class', 'dark');
				localStorage.setItem('theme', 'dark');
		}
		else {				document.documentElement.setAttribute('class', 'light');
					localStorage.setItem('theme', 'light');
		}		
}
toggleSwitch.addEventListener('change', switchTheme, false);

})(jQuery); // End of use strict