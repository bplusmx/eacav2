var carPos = 1;
var detenido = false;

function mycarousel_initCallback(carousel) 
{
	$('#features-nav .features-nav-item').click(function() 
	{
		//carPos = jQuery.jcarousel.intval(jQuery(this).attr("rel"));
		
		//alert(carPos);
		
		//carousel.scroll(carPos);		
		//detenido = true;
		//$("#features-nav .features-nav-item").removeClass("current").addClass("");
	    //$(this).addClass("current");
	    
		//return false;
	});
	
	$("#features-nav .features-nav-item").mouseover(function()
	{
		//carousel.stopAuto();
	});
	
	$("#features-nav .features-nav-item.current").mouseout(function()
	{
		//carousel.startAuto();
	});
	
	// Pause autoscrolling if the user moves with the cursor over the clip.
	/*
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
    */

};

function onLoadItem(carousel)
{
	if (!detenido) {
		$("#features-nav .features-nav-item").removeClass("current").addClass("");
		$("#features-nav #features-nav" + carPos).addClass("current");
		
		if (carPos < carousel.size()) {
			carPos++;
		} else if (carPos == carousel.size()) {
			carPos = 1;
		}
	}
	
	//alert(carPos + " " + carousel.size());
}

jQuery(document).ready(function() 
{
	$("#destacados").jcarousel({
		scroll: 1,
		auto: 3,
		wrap: "last",
		initCallback: mycarousel_initCallback,
		itemLoadCallback: onLoadItem,
		buttonNextHTML: null,
		buttonPrevHTML: null
	});

	$("#features-nav .features-nav-item").click(function()
	{		
	    
	});
});