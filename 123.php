<?php

	function mypost($url, $data)
	{
        $postdata = http_build_query($data);
        $opts = array('http' =>
						array(
								'method'  => 'POST',
								'header'  => 'Content-type: application/x-www-form-urlencoded',
								'content' => $postdata
							)
        );
        $context = stream_context_create($opts);
        file_get_contents($url, false, $context);
    }
	
	$url="http://www.riba2534.ren/wp-comments-post.php";
	//$url="http://blog.codedream.ren/upload//post.php?act=post_comment&id=7&comment_id=null";
	$post_data['author']='lzq';
	$post_data['content']='李朝强 到此一游!!!';
	$post_data['email']='lzq@qq.com';
	$post_data['submit']='发表评论';
	$post_data['comment_post_ID']='43';
	$post_data['comment_parent']='0';
	
	for($i = 0; $i <1000 ;$i++)
	{
		echo $i.'</br>';
		mypost($url,$post_data);
	}
	echo "OK";
?> 
