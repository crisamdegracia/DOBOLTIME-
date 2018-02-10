var email 			= $('#email'),
		password		= $('#password'),
		loginBtn		= $('#loginBtn'),
		err					= '',
		alertMsg		= $('#alertMsg'),
		toggleLogin = $('#toggleLogin'),
		loginActive	= $('#loginActive'),
		loginBtn		= $('#loginBtn'),
		modalTitle	= $('#modalTitle'),
		tweetPostButton = $('#tweetPostButton'),
		postAlert		= $('.postAlert'),
		followBtn		= $('.followBtn');

alertMsg.hide();

/*TOGGLES LOGIN BUTTONS */
toggleLogin.click(function(){

	if(loginActive.val() == '1'){
		modalTitle.html('Sign up!');
		toggleLogin.html('Login');
		loginBtn.html('Signup');
		loginActive.val('0');
	} else {
		modalTitle.html('Log in!')
		toggleLogin.html('Signup')
		loginBtn.html('Login')
		loginActive.val('1')
	}
})


/*CHECK THE MODAL INPUT FIELD IF EMPTY THEN SEND AJAX*/
loginBtn.click(function(e){

	$.ajax({
		method: "POST",
		url: "actions.php?action=login",
		data: "email=" + email.val() + "&password=" + password.val() + "&login=" + loginActive.val(),
		success: function(result){

			if(result == '1'){
				window.location.assign('/playground');
			} else {
				alertMsg.html(result).show();

			}

		}

	})
})

//POSTING A TWEET
tweetPostButton.click(function(e){

	$.ajax({
		method: "POST",
		url: "actions.php?action=tweetpost",
		data: "tweet=" + $('#tweetPost').val(),
		success: function(result){
			if(result == '1') {
				postAlert.removeClass('alert alert-danger');
				postAlert.html('Tweet Successfully added!').addClass('alert alert-success').show();
				location.reload();

			} else {
				postAlert.removeClass('alert alert-success');
				postAlert.html(result).addClass('alert alert-danger').show();
			}
		}

	})
})

//FOLLOWING AND UNFOLLOWING

followBtn.click(function(e){


	/*follow button id*/
	var	id = $(this).data('userid')
	$.ajax({
		method: "POST", 
		url: 'actions.php?action=following',
		data: 'followerid=' + id ,
		success: function(result){

			if(result == '1'){

				$("button[data-userid='"+id+"' ]").html('follow')
				location.reload();

			}
			//					else if (result == '3') {
			//					$("button[data-userid='"+id+"']").html('xxxx');
			//					location.reload();
			//
			//
			//				} 

			else {

				$("button[data-userid='"+id+"' ]").html('unfollow');
				location.reload();

			}

		}
	})


})



/*LOAD MORE*/
$('#loadMoreBtn').click(function(e){
	var postLimit = 3;


	$.ajax({
		method: "POST",
		url: "functions.php?action=loadmore",
		data: 'postLimit=' + postLimit,
		success:function(result){
			alert(result);
			if(result == '1'){
				location.reload();
			}
		}
	})
})

