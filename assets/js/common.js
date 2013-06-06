$(document).ready(function(){
    var current = $("#placeholder");
    $(window).bind('popstate',  
        function(event) {
            path = event.currentTarget.location.pathname.split("/")[-1]
            if(path == "" || event.currentTarget == undefined) {
                path = "index";
            }
            $.get("includes/" + path + '.html',function(data){
                current = swap(current, data);
            });
        });
    function swap(curent, data, name) {
        var options = {direction: "left"}
        if(name != undefined) {
            window.history.pushState(document.state, name, name);
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
    $(".menu a").each(function(key, item) {
        $(item).click(function() {
            $.get("includes/" + $(item).attr("href") + ".html", function(data) {
                current = swap(current, data, $(item).attr("href"));
            });
            return false;
        });
    });
});
