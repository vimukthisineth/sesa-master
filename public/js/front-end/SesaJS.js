setInterval(function() {
  var $inactiveLink = $("[data-link]:not(.active)");
  var $inactiveImage = $("[data-image]:not(.active)");
  var $activeLink = $("[data-link].active");
  var $activeImage = $("[data-image].active");
  
  $activeImage.removeClass("active").addClass("inactive");
  $activeLink.removeClass("active").addClass("inactive");
  $inactiveImage.addClass("active").removeClass("inactive");
  $inactiveLink.addClass("active").removeClass("inactive");
}, 4800);
// Type Writer////////////////////////////////////////////////

var i = 0;
var txt ="To Become the growing force of Sri Lankan IT industry"
var speed = 30; /* The speed/duration of the effect in milliseconds */
var rounds=2;
var elementName="typewriteVision";

function typeWriter() {
	
  if (i < txt.length) {
    document.getElementById(elementName).innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }else{
  	if(rounds==2){
  		$('#missionLabel').append("Our Mission");
  	}  	
  	rounds--;
  	if(rounds>0){
  		txt = "Make our undergraduates updated to IT industry";
			i=0;
  		elementName="typewriteMision";
  		setTimeout(typeWriter,speed);
  	}
  } 
}

// ////////////// Quick View Carousel///////////////////////////

$(document).ready(function(){
	var slideImages=[];
	$.get(host_url+'event/allToSlide',function (data) {
		var path;
		//var host_url_event = host_url + 'event';

		for(var x=0;x<data.length;x++) {
            //var src=[];
            path = host_url_event + data[x]['filepath'];
            //src.push(path);
            slideImages.push({src: path});
        }

            jR3DCarousel = $('.jR3DCarouselGallery').jR3DCarousel({
                width: 470, 		/* largest allowed width */
                height: 272, 		/* largest allowed height */
                slides: slideImages /* array of images source */
            });
            console.log('slideimages');
            console.log(slideImages);
            var carouselCustomeTemplateProps =  {
                width: 470, 				/* largest allowed width */
                height: 272, 				/* largest allowed height */
                slideLayout : 'fill',     /* "contain" (fit according to aspect ratio), "fill" (stretches object to fill) and "cover" (overflows box but maintains ratio) */
                animation: 'slide3D', 	/* slide | scroll | fade | zoomInSlide | zoomInScroll */
                animationCurve: 'ease',
                animationDuration: 1900,
                animationInterval: 4000,
                slideClass: 'jR3DCarouselCustomSlide',
                autoplay: false,
                controls: true,			/* control buttons */
                navigation: ''			/* circles | squares | '' */,
                perspective: 2200,
                rotationDirection: 'ltr',
                onSlideShow: slideShownCallback

            }

            function slideShownCallback($slide){
                console.log("Slide shown: ", $slide.find('img').attr('src'))
            }

            jR3DCarouselCustomeTemplate = $('.jR3DCarouselGalleryCustomeTemplate').jR3DCarousel(carouselCustomeTemplateProps);


            //slideImages=data;


    });

	/*var slideImages = [ {src: 'http://localhost:8383/sesa-master/public/photos/1/maxresdefault.jpg'},
	              		{src: 'https://images.unsplash.com/photo-1451976426598-a7593bd6d0b2?auto=format&fit=crop&w=1350&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D'},
	 {src: 'http://localhost:8383/sesa-master/public/photos/1/maxresdefault.jpg'},
	              		{src: 'https://images.unsplash.com/photo-1451976426598-a7593bd6d0b2?auto=format&fit=crop&w=1350&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D'},
	              		{src: 'https://images.unsplash.com/photo-1451976426598-a7593bd6d0b2?auto=format&fit=crop&w=1350&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D'} ]
	*///var jR3DCarousel;
	


  })

//////////////// End OF Quick Event View Carousel////////////////////

// ////////////// Scroll Effect on Specialized areas/////////////

$('.animate').scrolla();
$('.animate').scrolla({
    mobile: false, // disable animation on mobiles 
    once: false // only once animation play on scroll
});


///////////////////////Cards layout////////////

// $("#forum_card,#event_card,project_card,#articles_card").each(.mouseenter(funtion(){

// }))
$("#project_card").mouseenter(function(){
	$("#project_card .fab").addClass("expand");
	$("#project_card .fab-sha").addClass("active");
	$("#project_card .title").addClass("active");
	$("#project_card .icon").addClass("active");
	$("#project_card .desc").addClass("hide");
	$("#project_card button").addClass("active");	
});

$("#project_card").mouseleave(function(){
	$("#project_card .fab").removeClass("expand");	
	$("#project_card .fab-sha").removeClass("active");
	$("#project_card .title").removeClass("active");
	$("#project_card .icon").removeClass("active");
	$("#project_card .desc").removeClass("hide");
	$("#project_card button").removeClass("active");	
});

$("#forum_card").mouseenter(function(){
	$("#forum_card .fab").addClass("expand");
	$("#forum_card .fab-sha").addClass("active");
	$("#forum_card .title").addClass("active");
	$("#forum_card .icon").addClass("active");
	$("#forum_card .desc").addClass("hide");
	$("#forum_card button").addClass("active");	
});

$("#forum_card").mouseleave(function(){
	$("#forum_card .fab").removeClass("expand");	
	$("#forum_card .fab-sha").removeClass("active");
	$("#forum_card .title").removeClass("active");
	$("#forum_card .icon").removeClass("active");
	$("#forum_card .desc").removeClass("hide");
	$("#forum_card button").removeClass("active");	
});

$("#event_card").mouseenter(function(){
	$("#event_card .fab").addClass("expand");
	$("#event_card .fab-sha").addClass("active");
	$("#event_card .title").addClass("active");
	$("#event_card .icon").addClass("active");
	$("#event_card .desc").addClass("hide");
	$("#event_card button").addClass("active");	
});

$("#event_card").mouseleave(function(){
	$("#event_card .fab").removeClass("expand");	
	$("#event_card .fab-sha").removeClass("active");
	$("#event_card .title").removeClass("active");
	$("#event_card .icon").removeClass("active");
	$("#event_card .desc").removeClass("hide");
	$("#event_card button").removeClass("active");	
});

$("#articles_card").mouseenter(function(){
	$("#articles_card .fab").addClass("expand");
	$("#articles_card .fab-sha").addClass("active");
	$("#articles_card .title").addClass("active");
	$("#articles_card .icon").addClass("active");
	$("#articles_card .desc").addClass("hide");
	$("#articles_card button").addClass("active");
});

$("#articles_card").mouseleave(function(){
	$("#articles_card .fab").removeClass("expand");	
	$("#articles_card .fab-sha").removeClass("active");
	$("#articles_card .title").removeClass("active");
	$("#articles_card .icon").removeClass("active");
	$("#articles_card .desc").removeClass("hide");
	$("#articles_card button").removeClass("active");	
});

// Load Type writer effect on the page load
window.onload= typeWriter;
