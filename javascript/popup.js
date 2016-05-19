function popupinsert() {
	if ($("#inseriralumne").is(":visible")) {
		$("#inseriralumne").fadeOut();
		$("#inseriralumne").css({"visibility":"hidden","display":"none"});
	}
	else {
		$("#inseriralumne").fadeIn();
		$("#inseriralumne").css({"visibility":"visible","display":"block"});
	}
}

function popuperase() {
	if ($("#esborraralumne").is(":visible")) {
		$("#esborraralumne").fadeOut();
		$("#esborraralumne").css({"visibility":"hidden","display":"none"});
	}
	else {
		$("#esborraralumne").fadeIn();
		$("#esborraralumne").css({"visibility":"visible","display":"block"});
	}
}

function popupmodify() {
	if ($("#modificaralumne").is(":visible")) {
		$("#modificaralumne").fadeOut();
		$("#modificaralumne").css({"visibility":"hidden","display":"none"});
	}
	else {
		$("#modificaralumne").fadeIn();
		$("#modificaralumne").css({"visibility":"visible","display":"block"});
	}
}

function popupcsv() {
	if ($("#fileread").is(":visible")) {
		$("#fileread").fadeOut();
		$("#fileread").css({"visibility":"hidden","display":"none"});
	}
	else {
		$("#fileread").fadeIn();
		$("#fileread").css({"visibility":"visible","display":"block"});
	}
}