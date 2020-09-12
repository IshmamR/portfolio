// ================== //
// __Typing effect__ //
const typeWriter = function(txtElement, words, wait) {
	this.txtElement = txtElement;
	this.words = words;
	this.txt = '';
	this.wordIndex = 0;
	this.wait = parseInt(wait, 10);
	this.type();
	this.isDeleting = false;
}

// Type method
typeWriter.prototype.type = function () {
	// Current index of words
	const current = this.wordIndex % this.words.length; // check this afterwards

	// Get full text of current word
	const fullTxt = this.words[current];
	// Check if deleting
	if (this.isDeleting) {
		// remove char
		this.txt = fullTxt.substring(0, this.txt.length - 1);
	} else{
		// add char
		this.txt = fullTxt.substring(0, this.txt.length + 1);
	}
	// Insert txt into txtElement
	this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;
	
	// Type Speed
	var typeSpeed = 200;
	if (this.isDeleting) {
		typeSpeed /= 2;
	}

	// if word is complete
	if (!this.isDeleting && this.txt === fullTxt) {
		// Make pause at end
		typeSpeed = this.wait;
		// set isDeleting true
		this.isDeleting = true;
	} else if (this.isDeleting && this.txt === '') {
		// set isDeleting false
		this.isDeleting = false;
		// move to next word
		this.wordIndex++;
		// pause before typing
		typeSpeed = 300;
	}
	
	setTimeout(() => this.type(), typeSpeed);
}

// Init on DomLoad
document.addEventListener('DOMContentLoaded', init);

// Init app
function init() {
	const txtElement = document.querySelector('.type-effect');
	const words = JSON.parse(txtElement.getAttribute('data-words'));
	const wait = txtElement.getAttribute('data-wait');
	// Init typeWriter
	new typeWriter(txtElement, words, wait);
}
// ====================== //
// __Typing effect END__ //



// ========================= //
// Navbar to show on mobile //
const navbar = document.querySelector("nav");
const toggler = document.querySelector(".navbar-toggler");
var i = 0;

toggler.addEventListener("click", function() {setTimeout(toggleUp, 150)});
function toggleUp() {
	if (i % 2 == 0) {
		navbar.scrollIntoView(true);
	} else {
		navbar.scrollIntoView({behavior: "smooth", block: "nearest", inline: "nearest"});
	}
	i++;
}
// const menus = document.querySelectorAll(".dropdown-menu");
// const drops = document.querySelectorAll(".dropdown-toggle");
// drops.forEach(drop => {
// 	drop.addEventListener("click", function() {setTimeout(togglee, 100)});
// 	function togglee() {
// 		menus.forEach(menu => { 
// 			menu.scrollIntoView({block: "nearest"});
// 		});
// 	}
// });