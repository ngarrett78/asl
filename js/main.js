/**
 * Created by nate on 4/11/2016.
 */

// Modals
$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
})


// Jumbotron responsiveness
var jumboHeight = $('.home_jumbotron').outerHeight();
function parallax(){
    var scrolled = $(window).scrollTop();
    $('.bg').css('height', (jumboHeight-scrolled) + 'px');
}

$(window).scroll(function(e){
    parallax();
});