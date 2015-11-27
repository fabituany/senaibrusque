/* 
 * Building a Bootstrap Contact Form Using PHP and AJAX
 *http://webdesign.tutsplus.com/tutorials/building-a-bootstrap-contact-form-using-php-and-ajax--cms-23068
 * 
 */

$("#formCadastro").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // Formulário inválido
        cadastroError();
        submitCadastroMSG(false, "Por favor, insira um e-mail válido.");
    } else {
        // Tudo azul!
        event.preventDefault();
        submitCadastro();
    }
});

function submitCadastro() {
    // Inicializa variáveis com o conteúdo do formulário
    var email = $("#cadastroEmail").val();

    console.log("&email=" + email);

    /**
     * Cadastro no BD e envia o e-mail
     * */

    $.ajax({
        type: "POST",
        url: "cadastro/cadastro.php",
        data: "&email=" + email,
        success: function (text) {
            if (text == "success") {
                console.log("cadastroSuccess");
                cadastroSuccess();
            } else {
                console.log("cadastroSuccess FALHOU. Texto: " + text);
            }
        }
    });
}
function cadastroSuccess() {
    //Limpa o formulário
    $("#formCadastro")[0].reset();
    //Envia mensagem de sucesso!
    submitCadastroMSG(true, "E-mail cadastrado!")
}

function submitCadastroMSG(valid, msg) {
    var msgClasses;
    if (valid) {
        msgClasses = "h3 text-center tada animated text-success";
    } else {
        msgClasses = "h3 text-center rubberBand animated text-danger";
    }
    $("#msgCadastroSubmit").removeClass().addClass(msgClasses).text(msg);
}

function cadastroError() {
    $("#formCadastro").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
        $(this).removeClass();
    });
}

