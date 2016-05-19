function ESO1() {
	$('#ESO').empty();
    $.ajax({
    	type: "POST",
    	url: 'php/ajax.php',
    	data: {action: 'ESO1P' },

    	success: function(html) {
    		document.getElementById("ESO").innerHTML = html;
    	}
    });
}

function selecforprova() {
	$('#ESO').empty();
    $.ajax({
    	type: "POST",
    	url: 'php/ajax.php',
    	data: {action: 'ESO1PSelect' },

    	success: function(html) {
    		document.getElementById("ESO").innerHTML = html;
    	}
    });
}

function ESO2() {
	$('#ESO').empty();
    $.ajax({
    	type: "POST",
    	url: 'php/ajax.php',
    	data: {action: 'ESO2P' },

    	success: function(html) {
    		document.getElementById("ESO").innerHTML = html;
    		
    	}
    });
}
function ESO3() {
	$('#ESO').empty();
    $.ajax({
    	type: "POST",
    	url: 'php/ajax.php',
    	data: {action: 'ESO3P' },

    	success: function(html) {
    		document.getElementById("ESO").innerHTML = html;
    		
    	}
    });
}
function ESO4() {
	$('#ESO').empty();
    $.ajax({
    	type: "POST",
    	url: 'php/ajax.php',
    	data: {action: 'ESO4P' },

    	success: function(html) {
    		document.getElementById("ESO").innerHTML = html;
    		
    	}
    });
}
