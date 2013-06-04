$(document).ready(function(){
	//$('#titleText').show("blind",1000)//.effect('blind',{direction:"left"},400,)
    var current = $("#placeholder");
    $(window).bind('popstate',  
        function(event) {
            path = event.currentTarget.location.pathname.replace("/","");
            if(path == "" || event.currentTarget == undefined) {
                path = "index";
            }
            $.get("/includes/" + path + '.html',function(data){
                current = swap(current, data);
            });
        });
    function swap(curent, data, name) {
        var options = {direction: "left"}
        if(name != undefined) {
            window.history.pushState(document.state, name, "/" + name);
        } else {
            var options = {direction: "right"}
        }
        next = $("<div>" + data + "</div>").css("opacity",0).addClass("box slide");
        current.hide('slide', options, 400, function() {
            $(this).parent().append(next);
            next.show().animate({opacity: 1});
            }
        );
        return next;
    }
	$('#haverbeke').click(function(){
		$.get('/includes/haverbeke.html',function(data){
            current = swap(current, data, "haverbeke");
		});
	});
	$('#cruse').click(function(){
		$.get('/includes/cruse.html',function(data){
            current = swap(current, data, "cruse");
		});
	});
	$('#devlin').click(function(){
		$.get('/includes/devlin.html',function(data){
            current = swap(current, data, "devlin");
		});
	});
});
