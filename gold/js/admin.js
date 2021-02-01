$(function(){
  //admin page main tabs
  const adminTab=function(){ //익명함수
    $(".adminTabs button").click(function(){

      const tabIndex=$(this).index();

      $("this").removeClass("active"); //클래스 추가 
      $(".adminPanel").eq(tabIndex).addClass("active");

      $(".adminPanel").hide();
      $(".adminPanel").eq(tabIndex).show();
    });
    $(".adminTabs button").eq(0).trigger("click");
  };
  adminTab();
});