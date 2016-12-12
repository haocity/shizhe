OneImg=new Object();
	OneImg.obj=document.getElementById('oneimgpic');
	OneImg.objhref=document.getElementById('oneimg-herf');
	OneImg.id=Math.round(Math.random() *4358);
	OneImg.obj.src = "https://t4.haotown.cn/img/bj@"+OneImg.id+".jpg?imageView2/2/w/240/interlace/0/q/100";
	OneImg.objhref.href="https://t4.haotown.cn/img.html?img="+OneImg.id;

	$(".mobile-swich").click(function(){
		if( $(".mobile-left").css("left")=='-240px' )
		{
		$(".mobile-left").animate({left:'0px'});
		}
  		else{
  			$('.mobile-left').animate({left:'-240px'})
  		}
  	
	}); 		
$(".search-ico").click(function(){
		if ($("#s").css('display')=='none') {
			$("#s").css('display','block');
			setTimeout(function(){ $("#s").css('width','140px')},1);
		} else{
			setTimeout(function(){ $("#s").css('width','0px')},1);
			setTimeout(function(){ $("#s").css('display','none')},1300);
			
		}
  		})
  		