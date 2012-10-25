window.onload=function(){

	var myform=document.forms.item(0);
	
	myform.onsubmit=function(){
		var t=true;
		for(i=0;i<myform.elements.length;i++){
			
			if(myform.elements.item(i).className!='ok'){
				
				myform.elements.item(i).style.borderColor='red'
;				t=false;	
			}
		}
		return t;
	}	
	
	
	for(i=0;i<myform.elements.length;i++){
		
		if(myform.elements.item(i).type=='text' || myform.elements.item(i).type=='textarea'){
		
			myform.elements.item(i).onblur=function(){
				if(this.value!=''){
			
					this.className='ok';	
					
				}
				else{
					this.className='not-ok';
				}
				
				
			}
		}
		
	}	
}




$(function(){
		$('.hide-nav').click(function(){
			$('.hide-nav').css(
				'-webkit-transform','rotate(180deg)'
			);
			$('.hide-nav').css(
				'-moz-transform','rotate(180deg)'
			);
			$('.hide-nav').css(
				'-o-transform','rotate(180deg)'
			);
			$('.hide-nav').css(
				'-ms-transform','rotate(180deg)'
			);
			$('.hide-nav').css(
				'transform','rotate(180deg)'
			);

			$('.nav').animate({'top':'-400px'},1000,null,function(){
			$('.hide-nav').click(function(){
				if($('.nav').css('top')=='-400px'){
						$('.nav').animate({'top':'0px'},1000);
						$('.hide-nav').css(
							'-webkit-transform','rotate(0)'
						);
						$('.hide-nav').css(
							'-moz-transform','rotate(0)'
						);
						$('.hide-nav').css(
							'-o-transform','rotate(0)'
						);
						$('.hide-nav').css(
							'-ms-transform','rotate(0)'
						);
						$('.hide-nav').css(
							'transform','rotate(0)'
						);
				}
		});
			});
		
	});
		
	
})