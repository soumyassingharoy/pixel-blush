

  const instance = new Typewriter('#typewriter', {
      strings: ['Graphic Design', 'Digital Marketing','Social Media Marketing'],
      autoStart: true,
      loop: true,
    });



/*** =====================================
     * PreLoader
     * =====================================***/
    $(window).on('load', function(){
		
        $('.fakeLoader').fadeOut(600);
        AOS.init({  
      duration: 1200,
      // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
      once: true, // whether animation should happen only once - while scrolling down
 

});
         
              
              
        
         
       
    });



$(window).scroll(function() {
   /* affix after scrolling 100px */
   if ($(document).scrollTop() > 100) {
    $('header').addClass('affix');
   } else {
    $('header').removeClass('affix');
   }
 });


$(document).ready(function(){
    
    
     
    $('#client_speak').owlCarousel({
         	loop:true,
         	margin:10,
         	nav:true,
         	autoplay:true,
         	navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
         	responsive:{
         		0:{
         			items:1
         		},
         		480:{
         			items:1
         		},
         		600:{
         			items:2
         		},
         		1000:{
         			items:2
         		}
         	} 
         });
    
    
  
    
    
    
    
         $(window).scroll(function () {
         if ($(this).scrollTop() > 50) {
         $('.back-to-top').addClass("affix");
         } else {
         $('.back-to-top').removeClass("affix");
         }
         });
         // scroll body to 0px on click
         $('.back-to-top').click(function () {
         $('body,html').animate({
         scrollTop: 0
         }, 400);
         return false;
         });
         });





$(document).ready(function(){
    
    
              
               
              
    
    
    
    
    
    $("#respMenu").aceResponsiveMenu({
                 resizeWidth: '767', // Set the same in Media query       
                 animationSpeed: 'fast', //slow, medium, fast
                 accoridonExpAll: false //Expands all the accordion menu on click
             });
    
    
    
    
    
    
   
	
	
	
	
	function inviewExample() {
              var $example = $('#inview-example');
              var inview;
         
              if ($example.length) {
                inview = new Waypoint.Inview({
                  element: $('#inview-example')[0],
                  entered: function(direction) {
                 	 $('.timer').each(function () {
                   	   var $this = $(this);
                   	   var val = $(this).data('count');
                   	   jQuery({ Counter: 0 }).animate({ Counter: val }, {
                   	     duration: 2000,
                   	     easing: 'swing',
                   	     step: function () {
                   	       $this.text(Math.ceil(this.Counter));
                   	     }
                   	   });
                   	 });
                  }
                })
              }
          }
         $(window).on('load', function() {
         	inviewExample();
         });
	
	
	
	
	
	
    
    
  
    
    
    
    
    
});