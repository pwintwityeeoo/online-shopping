$(document).ready(function () {
	$('.tab-cat li a[href="#"]').attr('href', 'javascript:void(0);');
	$('.cloth li a').click(function () {
		var tab_id = $(this).attr('data-tab');

		$('.cloth li a').removeClass('current');
		$('.cloth-content').removeClass('current');

		$(this).addClass('current');
		$("#" + tab_id).addClass('current');
	})
	$('.shoes li a').click(function () {
		var tab_id = $(this).attr('data-tab');

		$('.shoes li a').removeClass('current');
		$('.shoes-content').removeClass('current');

		$(this).addClass('current');
		$("#" + tab_id).addClass('current');
	})
	$('.bags li a').click(function () {
		var tab_id = $(this).attr('data-tab');

		$('.bags li a').removeClass('current');
		$('.bags-content').removeClass('current');
		//$('.modal-content').addClass('current');
		$(this).addClass('current');
		//$('.modal.show').addClass('current');
		$("#" + tab_id).addClass('current');
	})
	$('.men-cloth li a').click(function () {
		var tab_id = $(this).attr('data-tab');

		$('.men-cloth li a').removeClass('current');
		$('.mencloth-content').removeClass('current');

		$(this).addClass('current');
		$("#" + tab_id).addClass('current');
	})
	$('.men-shoe li a').click(function () {
		var tab_id = $(this).attr('data-tab');

		$('.men-shoe li a').removeClass('current');
		$('.menshoe-content').removeClass('current');

		$(this).addClass('current');
		$("#" + tab_id).addClass('current');
	})
	$('.men-bag li a').click(function () {
		var tab_id = $(this).attr('data-tab');

		$('.men-bag li a').removeClass('current');
		$('.menbag-content').removeClass('current');

		$(this).addClass('current');
		$("#" + tab_id).addClass('current');
	})

	//$("#exampleModalToggle").on('shown.bs.modal', function () {
	//	$('.modal').addClass('current');
	//	$('.modal.current .shoe-size').css("display","none !important");
	//});

});
