//	@codekit-prepend "vendor/jquery-1.10.1.min.js"

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