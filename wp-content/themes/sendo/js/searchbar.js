<!--

$(document).ready(function(){
    $("form input.search-field").hover(
        function(){
            if (document.body.clientWidth == '1903'){
                $(this).css("width","254px");
            } else {
                $(this).css("width","54px");
            }
        },
        function(){
            $(this).css("width","0");
        }
    );
});

//-->