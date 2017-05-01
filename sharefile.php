

<div class="starter-template">
<table class="table table-bordered">
<?php
	include "data/conf.php";
	include "template/head.php";
	include "template/commen.php";
?>

<thead>
    <tr>
      <th>文件名</th>
      <th>下载按钮</th>
    </tr>
  </thead>
	<tbody>
<?php
	
	function get_url($filename)
	{
		$res="filelist/".$filename;
		return $res;
	}
	function get_bnt($value,$name,$type)// 1 down  2 普通
	{
		if($type==2) $res="<a  href=\"".$name."\"><button type=\"button\" class=\"btn btn-success\">".$value."</button></a>";
		else $res="<a download=\"\" href=\"".$name."\"><button type=\"button\" class=\"btn btn-success\">".$value."</button></a>";
		return $res;
	}
	$filepath = "filelist";
    $filelist = scandir($filepath);
    for( $i =0;$i < count($filelist) ;$i++)
    {
		$file_temp_name=iconv("gb2312","UTF-8",$filelist[$i]);
		if($filelist[$i]=="."||$filelist[$i]=="..") continue;
		echo '<tr>';
		echo '<td>'.$file_temp_name.'</td>';
     	echo "<td>".get_bnt('点击下载',get_url($file_temp_name),1)."</td>";
      	echo "</tr>";
    }
	
?>
</tbody>
</table>
<?php
	echo get_bnt("上传文件","choosefile.php",2);
?>
</div>
<?php
	include "template/footer.php";
?>
