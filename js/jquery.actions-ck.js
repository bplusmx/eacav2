var carPos=1,detenido=!1;(function(e){function t(t){e("#features-nav .features-nav-item").click(function(){});e("#features-nav .features-nav-item").mouseover(function(){});e("#features-nav .features-nav-item.current").mouseout(function(){})}function n(t){if(!detenido){e("#features-nav .features-nav-item").removeClass("current").addClass("");e("#features-nav #features-nav"+carPos).addClass("current");carPos<t.size()?carPos++:carPos==t.size()&&(carPos=1)}}jQuery(document).ready(function(){e("#destacados").jcarousel({scroll:1,auto:3,wrap:"last",initCallback:t,itemLoadCallback:n,buttonNextHTML:null,buttonPrevHTML:null})})})(jQuery);