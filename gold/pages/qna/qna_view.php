<?php
  $qna_view_num = $_GET['num'];

  include $_SERVER['DOCUMENT_ROOT']."/gold/php_process/connect/db_connect.php";
  $sql="select * from gold_qna where GOLD_QNA_num=$qna_view_num";

  $result=mysqli_query($dbConn, $sql);
  $row=mysqli_fetch_array($result);

  $qna_view_num=$row['GOLD_QNA_num'];
  $qna_view_id=$row['GOLD_QNA_id'];
  $qna_view_tit=$row['GOLD_QNA_tit'];
  $qna_view_con=$row['GOLD_QNA_con'];
  $qna_view_reg=$row['GOLD_QNA_reg'];
  $qna_view_hit=$row['GOLD_QNA_hit'];

  //echo $design_detail_tit, $design_detail_ser, $design_detail_des, $design_detail_img1, $design_detail_img2, $design_detail_thumb, $design_detail_cli, $design_detail_reg;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gold</title>

    <!-- font awesome link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- main style css link -->
    <link rel="stylesheet" href="/gold/css/style.css" />

    <!-- design css link -->
    <link rel="stylesheet" href="/gold/css/design_web_app.css">

    <!-- qna css link -->
    <link rel="stylesheet" href="/gold/css/qna.css">

    <!-- animation css link -->
    <link rel="stylesheet" href="/gold/css/animation.css" />

    <!-- media query style css link -->
    <link rel="stylesheet" href="/gold/css/media.css" />
  </head>
  <body>
    <div class="wrap">
      
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/header.php" ?>

      <section class="contents qna hasTitle">
        <div class="center">
          <!--view title -->
          <div class="title">
            <h2>View Inquiry</h2>
            <div class="subTit">
              <span class="subLine"></span>
              <a href="#" class="subLink">View More Details</a>
            </div>
          </div>
          <!-- end of view title -->

          <div class="qnaBoxes qnaView">
            <div class="writerInfo">
              <h3><?=$qna_view_tit?></h3>
              <p>Posted By <?=$qna_view_id?> / No. <?=$qna_view_num?></p>
            </div>
            <!-- detailInfo -->
            <div class="writerDesc">
              <p><?=$qna_view_con?></p>
            </div>
              <!-- detailDesc -->
          </div>
        

            

          </div> 

        </div>
        <!-- end of center -->
  
      </section>

      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/about.php" ?>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/footer.php" ?>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/gold/js/custom.js"></script>
    <script src="/gold/js/web_design_page.js"></script>
    
  </body>
</html>
