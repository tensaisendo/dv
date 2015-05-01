/** main js file */

$(document).ready(function(){
    /* Caption pour images */
    $(".capty").capty();

    /* floutage sur le background */
    $(".backstretch img").css(
        {
            "-webkit-filter": "blur(5px)",
            "-moz-filter": "blur(3px)",
            "-o-filter": "blur(3px)",
            "-ms-filter": "blur(3px)",
            "filter": "blur(3px)"
        }
    );

});