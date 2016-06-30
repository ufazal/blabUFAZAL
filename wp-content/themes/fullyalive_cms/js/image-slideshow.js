
   	
	var displayWaitMessage=true;	// Display a please wait message while images are loading?
  	
   		
	var activeImage = false;
	var imageGalleryLeftPos = false;
	var imageGalleryWidth = false;
	var imageGalleryObj = false;
	var maxGalleryXPos = false;
	var slideSpeed = -1;
	var imageGalleryCaptions = new Array();
	function startSlide(e)
	{
		if(document.all)e = event;
		var id = this.id;
		if(this.id=='arrow_right'){
			slideSpeedMultiply = Math.floor((e.clientX - this.offsetLeft) / 4);
			slideSpeed = -1*slideSpeedMultiply;
			slideSpeed = Math.max(-5,slideSpeed);
		}else{			
			slideSpeedMultiply = 5 - Math.floor((e.clientX - this.offsetLeft) / 4);
			slideSpeed = 1*slideSpeedMultiply;
			slideSpeed = Math.min(5,slideSpeed);
			if(slideSpeed<0)slideSpeed=10;
		}
	}
	
	function releaseSlide()
	{
		var id = this.id;
		slideSpeed=-1;
	}
		
	function gallerySlide()
	{
		if(slideSpeed!=0){
			var leftPos = imageGalleryObj.offsetLeft;
			leftPos = leftPos/1 + slideSpeed;
			if(leftPos>maxGalleryXPos){
				leftPos = maxGalleryXPos;
				slideSpeed = 0;
				
			}
			if(leftPos<minGalleryXPos){
				leftPos = minGalleryXPos;
				slideSpeed=0;
			}
			
			imageGalleryObj.style.left = leftPos + 'px';
		}
		setTimeout('gallerySlide()',50);
		
	}
	
	function showImage()
	{
		if(activeImage){
			activeImage.style.filter = 'alpha(opacity=50)';	
			activeImage.style.opacity = 0.5;
		}	
		this.style.filter = 'alpha(opacity=100)';
		this.style.opacity = 1;	
		activeImage = this;	
	}
	
	function initSlideShow()
	{
		document.getElementById('arrow_left').onmousemove = startSlide;
		document.getElementById('arrow_left').onmouseout = releaseSlide;
		document.getElementById('arrow_right').onmousemove = startSlide;
		document.getElementById('arrow_right').onmouseout = releaseSlide;
	
		
		imageGalleryObj = document.getElementById('theImages');
		imageGalleryLeftPos = imageGalleryObj.offsetLeft;
		imageGalleryWidth = document.getElementById('galleryContainer').offsetWidth - 80;
		maxGalleryXPos = imageGalleryObj.offsetLeft; 
		minGalleryXPos = imageGalleryWidth - document.getElementById('slideEnd').offsetLeft;
		var slideshowImages = imageGalleryObj.getElementsByTagName('IMG');
		for(var no=0;no<slideshowImages.length;no++){
			slideshowImages[no].onmouseover = showImage;
		}
		
		var divs = imageGalleryObj.getElementsByTagName('DIV');
		for(var no=0;no<divs.length;no++){
			if(divs[no].className=='imageCaption')imageGalleryCaptions[imageGalleryCaptions.length] = divs[no].innerHTML;
		}
		gallerySlide();
	}
	
	function showPreview(imagePath,imageIndex){
		var subImages = document.getElementById('previewPane').getElementsByTagName('IMG');
		if(subImages.length==0){
			var img = document.createElement('IMG');
			document.getElementById('previewPane').appendChild(img);
		}else img = subImages[0];
		
		if(displayWaitMessage){
			document.getElementById('waitMessage').style.display='inline';
		}
		document.getElementById('largeImageCaption').style.display='none';
		img.onload = function() { hideWaitMessageAndShowCaption(imageIndex-1); };
		img.src = imagePath;
		
	}
	function hideWaitMessageAndShowCaption(imageIndex)
	{
		document.getElementById('waitMessage').style.display='none';	
		document.getElementById('largeImageCaption').innerHTML = imageGalleryCaptions[imageIndex];
		document.getElementById('largeImageCaption').style.display='block';
		
	}
	window.onload = initSlideShow;