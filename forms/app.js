var usernameInput = $('#username_input');
var passwordInput = $('#password_input');
var emailInput = $('#email_input');
var termsCheckbox = $('#terms_checkbox');
var termsLink = $('#terms_link');

var termsModal = $('#terms_modal');
var fieldsModal = $('#fields_modal');

var usernameLabel = $('#username_label');
var emailLabel = $('#email_label');
var passwordLabel = $('#password_label');
var termsLabel = $('#terms_label');

var submitButton = $('#submit_button');

$(document).ready(function () {
    termsLink.on("click", function () {
        termsModal.modal('show');
    });

    termsModal.find('.terms_modal_close').on("click", function () {
        termsModal.modal('hide');
    });

    fieldsModal.find('.fields_modal_close').on("click", function () {
        fieldsModal.modal('hide');
    });

    submitButton.on("click", function () {
        var invalid = false;
        usernameInput.removeClass("is-invalid");
        emailInput.removeClass("is-invalid");
        passwordInput.removeClass("is-invalid");
        termsCheckbox.removeClass("is-invalid");
        if (usernameInput.val() == "") {
            usernameInput.addClass("is-invalid")
            invalid = true;
        }
        if (emailInput.val() == "" || emailInput.is(':invalid')) {
            emailInput.addClass("is-invalid")
            invalid = true;
        }
        if (passwordInput.val() == "" || passwordInput.val().length < 8) {
            passwordInput.addClass("is-invalid")
            invalid = true;
        }
        if (termsCheckbox.is(':checked') != true) {
            termsCheckbox.addClass("is-invalid")
            invalid = true;
        }

        if (invalid) return;

        var usr = new user(usernameInput.val(), emailInput.val(), passwordInput.val(), termsCheckbox.is(':checked'));

        usernameLabel.text(usr.username);
        emailLabel.text(usr.email);
        passwordLabel.text(usr.password);
        termsLabel.text(usr.acceptedTerms);

        fieldsModal.modal('show');
      
        //infoForm id li form post edildiğinde
           /* $.ajax({
                url: "signForm.php", 
                type: "POST",             
                data: usr,
                contentType: false,       
                cache: false,             
                processData:false, 
                success:console.log("wuqhoeu")
            });*/
        
    })
});

function user(username, email, password, acceptedTerms) {
    this.username = username;
    this.email = email;
    this.password = password;
    this.acceptedTerms = acceptedTerms;
}
