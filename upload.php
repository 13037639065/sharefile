
<?php
	include "data/conf.php";
	include "template/head.php";
	include "template/commen.php";
	?>
	<div class="starter-template">
	<?php
	//if()
	if($_FILES["file"]["error"] > 0)
	{
		echo "Error:" . $_FILES["file"]["error"] . "<br />";
	}
	else
	{
		//$filename=iconv("gb2312","UTF-8", $_FILES["file"]["name"]);
		$filename=$_FILES["file"]["name"];
		if($filename==false) 
		{
			echo "转码失败</br>";
		}
		else 
		{
			echo $filename."</br>";
			$path = "D:\\phpStudy\\WWW\\filelist\\".iconv("UTF-8","gb2312",$filename);
			if(move_uploaded_file($_FILES["file"]["tmp_name"],$path))
			{
				echo "Upload: " . $filename . "<br />";
				echo "Type: " . $_FILES["file"]["type"] . "<br />";
				echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
				echo "上传文件 成功";
			}
			else
			{
				echo "上传失败</br>";
			}
		}
	}
	?>
	</div>
	</br>
<?php
	include "template/footer.php";
?>
