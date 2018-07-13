$(function(){
	/*爱看世界杯*/
	var dataurl1=$(".shijiebei17891_con01 .top ul li.cur").attr("data");
	if(dataurl1!=""){
			$.get(dataurl1,function(data){
			if(data.length!=0){
					$("#datacontent").html(data);
			}
	})
	}

/*多彩世界杯*/
	var oDiv = $(".shijiebei .r_box").find("div");
	var oCont = $(".shijiebei .l_box").find(".cont");
	var oText = $(".shijiebei .title");
	oDiv.on("click",function (){
		var index = $(this).index();
		$(this).addClass("cur").siblings().removeClass("cur");
		oCont.eq(index).addClass("show").siblings().removeClass("show");
		var oHtml = $(this).find("p span").html();
		oText.html(oHtml);
	})
})