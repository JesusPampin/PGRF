function getdb() {
	jQuery.ajax({
	    type: "POST",
	    url: 'javascript/ajax.php',
	    data: {action: "call_this" },

	    success: function() {
	    	alert();
	    }
	});
}