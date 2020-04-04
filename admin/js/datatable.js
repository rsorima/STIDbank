$(document).ready (function() {
    
	$("#tblUser").DataTable({
		'paging'      : true,
		'lengthChange': false,
		'searching'   : true,
		'ordering'    : true,
		'info'        : false,
		'autoWidth'   : false,
		'responsive'  : true,
		"processing"  : true,
		"ajax"        : "php/fetch-user.php",
	});
});