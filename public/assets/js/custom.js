$(document).ready(function() {
    var frm = $('#contact_form');
    frm.submit(function(e) {
        e.preventDefault();
        setTimeout(function() {
            $('#contact-form').modal('show');
        }, 10)
        $("#contact_form")[0].reset();
    });
});

$('.nav-item a').on('click', function() {
    console.log($('li.nav-item a').attr(href))

})

$(function() {
    $("li").click(function() {
        // remove classes from all
        $("li").removeClass("active");
        // add class to the one we clicked
        $(this).addClass("active");
    });
});