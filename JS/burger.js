let sidenav = document.getElementById("mySidenav");
let openButton = document.getElementById("openBtn");
let closeButton = document.getElementById("closeBtn");

openButton.onclick = openNav;
closeButton.onclick = closeNav;


function openNav() {
	sidenav.classList.add("active");
	sidenav.style.width = '250px';
}


function closeNav() {
 	sidenav.classList.remove("active");
 	sidenav.style.width = '0px';
}


