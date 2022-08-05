/* JS Document */

/**
	classList property returns the classname of an element and toggle CSS classes on an element.
	When we toggle the 3-bar, the elements present in the id 'burger' are displayed.
*/
function navSlide() {
	document.getElementById('burger').classList.toggle('active');
}

navSlide();