<?php 
	include "data/conf.php";
	include "template/head.php";
	include "template/commen.php";
?>
<div class="starter-template">
	<form action="upload.php" method="post" enctype="multipart/form-data" charset="gb2312" align="center">
	<label for="file">Filename:</label>
	<input type="file" name="file" id="file" />
	</br> 
	<input type="submit" name="submit" value="上传文件"/>
	</form>
</div>