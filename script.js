window.onscroll = function() {myFunction()};

	var navbar = document.getElementById("navbar");
	var sticky = navbar.offsetTop;

	function myFunction() {
	  if (window.pageYOffset >= sticky) {
	    navbar.classList.add("sticky")
	  } else {
	    navbar.classList.remove("sticky");
	  }
	}


function onClick(element) {
	 document.getElementById("img01").src = element.src;
	 document.getElementById("modal01").style.display = "block";
}
	
