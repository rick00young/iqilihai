var notice = {

news:{},

closeNews:function(){
	$('.closeNews').click(function(){
		$('.newsCon').slideUp();
		$('.listShow').slideDown();
	});
},

pushData:function(){
			$('.newsTitle').text(notice.news.title);
			$('.author').text(notice.news.author);
			$('.publishTime').text(notice.news.publishTime);
			$('.newsDes').text(notice.news.newsDes);
},

slide:function(type){
	if(type == 1){
			$('#newsErList').slideUp();
			if($('#newsYi').is(':visible')){
				$('#newsYi').slideUp('fast').slideDown();
			}else{
				$('#newsYi').slideDown();
			}
			notice.pushData();
	}else if(type == 2){
			$('#newsYiList').slideUp();
			if($('#newsEr').is(':visible')){
				$('#newsEr').slideUp('fast').slideDown();
			}else{
				$('#newsEr').slideDown();
			}
			
			notice.pushData();
	}
},

linkClick:function(){
	$('.newsLink').click(function(){
		//alert('pp');
		notice.news.type = $(this).attr('type');
		notice.news.title = $(this).text();
		notice.news.author = $(this).attr('author');
		notice.news.publishTime = $(this).prev().text();
		notice.news.newsDes = $(this).attr('des')  || '数据不误!';
		//var newsInfo = $(this).attr('des')  || '数据摘取有误!';
		//newsInfo = newsInfo.split('\n');
		//alert(newsInfo);
		notice.slide(notice.news.type);
	});
},

run:function(){
	this.linkClick();
	this.closeNews();

}

}

$(document).ready(function(){
	//alert("oo");
	/*$('.newsLink').click(function(){
		//alert('pp');
		var type = $(this).attr('type');
		var title = $(this).text();
		var author = $(this).attr('author');
		var time = $(this).next().text();
		if(type == 1){
			$('#newsErList').slideUp();
			$('#newsYi').slideDown();
		}else if(type == 2){
			$('#newsYiList').slideUp();
			$('#newsEr').slideDown();			
		}
	});
	


	$('.closeNews').click(function(){
		$('.newsCon').slideUp();
		$('.listShow').slideDown();
	});*/
	notice.run();
});