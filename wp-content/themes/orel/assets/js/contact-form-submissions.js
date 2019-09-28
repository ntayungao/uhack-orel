jQuery(document).ready(($) => {
	$("#contactSubmissions").DataTable({
		"order":[[0,"desc"]],
		"pageLength": 10,
		dom: "Bfrtip",
		buttons: [
			//'copy',
			{
				extend: "csv",
				text: "Export as CSV",
				filename: "orel-contact-form-submissions",
				exportOptions: {
					modifier: {
						search: "none"
					}
				}
			},
		]
	});
});
