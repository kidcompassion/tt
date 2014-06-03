$(document).ready(function(){


	var userContent = $('#storyarea').val();
	var message = "<p class='has-error'>Not so fast, hotshot</p>";
	console.log(userContent);

	$('#storyMailer').submit(function(){

		if (userContent === ""){
		
		$(message).insertBefore('#storyarea');
		event.preventDefault();

	} 
	


	

	});





	//if anonymous is checked, remove the name field. check the texta area for content. if it exists, check the captcha and submit.
	//if the name field has content, r

});
