var index = 1;
	function sliding(){
		var slideElement = document.getElementById("slideshow");
		slideElement.src="resources/images/1.jpg";
		if(index>3){
			index=1;
		}
		setTimeout("sliding()" ,1000);
	}

onload =sliding;
