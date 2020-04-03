var pagination = {
	move_pagination: function (materiName, pagination) {
		console.log(materiName);
		console.log(pagination);
		$.ajax({
			url: base_url + 'home/movePagination',
			type: 'post',
			data: {
				materiName: materiName,
				pagination_name: pagination
			},
			success: function (res) {
				$('#content .content').html('');
				$('#content .content').html(res);
			},
			error: function (res) {
				alert(res.responseText);
			}
		});
	}
}
$('#pagination li').click(function () {
	$('#pagination li').removeClass('active');
	$(this).addClass('active');
});
