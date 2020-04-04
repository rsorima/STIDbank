$(document).ready (function() {
    
	//DATA TABLE   
	$("#tblAdviser").DataTable({
		// 'paging'      : true,
		// 'lengthChange': false,
		// 'searching'   : true,
		// 'ordering'    : true,
		// 'info'        : false,
		// 'autoWidth'   : false,
		// 'responsive'  : true,
		// "processing"  : true,
		"ajax"        : "php/fetch-adviser.php",
	});


	//DATA TABLE   
	$("#tblStudent").DataTable({
		// 'paging'      : true,
		// 'lengthChange': false,
		// 'searching'   : true,
		// 'ordering'    : true,
		// 'info'        : false,
		// 'autoWidth'   : false,
		// 'responsive'  : true,
		// "processing"  : true,
		"ajax"        : "php/fetch-student.php",
	});

	$("#tblGroup").DataTable({
		// 'paging'      : true,
		// 'lengthChange': false,
		 'searching'   : true,
		// 'ordering'    : true,
		// 'info'        : false,
		// 'autoWidth'   : false,
		// 'responsive'  : true,
		// "processing"  : true,
		"ajax"        : "php/fetch-group.php",
	});

	$("#tblJournalReports").DataTable({
		// 'paging'      : true,
		// 'lengthChange': false,
		// 'searching'   : true,
		// 'ordering'    : true,
		// 'info'        : false,
		// 'autoWidth'   : false,
		// 'responsive'  : true,
		// "processing"  : true,
		"ajax"        : "php/fetch-journal.php",
	});

	$("#tblStatusReports").DataTable({
		// 'paging'      : true,
		// 'lengthChange': false,
		// 'searching'   : true,
		// 'ordering'    : true,
		// 'info'        : false,
		// 'autoWidth'   : false,
		// 'responsive'  : true,
		// "processing"  : true,
		"ajax"        : "php/fetch-statusreport.php",
	});

	$("#tblManuscript").DataTable({
		// 'paging'      : true,
		// 'lengthChange': false,
		// 'searching'   : true,
		// 'ordering'    : true,
		// 'info'        : false,
		// 'autoWidth'   : false,
		// 'responsive'  : true,
		// "processing"  : true,
		"ajax"        : "php/fetch-manuscript.php",
	});

	$('#tblDocumentation').DataTable({
		"ajax": {
			url: "php/fetch-documentation.php"
		}
	});


});