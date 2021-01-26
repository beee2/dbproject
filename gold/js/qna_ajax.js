//page click event

$(function(){
  let url="/gold/data/ajax/qna_ajax.php";
  $.get(
    url,
    {page:1},
    function(qna_data){
      $(".qnaList").html(qna_data);
    }
  );
});

let currentPage=1;
function getPage(no){
  let url="/gold/data/ajax/qna_ajax.php";
  $(".PgNum").removeClass("active");
  $(".PgNum").eq(no-1).addClass("active");
  $.get(
    url,
    {page:no},
    function(qna_data){
      $(".qnaList").html(qna_data);
      currentPage=no;
    }
  );
}

function goNext(){
  let pageLength=$(".PgNum").length;
  if(currentPage==pageLength){
    getPage(pageLength);
  }
  else{
    getPage(currentPage+1);
  }
}

function goPrev(){
  if(currentPage===1){
    getPage(1);
  }
  else{
    getPage(currentPage-1);
  }
}

function goFirst(){
  //let pageLength=$(".PgNum").length;
  if(currentPage>1){
    getPage(1);
  }
}

function goLast(){
  let pageLength=$(".PgNum").length;
  if(currentPage!=pageLength){
    getPage(pageLength);
  }
  else{
    getPage(currentPage);
  }
}

$(".PgNum").eq(0).trigger("click");


//https://www.w3schools.com/jquery/ajax_get.asp
// $("button").click(function(){
//   $.get("demo_test.asp", function(data, status){
//     alert("Data: " + data + "\nStatus: " + status);
//   });
// });