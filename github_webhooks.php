<?php 
$url='';

function array2string($data){

    $log_a = "";
    foreach ($data as $key => $value) {
		
		if(is_array($value)) {
			if(strpos($key,'_link')===false){
				$log_a .= "[b]".$key."[/b]"."\n". array2string($value). "\n";
			}
		} else {
			if(strpos($key,'url')===false && strpos($key,'vatar')===false && $value!=''){
				$log_a .= "[b]".$key."[/b]=".$value."\n";
				if($key=='compare' && $url==''){
					$url = $value;
				}
			} else if($key=='html_url' && $url==''){
				$url = $value;
			}
		}
    }
    return $log_a;
}

if(isset($_GET['k'])){

	$private_key = filter_input(INPUT_GET, 'k', FILTER_SANITIZE_STRING);
	$icon = filter_input(INPUT_GET, 'i', FILTER_SANITIZE_STRING);
	$sound = filter_input(INPUT_GET, 's', FILTER_SANITIZE_STRING);
	$vibration = filter_input(INPUT_GET, 'v', FILTER_SANITIZE_STRING);
	
	foreach (getallheaders() as $name => $value) {
		if($name=='X-Github-Event'){
			$title = 'GitHub-Event: '.str_replace('_',' ',$value);
			$url_title = 'Open '.str_replace('_',' ',$value);
		}
	}
	
	$message = array2string(json_decode($_POST['payload'],true));
			
	if($title=='') { $title = 'GitHub Notification';}
	if($message=='') { $message = 'no content ';}
	
	$pushurl = 'https://www.pushsafer.com/api';
	$data = array(
		'k' => $private_key,
		'm' => $message,
		't' => $title,
		'i' => $icon,
		's' => $sound,
		'v' => $vibration,
		'u' => $url,
		'ut' => $url_title
	);
	$options = array(
		'http' => array(
		'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		'method'  => 'POST',
		'content' => http_build_query($data)
		)
	);
	
	$context  = stream_context_create($options);
	$result = file_get_contents($pushurl, false, $context);	
	
	echo $result;
	
} else {

	echo '{"status":0,"error":"invalid key"}';
	
}
?>