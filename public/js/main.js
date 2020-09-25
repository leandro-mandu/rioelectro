//var url = 'localhost'; //controller
//var myModal = new bootstrap.Modal(document.getElementById('modal_aguarde'));




$(document).ready(function(){
  $(".btn_rioelectro_play").show();
  $(".audio_rioelectro_player").hide();
  //myModal.show();
//  myModal.hide();
//alert("ok");
$("#rioelectro_player")[0].play();
//$("#rioelectro_player").trigger('play');

$(".btn_rioelectro_play").click(function(){
  $("#rioelectro_player")[0].play();
  $(".audio_rioelectro_player").show();
  $(".btn_rioelectro_play").hide();
})
/*
$("#div_nav a").click(function(e){
  e.preventDefault();
  alert("click em "+$(this).text());
  window.history.pushState({ url: $(this).attr('href') }, $(this).attr('title'), $(this).attr('href'));
});
$(window).bind("popstate", function(e) {
  $('#div_content').load(e.state.url);
});

/*
$('#a_agenda')​​.click(function(e){
  e.preventDefault();
  window.history.pushState({url: "" + $(this).attr('href') + ""}, $(this).attr('title') , $(this).attr('href'));
 });​

$(window).bind("popstate", function(e) {
  $('#my-navigation-container').load(e.state.url);
});
*/
});
