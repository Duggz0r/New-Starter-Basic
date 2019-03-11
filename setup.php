<?php function print_pre($expression,$return=false){
	$history=debug_backtrace();
	$history=$history[0];
	$out='<div class="print_pre">
		Debug<br><small><em>'.$history['file'].': '.$history['line'].'</em></small>
		<pre>'.htmlspecialchars(print_r($expression,true)).'</pre>
	</div>';
	if($return){
		return $out;
	}else{
		echo $out;
	}
}
$posts=file_get_contents('https://jsonplaceholder.typicode.com/posts');
$posts=json_decode($posts,1);
foreach($posts as &$post){
	$rand_time=mt_rand(strtotime('-5 years'),strtotime('yesterday'));
	$rand=array(
		false,
		date('Y-m-d H:i:s',$rand_time)
	);
	$post['views']=mt_rand(0,9999);
	$post['published']=$rand[mt_rand(0,1)];
	$post_data=file_get_contents('https://jsonplaceholder.typicode.com/posts/'.$post['id']);
	$post_data=json_decode($post_data,1);
	$post_data['views']=mt_rand(0,9999);
	$post_data['published']=$rand[mt_rand(0,1)];
	file_put_contents('./json/posts/'.$post['id'].'.json',json_encode($post_data));
}
file_put_contents('./json/posts.json',json_encode($posts));