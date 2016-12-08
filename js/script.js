/*
*scrollbar code
*/
$(document).ready(function(){
	var la = $('#la'),ra = $('#ra'),container = $("#carousel");

	function right(){
		var prev = container.scrollLeft();
		container.scrollLeft(container.scrollLeft()+200);
		if (prev === container.scrollLeft()) {
			container.scrollLeft(0);
		}
	}
	function left(){
		var prev = container.scrollLeft();
		container.scrollLeft(container.scrollLeft()-200);
		if (prev === container.scrollLeft()) {
			container.scrollLeft(screen.width);
		}
	}
	ra.mouseenter(right);
	ra.click(right);

	la.mouseenter(left);
	la.click(left);
});
