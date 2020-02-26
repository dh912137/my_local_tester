<?php 
# file search
if(!empty($_POST["file_search"])){
	$cmd = "ls /var/www/html/*".trim($_POST["file_search"])."*";
	exec($cmd, $result);

	print_r($result);
	// $file_list = glob('C:/AppServ/www/*'.$_POST["file_search"].'*');
	// // print_r($file_list);
	// if(!empty($file_list)){
	// 	foreach($file_list as $each_file){
	// 		echo $each_file."\n";
	// 	}
	// }
}	

# url_parse
if(!empty($_POST["url_parse"])){
    $url_parse = parse_url($_POST["url_parse"]);
    print_r($url_parse);
    echo "path:\n";
    print_r(explode("/", $url_parse['path']));

    if(isset($url_parse['query'])){
    	echo "query:\n";
    	print_r(explode("&", $url_parse['query']));
    }
}

# url encode
if(!empty($_POST["url_encode"])) echo urlencode($_POST["url_encode"]);

# url decode
if(!empty($_POST["url_decode"])) echo urldecode($_POST["url_decode"]);

# json encode
if(!empty($_POST["json_encode"])) echo json_encode($_POST["json_encode"]);

# json decode
if(!empty($_POST["json_decode"])) print_r(json_decode($_POST["json_decode"], TRUE));

# html encode
if(!empty($_POST["html_encode"])) echo htmlentities($_POST["html_encode"]);

# html decode
if(!empty($_POST["html_decode"])) echo html_entity_decode($_POST["html_decode"]);

# base64 encode
if(!empty($_POST["base64_encode"])) echo base64_encode($_POST["base64_encode"]);

# base64 decode
if(!empty($_POST["base64_decode"])) echo base64_decode($_POST["base64_decode"]);

# md5 endoce
if(!empty($_POST["md5"])) echo md5($_POST["md5"]);

# sql_str_replace
if(!empty($_POST["sql_string_replace"])) echo sql_string_replace($_POST["sql_string_replace"]);

# time_diff
if(!empty($_POST["start_time"]) AND !empty($_POST["end_time"])) echo time_diff($_POST["start_time"], $_POST["end_time"]);


# udn_cate
if(!empty($_POST["udn_cate"])){
	# udn 新CymCat讀取
	$cate_file = "CymCate.txt";
	$cate_array = array();

	if(file_exists($cate_file)){
	    $file_to_open = fopen($cate_file, "r");

	    if($file_to_open != NULL){ 

	        while(!feof($file_to_open)){
	            $file_cate_id = "";
	            $file_row = array();
	            $file_row = explode("|##|",fgets($file_to_open));

	            $file_cate_id = trim(substr($file_row[0],2));
	            $cate_levels = count(explode("_",$file_cate_id));

	            if( $file_cate_id != "") {
	                $file_contect[$file_cate_id]["CategoryID"]   =  $file_cate_id;
	                $file_contect[$file_cate_id]["CategoryName"] =  empty($change_name_array[$file_cate_id])? $file_row[1]:$change_name_array[$file_cate_id]["new_cat"];
	                $file_contect[$file_cate_id]["ParentID"]     =  trim(substr($file_row[2],2));
	                $file_contect[$file_cate_id]["Is_End"]       =  $file_row[3];
	                $file_contect[$file_cate_id]["type"]         =  trim($file_row[4]);
	                $file_contect[$file_cate_id]["levels"]       =  $cate_levels;
	            }
	        }
	        fclose($file_to_open);
	        unset($file_row);
	    }

	    $cate_array = get_category_name($file_contect,$_POST["udn_cate"]);

		foreach($cate_array as $k=>$v){
			$cat_index = $k+2;
			$cate_type = $v[1]=="F"?"功能類別":"活動類別";

			echo "類別".$cat_index." [".$cate_type."] ".$v[0]."\n";
		}
	}
	unset($cate_array);
}

function get_category_name($file_contect = array(),$this_product_category = ""){
    $cate_explode_array = $cate_array = array();
    $level_count = 0;

    $CategoryID = trim($this_product_category);

    $cate_explode_array = explode("_",$this_product_category);
    $level_count = count($cate_explode_array) - 1;                                    

    do{
        if(!empty($file_contect[$CategoryID])){
            $pass = TRUE;
            $cate_array[$level_count] = array($file_contect[$CategoryID]["CategoryName"],trim($file_contect[$CategoryID]["type"]));

            $CategoryID =  $file_contect[$CategoryID]["ParentID"];
        }else{
            $pass = FALSE;
        }
        $level_count --;
    }while($CategoryID != "" AND $pass);

    return $cate_array;
}

function sql_string_replace( $str ){
    $str = str_replace( "\\", "\\\\", $str );
    $str = str_replace( "`", "\`", $str );
    $str = str_replace( ",", "\,", $str );
    $str = str_replace( "'", "\'", $str );
    $str = str_replace( '"', '\"', $str );
    $str = str_replace( '(', '\(', $str );
    $str = str_replace( ')', '\)', $str );
        
    return $str;
}

function time_diff($start_time, $end_time){
    $result = FALSE;

    if($start_time != "" AND $end_time != ""){
        $diff = strtotime($end_time) - strtotime($start_time);

        $diff_string = "";
        $diff_array = [];

        $day = floor(($diff/3600)/24);
        if($day > 0 ) array_push($diff_array, "$day 天");

        $hour = floor(($diff/3600)%24);
        if($hour > 0 ) array_push($diff_array, "$hour 小時");

        $min = floor(($diff%3600)/60);
        if($min > 0 ) array_push($diff_array, "$min 分鐘");

        $sec = floor((($diff%3600)%60));
        if($sec > 0 ) array_push($diff_array, "$sec 秒");

        $diff_string = implode(" ", $diff_array);

        $result = $diff_string;
    }

    return $result;
}

# end of normal function ========
?>