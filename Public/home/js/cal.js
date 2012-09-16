$(document).ready(function(){
	//alert('pp');
	var time = new Date();
	//alert(time);
	var year = time.getFullYear();
	var month = time.getMonth() + 1;
	var week = time.getDay();
	var day = time.getDate();
	//alert(week);
	
	switch(week) {
		case 1:
			week =  '一';
			break;
		case 2:
			week = '二';
			break;
		case 3:
			week = '三';
			break;
		case 4:
			week = '四';
			break;
		case 5:
			week =  '五';
			break;
		case 6:
			week =  '六';
			break;
		case 0:
			week = '日';
			break;
	}
	
	//alert(day);
	//alert(day);
	//alert(month);
	//alert(year);
	$('#year').text(year + '年' + month + '月');
	$('#week').text('星期' + week);
	$('#date').text(day);
});