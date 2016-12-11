<?php
$ds = DIRECTORY_SEPARATOR;
$storeFolder = 'uploads';
 
if (!empty($_FILES) && !empty($_POST["user"])) {
	
	if(array_pop(explode(".", strtolower($_FILES['file']['name']))) == 'csv'){
	
		$tempFile = $_FILES['file']['tmp_name'];
		
		$targetPath = dirname( __FILE__ ).$ds.$storeFolder.$ds;
		$targetFile =  $targetPath.$_FILES['file']['name'];

		move_uploaded_file($tempFile,$targetFile);
		
		exec("cat ".$targetFile." | awk -F',' '{print \"1 1:\" $4 \" 2:\" $5}' | grep -v beta > /home/brain/public_html/uploads/test");
		exec("cat /home/brain/public_html/uploads/test | grep -v \"1 1: 2:\" > /home/brain/public_html/uploads/clean");
		
		if($_POST["user"] == 't'){
			exec("./svm-predict /home/brain/public_html/uploads/clean t.model /home/brain/public_html/uploads/predict.out", $output, $error);
		}else if($_POST["user"] == 'w'){
			exec("./svm-predict /home/brain/public_html/uploads/clean w.model /home/brain/public_html/uploads/predict.out", $output, $error);
		}else if($_POST["user"] == 'g'){
			exec("./svm-predict /home/brain/public_html/uploads/clean g.model /home/brain/public_html/uploads/predict.out", $output, $error);
		}else{
			
		}
		
		echo $output[0].'<br/>';
		exec("awk '{sum+=$1} END { print \"Average = \",sum/NR}' /home/brain/public_html/uploads/predict.out", $Average, $error);

		echo $Average[0].'<br/>';
		
		$Aver = floatval(preg_replace("/[^-0-9\.]/","",$Average[0]));
		
		if($Aver > 0){
			echo "<h1>로그인 성공</h1>";
		}else{
			echo "<h1>로그인 실패</h1>";
		}

	}
}

function toFloats($array)
{
    return array_map('floatval', $array);
}
?> 