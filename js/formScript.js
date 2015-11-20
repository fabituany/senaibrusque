/* 
 * Building a Bootstrap Contact Form Using PHP and AJAX
 *http://webdesign.tutsplus.com/tutorials/building-a-bootstrap-contact-form-using-php-and-ajax--cms-23068
 * 
 */

$("#contactForm").submit(function (event) {
    // Cancela o envio padrão
    event.preventDefault();
    //Chama uma função que fará o envio do formulário
    console.log("submitForm");
    submitForm();
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
            }else{
                console.log("formSuccess FALHOU. Texto: " + text);
            }
        }
    });
}
function formSuccess() {
    $("#msgSubmit").removeClass("hidden");
}

