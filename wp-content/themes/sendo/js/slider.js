/** slider js file */
<!--
$(document).ready(function(){
	$("#slides").slidesjs({
		width: 640,
		height: 480,
		navigation: {
			active: true, //[boolean] Generates next and previous buttons.
			effect: "fade"
		},
		pagination: {
			active: true, // [boolean] Create pagination items.
			effect: "fade" // [string] Can be either "slide" or "fade".
		},
		play: {
			active: false, // [boolean] Generate the play and stop buttons.
			effect: "fade",  // [string] Can be either "slide" or "fade".
			interval: 5000,  // [number] Time spent on each slide in milliseconds.
			auto: true, // [boolean] Start playing the slideshow on load.
			swap: true, // [boolean] show/hide stop and play buttons
			pauseOnHover: false, // [boolean] pause a playing slideshow on hover
			restartDelay: 5000 // [number] restart delay on inactive slideshow
		}
	});
});

//-->