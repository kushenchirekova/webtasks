function make (event){
	let button = event.currentTarget;
	button.parentNode.setAttribute("data-status", "done");

}