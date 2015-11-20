/* 
 * Building a Bootstrap Contact Form Using PHP and AJAX
 *http://webdesign.tutsplus.com/tutorials/building-a-bootstrap-contact-form-using-php-and-ajax--cms-23068
 * 
 */

$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // formulário inválido
        formError();
        submitMSG(false, "Por favor, preencha corretamente o formulário.");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});

function submitForm() {
    // Inicializa variáveis com o conteúdo do formulário
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();

    console.log("name=" + name + "&email=" + email + "&message=" + message);

    $.ajax({
        type: "POST",
        url: "formProcess.php",
        data: "name=" + name + "&email=" + email + "&message=" + message,
        success: function (text) {
            if (text == "success") {
                console.log("formSuccess");
                formSuccess();
            } else {
                console.log("formSuccess FALHOU. Texto: " + text);
            }
        }
    });
}
function formSuccess() {
    $("#contactForm")[0].reset();
    submitMSG(true, "Mensagem enviada!");
}

function submitMSG(valid, msg) {
    var msgClasses;
    if (valid) {
        msgClasses = "h3 text-center tada animated text-success";
    } else {
        msgClasses = "h3 text-center flash text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}

function formError() {
    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
        $(this).removeClass();
    });
}