$(function(){
	$passHide = 1; // pass is hidden for users

	$('.PassShow').click(function (e) {
		if ($passHide == 1) {
			$('#eye-toggle > input').attr('type', 'text');
			$passHide = 0; // pass is revealed to users
		} else {
			$('#eye-toggle > input').attr('type', 'password');
			$passHide = 1;
		}
		
		e.preventDefault();
	});
});