<?php /*
	URLs
		Posts:	/posts/posts.json
		Post:	/posts/posts/[id].json
	Variables:
		userId,		integer
		id,			integer
		title,		string
		body,		string
		views,		integer
		published	boolean or datetime
*/
$action=$_POST['action'];
if(!$_POST || !$action){
	exit;
}
if($action=='get_post'){
	# Get post .json
	$posts_array=file_get_contents('./json/posts/'.$_POST['id'].'.json');
	# Convert .json to array
	$posts_array=json_decode($posts_array,true);
	# Process
	# Output
	echo json_encode($posts_array);
	exit;
}
