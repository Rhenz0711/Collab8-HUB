wow = new WOW();
wow.init();

$(document).ready(function(e) {

    $('.slider').bxSlider({
    pager: false
    });
    });


$(window).on("scroll",function () {

var bodyScroll = $(window).scrollTop(),
navbar = $(".navbar");

if(bodyScroll > 50){
$('.navbar-logo img').attr('src','images/logo-black.png');
navbar.addClass("nav-scroll");

}else{
$('.navbar-logo img').attr('src','images/logo.png');
navbar.removeClass("nav-scroll");
}

});
$(window).on("load",function (){
var bodyScroll = $(window).scrollTop(),
navbar = $(".navbar");

if(bodyScroll > 50){
$('.navbar-logo img').attr('src','images/logo-black.png');
navbar.addClass("nav-scroll");
}else{
$('.navbar-logo img').attr('src','images/logo-white.png');
navbar.removeClass("nav-scroll");
}

$.scrollIt({

easing: 'swing',      // the easing function for animation
scrollTime: 900,       // how long (in ms) the animation takes
activeClass: 'active', // class given to the active nav element
onPageChange: null,    // function(pageIndex) that is called when page is changed
topOffset: -63
});
});


document.getElementById('moreButton').addEventListener('click', function () {
    var hiddenFAQs = document.getElementById('hiddenFAQs');
    
    if (hiddenFAQs.style.display === 'none' || hiddenFAQs.style.display === '') {
        hiddenFAQs.style.display = 'flex';
        hiddenFAQs.style.flexWrap = 'wrap';
        this.textContent = 'Less';
    } else {
        hiddenFAQs.style.display = 'none';
        this.textContent = 'More';
    }
});


//Modal Handler
document.addEventListener('DOMContentLoaded', function () {
    // Get the modal and close elements
    var modal = document.getElementById('registerForm');
    var closeModalBtn = document.querySelector('.close');

    // Get all buttons with the class 'openModalBtn'
    var openModalBtns = document.querySelectorAll('.openModalBtn');

    // Loop through all buttons and attach the event listener
    openModalBtns.forEach(function (button) {
        button.addEventListener('click', function () {
            modal.style.display = 'block';
        });
    });

    // Close the modal when the close button is clicked
    closeModalBtn.addEventListener('click', function () {
        modal.style.display = 'none';
    });

    // Close the modal when clicking outside of it
    window.addEventListener('click', function (event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    var registerModal = document.getElementById('registerForm');
    var loginModal = document.getElementById('loginForm');

    var closeButtons = document.querySelectorAll('.close');
    var openRegisterBtns = document.querySelectorAll('.openRegisterBtn');
    var openLoginBtns = document.querySelectorAll('.openLoginBtn');

    var showLogin = document.getElementById('showLogin');
    var showRegister = document.getElementById('showRegister');

    // Open Register Modal
    openRegisterBtns.forEach(function (button) {
        button.addEventListener('click', function () {
            registerModal.style.display = 'block';
            loginModal.style.display = 'none';
        });
    });

    // Open Login Modal
    openLoginBtns.forEach(function (button) {
        button.addEventListener('click', function () {
            loginModal.style.display = 'block';
            registerModal.style.display = 'none';
        });
    });

    // Switch from Register to Login
    showLogin.addEventListener('click', function (event) {
        event.preventDefault();
        registerModal.style.display = 'none';
        loginModal.style.display = 'block';
    });

    // Switch from Login to Register
    showRegister.addEventListener('click', function (event) {
        event.preventDefault();
        loginModal.style.display = 'none';
        registerModal.style.display = 'block';
    });

    // Close Modals
    closeButtons.forEach(function (btn) {
        btn.addEventListener('click', function () {
            registerModal.style.display = 'none';
            loginModal.style.display = 'none';
        });
    });

    // Close modal when clicking outside of it
    window.addEventListener('click', function (event) {
        if (event.target === registerModal) {
            registerModal.style.display = 'none';
        }
        if (event.target === loginModal) {
            loginModal.style.display = 'none';
        }
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const params = new URLSearchParams(window.location.search);
    if (params.has("error")) {
        let errorMessage = "";
        switch (params.get("error")) {
            case "wrongpwd":
                errorMessage = "Incorrect password. Please try again.";
                break;
            case "nouser":
                errorMessage = "No account found with that username.";
                break;
            case "invalidaccess":
                errorMessage = "Invalid access. Please log in.";
                break;
        }
        if (errorMessage) {
            const errorPopup = document.getElementById("errorPopup");
            document.getElementById("errorMessage").textContent = errorMessage;
            errorPopup.style.display = "block";

            // Automatically hide after 5 seconds
            setTimeout(() => {
                errorPopup.style.display = "none";
            }, 5000);
        }
    }
});

function closeErrorPopup() {
    document.getElementById("errorPopup").style.display = "none";
}