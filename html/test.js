function main() {
  $(".signup").hide();
  $(".signupButton").on('click',function(){
    $(".signup").show();
  });

}

$(document).ready(main);