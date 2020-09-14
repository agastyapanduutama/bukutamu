$(document).ready(function () {
	table = $('#list_individu').DataTable({
		"processing": true,
		"serverSide": true,
		"order": [],

		"ajax": {
			"url": baseUrl + 'admin/sifat/data',
			"type": "POST",
			"error": function (error) {
				errorCode(error)
			}
		},

		"columnDefs": [{
				"sClass": "text-center",
				"targets": [0],
				"orderable": false
			},
			{
				"targets": [1],
				"orderable": true
			},
			{
				"targets": [2],
				"orderable": true
			},
			{
				"sClass": "text-center",
				"targets": [4],
				"orderable": false
			},
			{
				"sClass": "text-center",
				"targets": [5],
				"orderable": false
			}
		],
	});
})
