function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

$(document).ready(function() {

    $('#up-down').click(function() {

        $('#toggle').toggleClass('fa-angle-down fa-angle-up', 2000);
    })
})

$('body').on('hidden.bs.modal', function() {
    if ($('.modal.in').length > 0) {
        $('body').addClass('modal-open');
    }
});

/* -------------- Pet Form ----------------- */
$(document).ready(function() {
    $('#Mybtn').click(function() {
        $('#MyForm').toggle(500);
    });
});

$(document).ready(function() {
    $("a").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function() {
                window.location.hash = hash;
            });
        }
    });
});

/*-------- User Profile Change Email Btn ------------- */

$(document).ready(function() {
    $('#emailBtn').click(function() {
        $('#emailForm').toggle(500);
    });
});
