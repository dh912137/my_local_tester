<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MyTest</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>        
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js" type="text/javascript" charset="utf-8" async defer></script>

</head>
<body>
    <header>
        <!-- 選單區 -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="MyTest.php">MyTester</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="MyTest.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" link="1203-艾瑪絲活動頁+link+form%20required/index.html" onclick="check($(this).attr('link'))">1203-艾瑪絲活動頁</a>
                </li> -->
                <!-- <li class="nav-item">
                  <a class="nav-link" link="googlemap.php" onclick="check($(this).attr('link'))">GoogleMap</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" link="phpexcel_chart.php" onclick="check($(this).attr('link'))">PHPExcel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" link="ABCcar.php" onclick="check($(this).attr('link'))">ABCcar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" link="Uniqlo.php" onclick="check($(this).attr('link'))">UNIQLO</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" link="pixnet.php" onclick="check($(this).attr('link'))">pixnet</a>
                </li> -->
              </ul>
              <div class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" id="file_search" name="file_search" type="text" placeholder="Search /var/www/html/" aria-label="Search" onchange="ajax_search(this)" onclick="$(this).val('')">
              </div>
            </div>
          </nav>
    </header>
    <div class="container" style="padding:60px 15px;">
        <form id="cover_form" class="form-horizontal" method="post" accept-charset="utf-8">
            <div class="row">
                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="form-group col-md-6">
                    <label class="col-sm-2 control-label">UDN_cate</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="udn_cate" onclick="reset_all_input();" onchange="ajax_submit(this)">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="" class="col-sm-2 control-label">parse_url</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="url_parse" onclick="reset_all_input();" onchange="ajax_submit(this)">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="" class="col-sm-2 control-label">urlencode</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="url_encode" onclick="reset_all_input();" onchange="ajax_submit(this)">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="" class="col-sm-2 control-label">urldecode</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="url_decode" onclick="reset_all_input();" onchange="ajax_submit(this)">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="" class="col-sm-2 control-label">json_encode</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="json_encode" onclick="reset_all_input();" onchange="ajax_submit(this)">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="" class="col-sm-2 control-label">json_decode</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="json_decode" onclick="reset_all_input();" onchange="ajax_submit(this)">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="" class="col-sm-2 control-label">htmlentities</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="html_encode" onclick="reset_all_input();" onchange="ajax_submit(this)">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="" class="col-sm-2 control-label">html_entity_decode</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="html_decode" onclick="reset_all_input();" onchange="ajax_submit(this)">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="" class="col-sm-2 control-label">base64_encode</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="base64_encode" onclick="reset_all_input();" onchange="ajax_submit(this)">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="" class="col-sm-2 control-label">base64_decode</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="base64_decode" onclick="reset_all_input();" onchange="ajax_submit(this)">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="" class="col-sm-2 control-label">md5</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="md5" onclick="reset_all_input();" onchange="ajax_submit(this)">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="" class="col-sm-2 control-label">sql_string_replace</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="sql_string_replace" onclick="reset_all_input();" onchange="ajax_submit(this)">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="" class="col-sm-2 control-label">row_convert_json</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="row_convert_json" name="row_convert_json" rows="1" style="overflow:auto;resize:none" onclick="reset_all_input();" onchange="explode_row(this)"></textarea>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="" class="col-sm-2 control-label">time_diff</label>
                    <div class="row" style="padding-left:15px;">
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="start_time" onclick="reset_all_input();" placeholder="start time">
                        </div> ~ 
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="end_time"  onchange="ajax_submit($('#cover_form'))" placeholder="end time">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="form-group col-md-12">
                <label for="" class="col-sm-2 control-label">result</label>
                <div class="col-md-12">
                    <textarea id="result" class="form-control" style="height:35vh;width:95%;"></textarea>
                </div>
            </div>
        </div>        
    </div>

    <!-- Test Area -->
    <!-- <form id="sectionForm" method="post">
        <h3>Please select at least one item</h3>

        <p><input type="checkbox" name="section" value="sports">Sports</p>
        <p><input type="checkbox" name="section" value="business">Business</p>
        <p><input type="checkbox" name="section" value="health">Health</p>
        <p><input type="checkbox" name="section" value="society">Society</p>        
        <p><input type="submit" value="Submit" id="sumit"></p>
    </form> -->
    <!-- Test Area End -->

    <script >
        // (function() {
        
            // console.log(selector);
            // const form = document.querySelector('#sectionForm');
            const checkboxes = document.querySelectorAll('input[type=checkbox]');
            // const checkboxes = document.querySelectorAll(selector);
            // const checkboxLength = checkboxes.length;
            const firstCheckbox = checkboxes.length > 0 ? checkboxes[0] : null;

            function init() {
                if (firstCheckbox) {
                    for (let i = 0; i < checkboxes.length; i++) {
                        checkboxes[i].addEventListener('change', checkValidity);
                    }

                    checkValidity();
                }
            }

            function isChecked() {
                for (let i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].checked) return true;
                }

                return false;
            }

            function checkValidity(err_msg="至少需選擇一項") {
                const errorMessage = !isChecked() ? err_msg : '';
                checkboxes[0].setCustomValidity(errorMessage);
                // console.log(!isChecked());
            }

            init();

        // })();

        var testObjcet = [];

        testObjcet.push({google_cy_src:'8161556.fls.doubleclick.net/activityi;src=8161556;type=invmedia;cat=zknreop5;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=',is_new_double_click_tag:true});
        testObjcet.push({google_cy_src:'www.googletagmanager.com/gtag/js?id=DC-9750924',is_new_double_click_tag:true});

        // javascript way 
        /*testObjcet.forEach( function(value, index){
            console.log(value.google_cy_src);
            console.log(value.is_new_double_click_tag);
        });*/

        // javascript ES6 way
        /*Object.keys(testObjcet).map(function(objKey, index){
            var value = testObjcet[objKey];
            console.log(value);
        });*/

        /*Object.keys(testObjcet).map(function(objKey, index){
            var echo = testObjcet[objKey];
            // console.log(echo);

            if(echo.google_cy_src != ''){
                if(echo.is_new_double_click_tag){
                    console.log('new');
                }
                else{
                    console.log('old');
                }
            }
            else{
                console.log('fail');
            }
        });*/
        

        // function adjust_all_datatable(){
        //     var tables = $.fn.dataTable.tables();
        //     $(tables).DataTable().fixedHeader.adjust();
        // }

        $(document).ready(function() {
            $("#result").dblclick(function(){
                window.getSelection().toString();
                document.execCommand('copy');
            });
        });

        function ajax_submit(form){
            $.ajax({
                type: "POST",
                url: "MyAjax.php",
                data: $(form).serialize(),
                dataType: "text",
                success: function(msg)
                {
                    $("#result").val(msg);
                    // $("#result").focus();
                }
            });
        }

        function ajax_search(search){
            $.ajax({
                type: "POST",
                url: "MyAjax.php",
                data: $(search).serialize(),
                dataType: "text",
                success: function(msg)
                {
                    $("#result").val(msg);
                    // $("#result").focus();
                }
            });
        }

        function check(url){
            let clicked = confirm("你確定要執行嗎？");

            if(clicked){
                 window.open(url, '_blank');
            }
        }

        function explode_row(textarea){
            if(textarea != ""){
                let row_list = JSON.stringify($(textarea).val().split("\n"));
                $("#result").val(row_list);
            }
        }

        function reset_all_input(){
            $('input[class=form-control],#row_convert_json').val('');
        }

    </script>
</body>
</html>

<?php


/*$run = [];


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

    foreach($run as $each_cate){
        $tmp_cat = array();
        $tmp_cat = array_shift(get_category_name($file_contect,$each_cate));
        echo $tmp_cat[0];
        echo "<br>";
    }
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
}*/

/*function time_diff($start_time, $end_time){
    $result = FALSE;

    if($start_time != "" AND $end_time != ""){
        $diff = strtotime($end_time) - strtotime($start_time);

        $diff_string = "";
        $diff_array = [];

        $day = floor(($diff/3600)/24);
        if($day > 0 ) array_push($diff_array, "$day Days");

        $hour = floor(($diff/3600)%24);
        if($hour > 0 ) array_push($diff_array, "$hour Hours");

        $min = floor(($diff%3600)/60);
        if($min > 0 ) array_push($diff_array, "$min Mins");

        $sec = floor((($diff%3600)%60));
        if($sec > 0 ) array_push($diff_array, "$sec Secs");

        $diff_string = implode(" ", $diff_array);

        $result = $diff_string;
    }

    return $result;
}*/


/*function mysql_query_cmd($db, $sql, $other_cmd=""){
    $result = array();

    if(is_array($db) AND $sql != ""){
        $cmd = "mysql -C -u ".$db["username"]." --password=\"".$db["password"]."\" -h ".$db["host"]." --database=\"".$db["dbname"]."\" -e \"".$sql."\" ".$other_cmd;
        // echo $cmd."\n";
        exec($cmd, $cmd_result);

        if(!empty($cmd_result)){
            # 取出第一列的欄位名稱
            $column_name = explode("\t", array_shift($cmd_result));

            foreach($cmd_result as $each_row){
                $row_array = explode("\t", $each_row);
                array_push($result, array_combine($column_name, $row_array));
            }
        }
        unset($cmd_result);
    }

    return $result;
}*/
    
?>