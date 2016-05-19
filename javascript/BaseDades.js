function InsertAlumne() {
	var data = $('#insert').serialize();
	$.ajax({
    	type: "POST",
    	url: 'php/ajax.php',
    	data: {action: 'InsertAlumne', data: data},
    	complete: function() {
    		$().submit();
    	}
    });
	return false;
}

function SelecAlumne() {
	var data = $('#selec').serialize();
	$.ajax({
		type: "POST",
		url: 'php/ajax.php',
		data: {action: 'SelecAlumne', data: data},
		complete: function() {
			$().submit();
			dataerase = data;
		},
		success: function(html) {
    		document.getElementById("AlumSelec").innerHTML = html;
    	}
	});
	$("#hidden").css({"visibility":"visible"});
	return false;
}

function SelecAlumneP() {
	var data = $('#selec').serialize();
	$.ajax({
		type: "POST",
		url: 'php/ajax.php',
		data: {action: 'SelecAlumneP', data: data},
		complete: function() {
			$().submit();
			dataerase = data;
		},
		success: function(html) {
    		document.getElementById("AlumSelec").innerHTML = html;
    	}
	});
	$("#hidden").css({"visibility":"visible"});
	return false;
}

function EsborrarAlumne() {
	var data = dataerase;
	$.ajax({
		type: "POST",
		url: 'php/ajax.php',
		data: {action: 'EsborrarAlumne', data: data},
		complete: function() {
			$().submit();
		},
		success: function() {
			alert("El registro a sido eliminado con exito");
		}
	});
	return false;
}

function SelecAlumneMod() {
	var data = $('#selec').serialize();
	$.ajax({
		type: "POST",
		url: 'php/ajax.php',
		data: {action: 'Form'},
		complete: function() {
			
		},
		success: function(html) {
			datamodify = data;
			$("#formmod").css({"visibility":"visible"});
			document.getElementById("formmod").innerHTML = html;
    	}
	});
	return false;
}

function ConModAlumne() {
	var data = datamodify;
	var dataN = $('#modal').serialize();
	$.ajax({
		type: "POST",
		url: 'php/ajax.php',
		data: {action: 'SelecAlumneMod', data: data, dataN: dataN},
		complete: function() {
			$().submit();
		},
		success: function(html) {
			$("#formmod").css({"visibility":"hidden"});
			$("#formmod").empty();
			document.getElementById("AlumSelecMod").innerHTML = html;
			$("#hiddenmod").css({"visibility":"visible"});
    	}
	});
	return false;
}

function ModificarAlumne() {
	var data = datamodify;
	$.ajax({
		type: "POST",
		url: 'php/ajax.php',
		data: {action: 'ModificarAlumne', data: data},
		complete: function() {
			$().submit();
		},
		success: function() {
			alert("Se ha modificat el registre amb exit");
		}
	
	})
}