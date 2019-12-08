$(window).on('load', function(event) {
	$('body').removeClass('preloading');
	$('.load').delay(1000).fadeOut('fast');
	// $('.loader').delay(1000).fadeOut('fast');
});
$(".delete_btn").click(function () {
	return confirm("Xác nhận xóa?");
});