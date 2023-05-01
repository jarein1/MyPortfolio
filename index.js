
//  Click Button Animation
function openNav() {
    document.getElementById("myNav").style.height = "100%";
    document.getElementById("span").style.display="none";
  }
  
  function closeNav() {
    document.getElementById("myNav").style.height = "0";
    document.getElementById("span").style.display="";
  }

  
  //Text Drop Animation
  $(document).ready(function(){
    $('#text-drop').mouseleave(function(){
      $(this).removeClass('clicked');
    }).click(function(){
      $(this).addClass('clicked').html($(this).html());
    });
  });