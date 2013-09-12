$(document).ready(function() {		// Funksjonen starter på page load
    $('#back').animate({opacity: 0}, 0).css		// 
	({'background-image': 'url(Exercise_background1.jpg)'})	// Bakgrunnsbildet som skal fade in
	.animate({opacity: 1}, 2000);		// Antall millisekunder det tar for siden å gå fra opacity 0-1
});