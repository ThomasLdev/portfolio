// Scrolled Navbar
const navbar = document.getElementById("navScroll");
const socialBar = document.getElementById("iconBar");

window.onscroll = function () {
	if (window.pageYOffset > 300) {
		navbar.classList.add("scrolled");
		socialBar.style.right = "0px";
	} else {
		navbar.classList.remove("scrolled");
		socialBar.style.right = "-60px";
	}
};


