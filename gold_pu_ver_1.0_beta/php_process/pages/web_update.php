<?php //수정필요
  $web_title = nl2br($_REQUEST['web_title']);
  $web_title = addslashes($web_title);
  $web_serial = $_REQUEST['web_serial'];
  $web_client = $_REQUEST['web_client'];
  $web_domain = $_REQUEST['web_domain'];
  $web_desc = nl2br($_REQUEST['web_desc']);
  $web_desc = addslashes($web_desc);
  $regist_day =  date("Y-m-d");

  //web page image upload directory
  $img_upload_dir = $_SERVER['DOCUMENT_ROOT'].'/gold/data/web_page/pc/';
  $mobile_upload_dir = $_SERVER['DOCUMENT_ROOT'].'/gold/data/web_page/mobile/';
  $thumb_upload_dir = $_SERVER['DOCUMENT_ROOT'].'/gold/data/web_page/thumb/';

  //main image
 $main_name = $_FILES['main']['name'];
 $main_tmp_name = $_FILES['main']['tmp_name'];
 $main_error = $_FILES['main']['error'];

 //mobile image
 $mobile_name = $_FILES['mobile']['name'];
 $mobile_tmp_name = $_FILES['mobile']['tmp_name'];
 $mobile_error = $_FILES['mobile']['error'];

 //thumbnail image
 $thumbnail_name = $_FILES['thumbnail']['name'];
 $thumbnail_tmp_name = $_FILES['thumbnail']['tmp_name'];
 $thumbnail_error = $_FILES['thumbnail']['error'];  


  if($main_name && !$main_error){
    $uploaded_main_file = $img_upload_dir.$main_name;
    if(!move_uploaded_file($main_tmp_name, $uploaded_main_file)){
      echo "
        <script>
          alert('사진이 업로드 되지 않았습니다!');
        </script>
      ";
      exit;
    }
  } else {
    $main_name = '';
  }

  //mobile image upload
  if($mobile_name && !$mobile_error){
    $uploaded_mobile_file = $mobile_upload_dir.$mobile_name;
    if(!move_uploaded_file($mobile_tmp_name, $uploaded_mobile_file)){
      echo "
        <script>
          alert('사진이 업로드 되지 않았습니다!');
        </script>
      ";
      exit;
    }
  } else {
    $mobile_name = '';
  }

  //thumbnail image upload
  if($thumbnail_name && !$thumbnail_error){
    $uploaded_thumbnail_file = $thumb_upload_dir.$thumbnail_name;
    if(!move_uploaded_file($thumbnail_tmp_name, $uploaded_thumbnail_file)){
      echo "
        <script>
          alert('사진이 업로드 되지 않았습니다!');
        </script>
      ";
      exit;
    }
  } else {
    $thumbnail_name = '';
  }

  //database connect
  include $_SERVER['DOCUMENT_ROOT']."/gold/php_process/connect/db_connect.php";

  $sql="update gold_web set(
    GOLD_WEB_tit='$web_title',
    GOLD_WEB_ser='$web_serial',
    GOLD_WEB_des='$web_desc',
    GOLD_WEB_img='$main_name',
    GOLD_WEB_mimg='$mobile_name',
    GOLD_WEB_thumb='$thumbnail_name',
    GOLD_WEB_cli='$web_client',
    GOLD_WEB_reg='$regist_day',
    GOLD_WEB_dom='$web_domain' where GOLD_WEB_num=$web_result_num";

    mysqli_query($dbConn, $sql);

  echo "
    <script>
      alert('수정이 완료되었습니다.');
      location.href='/gold/pages/web/web.php';
    </script>
  ";


?>