const navSlide=()=>{
	const burger = document.querySelector(".burger");
	const nav= document.querySelector(".navlink");
	const navli = document.querySelectorAll(".navlink li");
	
	burger.addEventListener('click',()=>{
		nav.classList.toggle('nav-active');
		
			navli.forEach((link, index)=>{
			if (link.style.animation) {	
				link.style.animation = '';
			}
			else{
				link.style.animation = 'navlinkFade 0.5s ease forwards ${index / 7 + 1.5}s';
				console.log(index/5);

			}
					
	});

		burger.classList.toggle('toggle');			
	});


}

navSlide();

// sliders

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}