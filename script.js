// DO NOT EDIT
function ajax(callback,data){
	$.ajax({
		dataType:'json',
		type:"POST",
		url:'/ajax.php',
		data:data,
		success:function(json){
			callback(json);
		},
		error: function (json) {
			console.log(json);
			alert('There\'s an error with the PHP file: '+json.responseText);
		}
	});
}
// EDIT FROM HERE
function got_post(json){
	console.log(json);
}
ajax(
	got_post,	// Send the response to the get_post() function
	{
		action:'get_post',
		id:1
	}
);