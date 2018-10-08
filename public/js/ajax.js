$(function() {
	$('#check').click(function() {
		var url      = './api/check';
		var reportId = '1';
		$.ajax({
			url: url,
			type:'POST',
			dataType: 'json',
			data: {
				reportId: reportId,
			}
		}).done(function(data) {
		}).fail(function(XMLHttpRequest, textStatus, errorThrown) {
		})
	});
});
