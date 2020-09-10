(function($, window) {
	var pageLoadingidTime = true;
	var pageLoading_LoadS = 0;
	var pageLoading_Speed = 1;
	function pageLoading_Load(pageLoading_valueText){
		if(pageLoadingidTime==true){
			if(pageLoading_LoadS==500){
				pageLoading_Speed = 10;
			}else if(pageLoading_LoadS==650){
				pageLoading_Speed = 20;
			}else if(pageLoading_LoadS==800){
				pageLoading_Speed = 1;
			}
		}else{
			pageLoading_Speed = 1;
			pageLoading_LoadS = pageLoading_LoadS+1000;
		}
		if(pageLoading_LoadS>=1000){
			$("div.pageLoadingid11,div.pageLoadingid12,div.pageLoadingid13,div.pageLoadingid14").remove();
			return false;
		}
		var pageLoading_loadingText = pageLoading_valueText.replace("{process}",Math.floor(pageLoading_LoadS/10));
		$(".pageLoadingid12").html(pageLoading_loadingText);
		$( ".pageLoadingid13" ).width((pageLoading_LoadS/10)+'%');
		setTimeout(function(){pageLoading_Load(pageLoading_valueText)},pageLoading_Speed);
		pageLoading_LoadS += 5;
	}
	function pageLoading(options){
		var pageLoading_defaultText = 'Loading screen... <b>{process}%</b>';
		if( typeof options === 'object' ) {
			if($("div.pageLoadingid11").length==0){
				$("body").prepend("<div class='pageLoadingid11'></div> ");
				$("body").prepend("<div class='pageLoadingid12'></div> ");
				$("body").prepend("<div class='pageLoadingid13'></div> ");
				$("body").prepend("<div class='pageLoadingid14'></div> ");
				$("body").css("visibility","visible");
			}
			pageLoadingidTime = true;
			pageLoading_LoadS = 0;
			pageLoading_Speed = 1;
			if("barColor" in options)
				$("div.pageLoadingid13").css("background-color",options.barColor).css('box-shadow', '0 0 10px '+options.barColor);
			if("barTop" in options){
				$("div.pageLoadingid13,div.pageLoadingid11").css("top",options.barTop);
			}
			if("loadOut" in options){
				if(options.loadOut==true){
					$(window).load(function() {
						pageLoadingidTime = false;
					});
				}
			}
			if("textTop" in options){
				$("div.pageLoadingid12").css("top",options.textTop);
			}
			if("text" in options){
				pageLoading_defaultText = options.text;
			}
			if("backColor" in options){
				$("div.pageLoadingid14").css("background-color",options.backColor);
			}
			if("backBarColor" in options){
				$("div.pageLoadingid11").css("background-color",options.backBarColor);
			}
			if("textVisible" in options){
				if(options.textVisible==false){
					$("div.pageLoadingid12").css("display","none")
				}
			}
		}else if( typeof options === 'string' ) {
			pageLoadingidTime = false;
		}else{
			pageLoading({show:'on'});
		}
		pageLoading_Load(pageLoading_defaultText);
	}
	window.pageLoading = pageLoading;
})(jQuery, window);

pageLoading({
	// background color of the progress bar
	barColor:'#0900ff',
	// top position of the progress bar
	barTop:'400px',
	// top position of the percentage text
	textTop:'350px',
	// background color of the loading overlay
	backColor:'rgba(25, 25, 35, 0.9)',
	// background color of the progress bar
	backBarColor:'#dfe8ea',
	// text inside the progress bar
	text:'Loading <b>{process} %</b>',
	// show of hide the percentage text
	textVisible:true,
});