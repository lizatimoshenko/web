var items=$('c-slider div');
var dots=$('.dot');
var currentIndex=0,
itemAmount=6;
function cycleItem(){
    var items=$('.c-slider div')
	var item=$('.c-slider div').eq(currentIndex);
	var dots=$('.dot');
	var dot=$('.dot').eq(currentIndex);
	items.hide();
	item.css('display','inline-block');
	dots.css('background-color','#bbb');
	dot.css('background-color','#4CAF50');
}

var autoSlide=setInterval(function(){
	currentIndex+=1;
		
		if(currentIndex>itemAmount-1){
			currentIndex=0;
		}
		cycleItem(currentIndex);
		},10000);
		
$('#1').click(function(){
	currentIndex=0;
	cycleItem();
	});
		
$('#2').click(function(){
	currentIndex=1;
	cycleItem();
	});
$('#3').click(function(){
	currentIndex=2;
	cycleItem();
	});
$('#4').click(function(){
	currentIndex=3;
	cycleItem();
	});
$('#5').click(function(){
	currentIndex=4;
	cycleItem();
	});
$('#6').click(function(){
	currentIndex=5;
	cycleItem();
	});

$('.next').click(function(){
	currentIndex+=1;
	if(currentIndex>itemAmount-1){
			currentIndex=0;
		}
	cycleItem(currentIndex);
	});
		
$('.prev').click(function(){
	currentIndex-=1;
	if(currentIndex=0){
		currentIndex=itemAmount-1;
	}
	cycleItem(currentIndex);
  });