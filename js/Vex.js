// JavaScript Document

$(document).ready(function(){
	
	$("#slideshow").bjqs({
            animtype      : 'slide',
            height        : 500,
            width         : 800,
			nexttext : '>',
			prevtext : '<',
			animspeed : 2500,
			keyboardnav : false,
			showmarkers : false,
            responsive    : true,
	});
	
	if($("#MyGmaps").length > 0)
		LoadGmaps();
	
	$("#videoIcon").hover(function(){
		$(this).attr("src", "i/video_hover.png");
		},function(){
		$(this).attr("src", "i/video.png");
			});
	
	$("#photoIcon").hover(function(){
		$(this).attr("src", "i/pics_hover.png");
		},function(){
		$(this).attr("src", "i/pics.png");
			});
	
	$("#sponsorScroller").simplyScroll();
	
	setTimeout(function(){$("#sponsorScroller").simplyScroll();}, 3000);
	
});

function LoadGmaps() {
		var myLatlng = new google.maps.LatLng(43.7845767,-79.6758062);
		var myOptions = {
			zoom: 14,
			center: myLatlng,
			disableDefaultUI: true,
			panControl: true,
			zoomControl: true,
			zoomControlOptions: {
				style: google.maps.ZoomControlStyle.DEFAULT
			},

			mapTypeControl: true,
			mapTypeControlOptions: {
				style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
			},
			streetViewControl: true,
			mapTypeId: google.maps.MapTypeId.ROADMAP
			}
		var map = new google.maps.Map(document.getElementById("MyGmaps"), myOptions);
		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title:"10 gardenbrooke trail"
		});
		var infowindow = new google.maps.InfoWindow({
			content: "Castlebrooke S.S."
			});
			google.maps.event.addListener(marker, "click", function() {
				infowindow.open(map, marker);
			});
	}
	
function video($url){
	$('#video iframe').attr("src", "https://www.youtube.com/embed/"+$url);
	$("#viel").show();
	$('#video').show();
}
	
function photo($photos){
	$split = $photos.split(";");
	for($i =0; $i < $split.length; $i++){
		$("#photos").append('<img src="'+$split[$i]+'">');
	}
	$("#viel").show();
	$('#photos').show();
}