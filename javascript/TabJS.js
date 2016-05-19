function ESO1() {
	$('#CURS').empty();
    $.ajax({
    	type: "POST",
    	url: 'php/ajax.php',
    	data: {action: 'ESO1' },

    	success: function(html) {
    		document.getElementById("CURS").innerHTML = html;
    	}
    });
}

function ESO2() {
	$('#CURS').empty();
    $.ajax({
    	type: "POST",
    	url: 'php/ajax.php',
    	data: {action: 'ESO2' },

    	success: function(html) {
    		document.getElementById("CURS").innerHTML = html;
    		
    	}
    });
}
function ESO3() {
	$('#CURS').empty();
    $.ajax({
    	type: "POST",
    	url: 'php/ajax.php',
    	data: {action: 'ESO3' },

    	success: function(html) {
    		document.getElementById("CURS").innerHTML = html;
    		
    	}
    });
}
function ESO4() {
	$('#CURS').empty();
    $.ajax({
    	type: "POST",
    	url: 'php/ajax.php',
    	data: {action: 'ESO4' },

    	success: function(html) {
    		document.getElementById("CURS").innerHTML = html;
    		
    	}
    });
}

function BATX() {
	$('#CURS').empty();
    $.ajax({
    	type: "POST",
    	url: 'php/ajax.php',
    	data: {action: 'BATX' },

    	success: function(html) {
    		document.getElementById("CURS").innerHTML = html;
    		
    	}
    });
}