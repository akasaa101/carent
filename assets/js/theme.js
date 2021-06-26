$(document).ready(function() {
  $(function(){
        var a = 0;
        $('.m-menu').click(function(){
            if ( a == 0 ){
                a++;
            } else {
                a = 0;
            }
            $(this).next('ul').slideToggle(300);
        });
});
$(function() {
      $('[data-toggle="datepicker"]').datepicker({
        autoHide: true,
        zIndex: 2048,
      });
    });

});

$(function() {
    $( ".datepicker-input" ).datepicker();
  });    



  function openInput() { 
    var x = document.getElementsByClassName("kurumsal-input"); 
    var i;  
    if(document.getElementById("kurumsal-check").checked == true) {    
    for (i = 0; i < x.length; i++) {
          x[i].style.display = "block";     
    } 
    } else {    
        for (i = 0; i < x.length; i++) {    
          x[i].style.display = "none"; 
               }     }
     }



var dropdown = "kurumsaldrop";
function openDropdown(a) {
    document.getElementById(a).classList.toggle("show");
  dropdown = a;
}
window.onclick = function(e) {
    if (!e.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-r");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
      openDropdown.classList.remove('show');
      }
    }
    }
}