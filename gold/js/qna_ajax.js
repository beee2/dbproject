$(function(){
  let url="/gold/data/ajax/qna_ajax.php"
  $.get(
    url,
    function(qna_data){
      $(".qnaList").append(qna_data);
    }
  )
});


//https://www.w3schools.com/jquery/ajax_get.asp
// $("button").click(function(){
//   $.get("demo_test.asp", function(data, status){
//     alert("Data: " + data + "\nStatus: " + status);
//   });
// });