// $(".my-navbar .nav-link").on("click", function () {
//     $(".my-navbar").find("li.active").removeClass("active");
//     $(this).parent().addClass("active");
// });

$(document).ready(function () {
    var images = [
        "https://a0.muscache.com/im/pictures/286fcb82-b102-4685-981f-c94b30ef3750.jpg?im_w=720",
        "https://a0.muscache.com/im/pictures/92aa1461-acd5-487f-9598-09c58a43494e.jpg?im_w=720",
        "https://a0.muscache.com/im/pictures/39176352-c320-4f11-8e8f-b13f28e9f37f.jpg?im_w=720",
        "https://a0.muscache.com/im/pictures/e41d7710-0fe1-49b3-8eb6-c408f8abce98.jpg?im_w=720"
    ];
    $(function () {
        var i = 0;
        $(".jumbotron").css("background", "url(" + images[i] + ") no-repeat ");
        $(".jumbotron").css("background-size", "100% 100%");
        setInterval(function () {
            i++;
            if (i == images.length) {
                i = 0;
            }
            $(".jumbotron").fadeOut("slow", function () {
                $(this).css("background", "url(" + images[i] + ") no-repeat");
                $(this).css("background-size", "100% 100%");
                $(this).fadeIn("slow");
            });
        }, 10000);
    });
});

// $(window).on("scroll", function() {
//     if ($(window).scrollTop() + $(window).height() - 100 >= $(".jumbotron").offset().top) {
//         console.log("ok");
//     }
// })

// page scroll animation

function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 0;

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("act");
        } else {
            reveals[i].classList.remove("act");
        }
    }
}

window.addEventListener("scroll", reveal);


// end page scroll animation

var flip = $(".flip");
var flip_front = $(".flip-front");
var flip_card_back = $(".flip-card-back");
$(window).on("load resize", function () {
    if ($(document).width() > 900) {

        for (i = 0; i < flip.length; i++) {
            $(flip[i]).addClass('flip-card');

            $(flip[i]).find("div.flip-front").each(function () {
                $(this).addClass('flip-card-front');
            });

            $(flip[i]).find("div.card-footer").each(function () {
                $(this).addClass('d-none');
            });

            $(flip[i]).find("div.flip-card-back").each(function () {
                $(this).show();
            });
        }

        // for (i = 0; i < flip_front.length; i++) {
        //     $(flip_front[i]).addClass('flip-card-front');
        //     $(flip_front[i]).find("div.card-footer").each(function() {
        //         $(this).addClass('d-none');
        //     })
        // }
        // for (i = 0; i < flip_card_back.length; i++) {
        //     $(flip_card_back[i]).show();
        // }
    } else {
        // for (i = 0; i < flip_front.length; i++) {
        //     $(flip_front[i]).removeClass('flip-card-front');
        //     $(flip_front[i]).find("div.card-footer").each(function() {
        //         $(this).removeClass('d-none');
        //     })
        // }
        // for (i = 0; i < flip_card_back.length; i++) {
        //     $(flip_card_back[i]).hide();
        // }
        for (i = 0; i < flip.length; i++) {

            $(flip[i]).removeClass('flip-card');

            $(flip[i]).find("div.flip-front").each(function () {
                $(this).removeClass('flip-card-front');
            });

            $(flip[i]).find("div.card-footer").each(function () {
                $(this).removeClass('d-none');
            });

            $(flip[i]).find("div.flip-card-back").each(function () {
                $(this).hide();
            });
        }
    }
});

/** Owl Carousel*/

var owl = $(".owl-carousel");
owl.owlCarousel({
    loop: true,
    nav: true,
    margin: 2,
    // URLhashListener: true,
    // startPosition: 'URLHash',
    responsive: {
        0: {
            items: 1,
        },
        // 600: {
        //     items: 3,
        // },
        // 960: {
        //     items: 5,
        // },
        // 1200: {
        //     items: 7,
        // },
    },
});
owl.on("mousewheel", ".owl-stage", function (e) {
    if (e.deltaY > 0) {
        owl.trigger("next.owl");
    } else {
        owl.trigger("prev.owl");
    }
    e.preventDefault();
});

// window.onpopstate = function(param) {
//     alert("ok");
// }

// $(window).on('popstate', function(e) {
//     console.log(e);
//     prev_url = document.referrer;
//     console.log(prev_url);
// });

// $(".owl-item").click(function(e) {
//     owl.trigger('next.owl.carousel');
// })

$('.carousal-image').click(function (e) {
    e.preventDefault();
    var index = $(this).attr('data-carousel-index');
    owl.trigger('to.owl.carousel', index);
})


// window.onhashchange = function() {
//     console.log(document.referrer);
//     console.log(window.parent.location);
// }

var formData = localStorage.getItem('formData');
// console.log(formData);
var formData = JSON.parse(formData);
// console.log(formData.length);

function fetchLocalStorage() {
    var formData = localStorage.getItem('formData');
    var formData = JSON.parse(formData);
    if (formData) {
        var formDataLength = formData.length;

        $("#name").val(formData[formDataLength - 1].name);
        $("#email").val(formData[formDataLength - 1].email);
        $("#mob_no").val(formData[formDataLength - 1].mob_no);
        $("#start_date").val(formData[formDataLength - 1].start_date);
        $("#end_date").val(formData[formDataLength - 1].end_date);

        var names = "";
        var emails = "";
        var mob_nos = "";

        for (var i = 0; i < formData.length; i++) {
            names += "<option value='" + formData[i].name + "'>" + formData[i].name + "</option>";
            emails += "<option value='" + formData[i].email + "'>" + formData[i].email + "</option>";
            mob_nos += "<option value='" + formData[i].mob_no + "'>" + formData[i].mob_no + "</option>";
        }
        $("#names").html(names);
        $("#emails").html(emails);
        $("#mob_nos").html(mob_nos);
    }
}

if (formData != null) {
    fetchLocalStorage();


    $("#name").on('change keyup', function () {
        var name = $(this).val();
        if (formData.find(x => x.name === name)) {
            $("#email").val(formData.find(x => x.name === name).email);
            $("#mob_no").val(formData.find(x => x.name === name).mob_no);
            $("#start_date").val(formData.find(x => x.name === name).start_date);
            $("#end_date").val(formData.find(x => x.name === name).end_date);
        }
        // else {
        //     $("#email").val("");
        //     $("#mob_no").val("+61");
        //     $("#start_date").val("");
        //     $("#end_date").val("");
        // }
    });

    $("#email").on('change keyup', function () {
        var email = $(this).val();
        if (formData.find(x => x.email === email)) {
            $("#name").val(formData.find(x => x.email === email).name);
            $("#mob_no").val(formData.find(x => x.email === email).mob_no);
            $("#start_date").val(formData.find(x => x.email === email).start_date);
            $("#end_date").val(formData.find(x => x.email === email).end_date);
        }
        // else {
        //     $("#name").val("");
        //     $("#mob_no").val("+61");
        //     $("#start_date").val("");
        //     $("#end_date").val("");
        // }
    });

    $("#mob_no").on('change keyup', function () {
        var mob_no = $(this).val();
        if (formData.find(x => x.mob_no === mob_no)) {
            $("#name").val(formData.find(x => x.mob_no === mob_no).name);
            $("#email").val(formData.find(x => x.mob_no === mob_no).email);
            $("#start_date").val(formData.find(x => x.mob_no === mob_no).start_date);
            $("#end_date").val(formData.find(x => x.mob_no === mob_no).end_date);
        }
        // else {
        //     $("#name").val("");
        //     $("#email").val("");
        //     $("#start_date").val("");
        //     $("#end_date").val("");
        // }
    });

}

$(".avail-cancel").on('click', function (e) {
    e.preventDefault();
    $(".avail-card").toggleClass('d-none');
    $("#name").val("");
    $("#email").val("");
    $("#mob_no").val("+61");
    $("#start_date").val("");
    $("#end_date").val("");

    $("#name").removeClass('is-invalid , is-valid');
    $("#email").removeClass('is-invalid , is-valid');
    $("#mob_no").removeClass('is-invalid , is-valid');

    $('.avail-card-header').css('border-radius', '0px 20px 20px 0px')
});


$('#avail_this_offer ').on('click', function (e) {
    e.preventDefault();
    // alert();
    $('.avail-card').toggleClass('d-none');
    fetchLocalStorage();
    $('.avail-card-header').css('border-radius', '0px 20px 0px 0px');
});

$('.avail-card').hasClass('d-none') ? $('.avail-card-header').css('border-radius', '0px 20px 20px 0px') : $('.avail-card-header').css('border-radius', '0px 20px 0px 0px');

$("#start_date").on("change", function () {
    var start_date = $(this).val();
    $("#end_date").attr("min", start_date);
});

$("#end_date").on("change", function () {
    var end_date = $(this).val();
    $("#start_date").attr("max", end_date);
});

$("#email").on("change keyup", function () {
    var email = $(this).val();
    var valid_email = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    if (valid_email.test(email)) {
        $("#email").removeClass("is-invalid");
        $("#email").addClass("is-valid");
    } else {
        $("#email").removeClass("is-valid");
        $("#email").addClass("is-invalid");
    }
});

var input = document.querySelector("#mob_no");
var iti = window.intlTelInput(input, {
    utilsScript: "./assets/js/utils.js",
});


input.addEventListener("countrychange", function (e) {
    var countryData = iti.getSelectedCountryData();
    // console.log(countryData.iso2);
    $("#mob_no").val("+" + countryData.dialCode);
    if (iti.isValidNumber()) {
        $("#mob_no").removeClass("is-invalid");
        $("#mob_no").addClass("is-valid");
    }
    else {
        $("#mob_no").removeClass("is-valid");
        $("#mob_no").addClass("is-invalid");
    }
});




$("#mob_no").on("change keyup", function () {
    var phone = $(this).val();
    if (iti.isValidNumber()) {
        $("#mob_no").removeClass("is-invalid");
        $("#mob_no").addClass("is-valid");
    } else {
        $("#mob_no").removeClass("is-valid");
        $("#mob_no").addClass("is-invalid");
    }
});


// // var international_phone = /\+(9[976]\d|8[987530]\d|6[987]\d|5[90]\d|42\d|3[875]\d|2[98654321]\d|9[8543210]|8[6421]|6[6543210]|5[87654321]|4[987654310]|3[9643210]|2[70]|7|1)\d{1,14}$/;
// var international_phone = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
// if (international_phone.test(phone)) {
//     $("#mob_no").removeClass("is-invalid");
//     $("#mob_no").addClass("is-valid");
// }
// else {
//     $("#mob_no").removeClass("is-valid");
//     $("#mob_no").addClass("is-invalid");
// }
// });



$("#my-form").on('submit', function (e) {
    e.preventDefault();
    // alert();
    // var formData = $("#my-form").serializeArray();
    var name = $("#name").val();
    var email = $("#email").val();
    var mob_no = $("#mob_no").val();
    var start_date = $("#start_date").val();
    var end_date = $("#end_date").val();
    data = {
        name: name,
        email: email,
        mob_no: mob_no,
        start_date: start_date,
        end_date: end_date,
    };
    // console.log(data);
    if (name == "" || email == "" || mob_no == "" || start_date == "" || end_date == "") {
        alert("Please fill all the fields");
    } else if ($("#email").hasClass("is-invalid")) {
        alert("Please enter valid email");
    }
    else if ($("#mob_no").hasClass("is-invalid")) {
        alert("Please enter valid mobile number");
    }
    else {

        $.ajax({
            type: "POST",
            url: "sendMail.php",
            data: JSON.stringify(data),
            success: function (response) {
                console.log(response);
                var a = $.parseJSON(response);
                console.log(a);
                var c = "";
                if (a[0].status == "success") {
                    alert("Your request has been sent successfully");
                    // $("#my-form")[0].reset();
                    $("#my-form").trigger("reset");
                    $("#email").removeClass("is-valid");
                    $("#mob_no").removeClass("is-valid");

                    var array = JSON.parse(localStorage.getItem('formData'));
                    if (array == null) {
                        array = [];
                    }
                    array.push(data);
                    localStorage.setItem('formData', JSON.stringify(array));
                    console.log(array);

                    fetchLocalStorage(formData);
                } else {

                    for (var i = 0; i < a.length; i++) {
                        c += a[i].message + "\n";
                    }
                    alert(c);
                }
            },
        });
    }
});



// $(window).on('resize', function () {
//     if ($(window).width() > 1680) {
//         var current_width = $(window).width();
//     }
// });