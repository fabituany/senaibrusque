<form action="cadastro/cadastro.php" method="post" role="form" class="form-inline" id="formCadastro">
    <!-- Gerador de Bootstrap Form 
         http://embed.plnkr.co/ZrnnkFR3Yv9HGQHrRMiW/preview -->
    <!-- Em caso de sucesso na validação: <div class="form-group has-feedback has-success"> -->
    <!-- Em caso de falha na validação: <div class="form-group has-feedback has-error"> -->
    <div class="help-block with-errors"></div>

    <div id="msgCadastroSubmit" class="h3 text-center hidden"></div>
    
    <div class="form-group has-feedback">
        <input id="cadastroEmail" type="email" name="email" class="form-control" placeholder="seunome@provedor.com.br" size="40px"/>
        <i class="form-control-feedback glyphicon glyphicon-envelope"></i>
    </div>
    <input id="cadastroSubmit" type="submit" name="btn" value="Cadastrar" class="btn btn-success"/>

    <!-- Sucesso ou falha no cadastro -->
    
</form>

