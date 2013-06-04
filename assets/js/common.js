$(document).ready(function(){
    var current = $("#about");
    
    function swap(curent, data) {
        next = $("<div>" + data + "</div>").css("opacity",0).addClass("box slide");
        current.animate({opacity: 0}, 400, "swing", function() {
            $(this).hide().parent().append(next);
            next.show().animate({opacity: 1});
            }
        );
        return next;
    }
    
	$('#haverbeke').click(function(){
		$.get('haverbeke.html',function(data){
            current = swap(current, data);
		});
	});
	$('#cruse').click(function(){
		$.get('cruse.html',function(data){
            current = swap(current, data);
		});
	});
	$('#devlin').click(function(){
		$.get('devlin.html',function(data){
            current = swap(current, data);
		});
	});
});
