(function($){
	$.get("https://www.googleapis.com/plus/v1/people/114986089777689431996/activities/public", function(data){
		console.log(data);
	});
});