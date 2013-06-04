$(document).ready(function(){
    var current = $("#about");
    $(window).bind('popstate',  
        function(event) {
            console.log(event.currentTarget.location.pathname.replace("/",""));
            $.get(event.currentTarget.location.pathname.replace("/","") + '.html',function(data){
                current = swap(current, data);
            });
        });
    function swap(curent, data, name) {
        if(name != undefined) {
            window.history.pushState(document.state, name, "/" + name);
        }
        next = $("<div>" + data + "</div>").css("opacity",0).addClass("box slide");
        current.hide('slide', {}, 400, function() {
            $(this).parent().append(next);
            next.show().animate({opacity: 1});
            }
        );
        return next;
    }
    
	$('#haverbeke').click(function(){
		$.get('haverbeke.html',function(data){
            current = swap(current, data, "haverbeke");
		});
	});
	$('#cruse').click(function(){
		$.get('cruse.html',function(data){
            current = swap(current, data, "cruse");
		});
	});
	$('#devlin').click(function(){
		$.get('devlin.html',function(data){
            current = swap(current, data, "devlin");
		});
	});
});
