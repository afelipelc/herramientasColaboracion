/*
Theme: Flatfy Theme
Author: Andrea Galanti
Adapted: A. Felipe Lima Cortés
Bootstrap Version 
Build: 1.0
http://www.andreagalanti.it
*/
var idIntro = Math.floor((Math.random() * 4) + 1);

$(window).load(function() { 
	//Preloader 
	$('#status').delay(300).fadeOut(); 
	$('#preloader').delay(300).fadeOut('slow');
	$('body').delay(550).css({'overflow':'visible'});
	$('.intro-header').css({'background':'url(img/intro/intro'+idIntro+'.jpg) no-repeat center'}); 
})

$(document).ready(function() {
		loadData("");
		//animated logo
		$(".navbar-brand").hover(function () {
			$(this).toggleClass("animated shake");
		});
		
		//animated scroll_arrow
		$(".img_scroll").hover(function () {
			$(this).toggleClass("animated infinite bounce");
		});
		
		//Wow Animation DISABLE FOR ANIMATION MOBILE/TABLET
		wow = new WOW(
		{
			mobile: false
		});
		wow.init();
		
		//MagnificPopup
		$('.image-link').magnificPopup({type:'image'});


		// OwlCarousel N1
		$("#owl-demo").owlCarousel({
			autoPlay: 3000,
			items : 3,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3]
		});

		//mainlinks
		$('a[href*=#]').click(function() {
			goHash(this);
			return false;
		});

		$(document).on("click", ".linksrc", function(){
			//if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
			//			&& location.hostname == this.hostname) {
			var hash= this.hash;
			var role = $(this).attr("role");
			//var datoC = $(this).attr("data");
				$(this.hash+" .container .row").load($(this).attr("data"),function(){
					if(hash == "#test" && role == "carrusel"){
							$("#owl-demo-1").owlCarousel({
						    navigation : false, // Show next and prev buttons
						    slideSpeed : 300,
						    paginationSpeed : 400,
						    singleItem:true
						  });
					}else if(hash =="#test" && role == "carruselpasos"){
							$("#owl-appi").owlCarousel({
						    navigation : true, // Show next and prev buttons
						    slideSpeed : 300,
						    paginationSpeed : 400,
						    singleItem:true
						  });
					}else if(hash =="#basic" && role == "carruselscratch"){
							$("#owl-scratch").owlCarousel({
						    navigation : true, // Show next and prev buttons
						    slideSpeed : 300,
						    paginationSpeed : 400,
						    singleItem:true
						  });
					}else if(hash =="#basic" && role == "carruselpseint"){
							$("#owl-pseint").owlCarousel({
						    navigation : true, // Show next and prev buttons
						    slideSpeed : 300,
						    paginationSpeed : 400,
						    singleItem:true
						  });
					}else if(hash =="#coding" && role == "carrusel"){
							$("#owl-gh").owlCarousel({
						    navigation : true, // Show next and prev buttons
						    slideSpeed : 300,
						    paginationSpeed : 400,
						    singleItem:true
						  });
					}else if(hash =="#planning" && role == "carrusel"){
							$("#owl-tw").owlCarousel({
						    navigation : true, // Show next and prev buttons
						    slideSpeed : 300,
						    paginationSpeed : 400,
						    singleItem:true
						  });
					}
				});
				goHash(this);
				return false;
			//}
		});

		$(document).on("click", ".linksc", function(){
			goHash(this);
			return false;
		});

		//Subscribe
		new UIMorphingButton( document.querySelector( '.morph-button' ) );
		// for demo purposes only
		[].slice.call( document.querySelectorAll( 'form button' ) ).forEach( function( bttn ) { 
			bttn.addEventListener( 'click', function( ev ) { ev.preventDefault(); } );
		} );

});

function goHash(object){
	if (location.pathname.replace(/^\//,'') == object.pathname.replace(/^\//,'')
			&& location.hostname == object.hostname) {
					var $target = $(object.hash);
					$target = $target.length && $target || $('[name=' + object.hash.slice(1) +']');
					if ($target.length) {
							var targetOffset = $target.offset().top;
							//si elige docente o alumno
							if($(object).attr("id") == "choice"){
								loadData($(object).attr("data"));
							}

							$('html,body').animate({scrollTop: targetOffset}, 600);

							return false;
					}
	}
	return false;
}

/*
* Cargar las secciones en cascada
*/
function loadData(role){
		role = role!=null ? role : "docente";
		$("#basic .container .row").load("html/conceptos/basic.php?role="+role, 
		function(){
			loadTestS();
			loadContent($("#planning .container .row"),"html/planeacion/planning.php");
			loadContent($("#coding .container .row"),"html/codificacion/codificacion.php");
		});
}

//cargar Desarrolla Apps -- con carrusel
function loadTestS() {
	$("#test .container .row").load("html/practica/test.php", function(){
			// OwlCarousel N2
		$("#owl-demo-1").owlCarousel({
		  navigation : false, // Show next and prev buttons
		  slideSpeed : 300,
		  paginationSpeed : 400,
		  singleItem:true
		});
	});
}

/*
* Para carga de contenidos que no requieren función de retorno de llamada
*/
function loadContent(object, URI){	
	object.load(URI);
}

/*
* Para carga de contenidos que SI requieren función de retorno de llamada
*/
function loadContentCb(object, URI, callback){	
	object.load(URI,callback());
}

/*
*/
function loadBasic(URI){
	$("#basic .container .row").load(URI);
}