//v1.5.6
(function() {

    /* ====================
    Preloader
    ======================= */
	window.onload = function () {
		window.setTimeout(fadeout, 300);
	}

	function fadeout() {
		document.querySelector('.preloader').style.opacity = '0';
		document.querySelector('.preloader').style.display = 'none';
	}


    window.onscroll = function () {
        var header_navbar = document.querySelector(".hero-section-wrapper-2 .header");
        var sticky = header_navbar.offsetTop;

        if (window.pageYOffset > sticky) {
            header_navbar.classList.add("sticky");
        } else {
            header_navbar.classList.remove("sticky");
        }

        // show or hide the back-top-top button
        var backToTo = document.querySelector(".scroll-top");
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            backToTo.style.display = "flex";
        } else {
            backToTo.style.display = "none";
        }
    };

      // header-5  toggler-icon
      let navbarToggler2 = document.querySelector(".header-2 .navbar-toggler");
      var navbarCollapse2 = document.querySelector(".header-2 .navbar-collapse");

      document.querySelectorAll(".header-2 .page-scroll").forEach(e =>
          e.addEventListener("click", () => {
              navbarToggler2.classList.remove("active");
              navbarCollapse2.classList.remove('show')
          })
      );
      navbarToggler2.addEventListener('click', function() {
          navbarToggler2.classList.toggle("active");
      })

    // section menu active
	function onScroll(event) {
		var sections = document.querySelectorAll('.page-scroll');
		var scrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

		for (var i = 0; i < sections.length; i++) {
			var currLink = sections[i];
			var val = currLink.getAttribute('href');
			var refElement = document.querySelector(val);
			var scrollTopMinus = scrollPos + 73;
			if (refElement.offsetTop <= scrollTopMinus && (refElement.offsetTop + refElement.offsetHeight > scrollTopMinus)) {
				document.querySelector('.page-scroll').classList.remove('active');
				currLink.classList.add('active');
			} else {
				currLink.classList.remove('active');
			}
		}
	};

    window.document.addEventListener('scroll', onScroll);


      //====== counter up 
      var cu = new counterUp({
        start: 0,
        duration: 2000,
        intvalues: true,
        interval: 100,
        append: " ",
      });
      cu.start();

	// WOW active
    new WOW().init();

})();

// Degradee Menu
document.addEventListener('scroll', function() {
  const gradient = document.querySelector('.nav-gradient-spacer');
  const scrollPosition = window.scrollY;

  // Oculta el degradado cuando el scroll supera un umbral (ej. 50px)
  if (scrollPosition > 450) {
    gradient.classList.add('hidden');
  } else {
    gradient.classList.remove('hidden');
  }
});
