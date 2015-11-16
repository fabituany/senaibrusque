<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Site Institucional do SENAI - Brusque</title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/estilo.css" />

        <!-- Javascript -->
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        

    </head>
    <body>
        <div class="container-fluid">
            <header class="jumbotron text-center" id="topo">
                <h1>SENAI/SC Brusque</h1>
                <p>A FORÇA DA INDÚSTRIA CATARINENSE</p>
                <form role="form">
                    <div class="form-inline">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            
                            <input type="email"  class="form-control" id="email"  placeholder="seunome@provedor.com.br">                            
                        </div>
                        <button type="submit" class="btn btn-success">
                            Cadastrar
                        </button>
                        
                    </div>


                </form>
            </header>
        </div>
        
        <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
            <div class="container-fluid">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <!--<a class="navbar-brand" href="#">WebSiteName</a>-->
              </div>
            </div>
            <div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                  <li><a href="#section1">Início</a></li>
                  <li><a href="#section2">Cursos</a></li>
                  <li><a href="#section3">Notícias</a></li>
                  <li><a href="#section4">Fotos</a></li>
                  <li><a href="#section5">Vídeos</a></li>
                  <li><a href="#section6">Contato</a></li>
                  <li><a href="#section7">Localização</a></li>
                  <!--
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#section41">Section 4-1</a></li>
                      <li><a href="#section42">Section 4-2</a></li>
                    </ul>
                  </li>
                  -->
                </ul>
              </div>
            </div>    
        </nav>
        <div id="section1" class="container-fluid">
          <h1>Início</h1>
          <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
          <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section2" class="container-fluid">
          <h1>Cursos</h1>
          <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
          <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section3" class="container-fluid">
          <h1>Notícias</h1>
          <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
          <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section4" class="container-fluid">
          <h1>Fotos</h1>
          <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
          <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section5" class="container-fluid">
          <h1>Vídeos</h1>
          <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
          <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section6" class="container-fluid">
          <h1>Contato</h1>
          <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
          <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section7" class="container-fluid">
          <h1>Localização</h1>
          <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
          <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
    
    <script>
        $(document).ready(function(){
          // Add scrollspy to <body>
          $('body').scrollspy({target: ".navbar", offset: 50});   

          // Add smooth scrolling on all links inside the navbar
          $("#myNavbar a").on('click', function(event) {

            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 800, function(){

              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            });
          });
        });
    </script>
    <script src="js/meuscript.js"></script>
    </body>
</html>

