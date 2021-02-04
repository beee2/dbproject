<?php
  $app_delete_num=$_REQUEST['num']; //GET보다 REQUEST가 갱신이 좀더빠름

  include $_SERVER['DOCUMENT_ROOT']."/gold/php_process/connect/db_connect.php";
  $sql="delete from gold_app where GOLD_APP_num=$app_delete_num";

  mysqli_query($dbConn, $sql);

  $sql="select * from gold_app order by GOLD_APP_num desc";
  
  $app_result = mysqli_query($dbConn, $sql);
  
  $arr_result = array();

  while($app_row = mysqli_fetch_array($app_result)){
    array_push($arr_result, array(
      'appnum' => $app_row['GOLD_APP_num'],
      'apptitle' => $app_row['GOLD_APP_tit'],
      'appser' => $app_row['GOLD_APP_ser'],
      'appdes' => $app_row['GOLD_APP_des'],
      'appmain' => $app_row['GOLD_APP_img'],
      'appthumb' => $app_row['GOLD_APP_thumb'],
      'appclient' => $app_row['GOLD_APP_cli'],
      'appreg' => $app_row['GOLD_APP_reg']
    ));
  }

  //make json file
  file_put_contents($_SERVER['DOCUMENT_ROOT'].'/gold/data/json/app.json', json_encode($arr_result, JSON_PRETTY_PRINT));

  // 삭제과정은 데이터베이스는 바로 지워질수있으나 제이슨은 그러지못하기때문에 삭제 후 테이블을 다시 새로읽어줘야 갱신됨 //

  echo "
    <script>
      alert('삭제가 완료되었습니다.');
      location.href='/gold/pages/app/app.php';
    </script>
  ";
?>