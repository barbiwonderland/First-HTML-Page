$(".galeria img").click(function(e){
    var img = e.target.src;
    var modal = '<div class="modal"><img src="'+ img + '" class="modalimg"><div class="modalboton" id= "modalboton">X</div></div>'
    $("body").append( modal)
$('#modalboton').click(function(){
$('.modal').remove()
})

});
$(dcocument).keyup(function(e){
    if (e.which==27) {
   $('.modal') .remove();
}
})
