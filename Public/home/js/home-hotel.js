$(document).ready(function(){
	var len = $('.farmImg').length;
	//alert(len);
	var index = 0;
	var numIndex;
	var $current;
	var imgTitle;
	var imgCon;
	var timer;
	//alert('pp');


	$('.farmImg').mouseover(function(){
			index = $('.farmImg').index(this);
			//alert(index + 'pp');

			showImg(index);
		}).eq(0).mouseover();

		$('#slideBox').hover(
			function(){
				clearInterval(timer);
			},
			function(){
				timer = setInterval(function(){
					index++;
					if(index == len){index=0;}		
					//alert(index);
					grabData(index);
					showImg(index);
				},5000);
			}
		).trigger('mouseleave');
	function grabData(index){
			$current = $('.farmImg').eq(index);
			imgTitle = $current.attr('imgTitle') || 'sorry';
			imgCon = $current.attr('imgCon') || 'sorry';	
	}
	function pushData (){
		$('#farmTitle').text(imgTitle);
		$('#farmDet').text(imgCon);
	}

	function showImg (index){
		//$('#farmDes').slideUp('fast');
		$('#farmDes').animate({height:'hide'},300);
		$('.farmImg').fadeOut('fast').eq(index).fadeIn('800',function(){
			//$('#farmDes').hide('fast');
			pushData();
			$('#farmDes').animate({height:'show'},300);
		});
		$('.farmNum').removeClass('on').eq(index).addClass('on');
	}
	
	$('.farmNum').click(function(){
		 numIndex = $(this).attr('num');
		 index = numIndex;
		 grabData(numIndex);
		 showImg(numIndex);
		 return false;

	});

});