//	@codekit-prepend "vendor/jquery-1.10.1.min.js"
//	@codekit-prepend "vendor/rainbow.min.js"
//	@codekit-prepend "vendor/chart.min.js"

function popitup (url) {
	newwindow=window.open(url,'name','height=600,width=800');
	if (window.focus) {newwindow.focus()}
		return false;
}

var pageRef;

$(document).ready(function() {
	pageRef = $('body').attr('data-pageref');
	if (pageRef) {
		$('li[data-navbutton="' + pageRef + '"]').addClass('pure-menu-selected');
	}
});

var menu = document.getElementById('menu');
var menuLink = document.getElementById('menuLink');
var layout = document.getElementById('layout');

toggleClass = function (element, className) {
	var classes = element.className.split(/\s+/),
	length = classes.length,
	i = 0;
	for(; i < length; i++) {
		if (classes[i] === className) {
			classes.splice(i, 1);
			break;
		}
	}
	// The className is not found
	if (length === classes.length) {
		classes.push(className);
	}
	element.className = classes.join(' ');
};

menuLink.onclick = function (e) {
	e.preventDefault();
	var active = 'active';
	toggleClass(layout, active);
	toggleClass(menu, active);
};
