jQuery(document)
	.ready(
		function($) {
			$('#accounts-list').dataTable( {
		        "sScrollY": "200px",
		        "bPaginate": false,
		        "bScrollCollapse": true
		    } );
		}
	
	);