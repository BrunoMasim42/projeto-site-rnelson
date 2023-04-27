<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" ></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="style.css">
    

    <title>Deputado Rnelson</title>
</head>
<body>
<header>
    <nav class="navigation">
    <div class="logo">
   <img src="imagens/logoAzul.png">
   </div>
        <ul class="nav-menu">
            <li class="nav-item"><a href="home">Home</a></li>
            <li class="nav-item"><a href="compromisso">Compromisso</a></li>
            <li class="nav-item"><a href="projetos">Projetos</a></li>
            <li class="nav-item"><a href="fotos">Fotos</a></li>
            <li class="nav-item"><a href="videos">Vídeos</a></li>
        </ul>
        <div class="menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
</header>

<main>
    <section class="home">
        <div class="home-img">
            <img src="imagens/foto08.jpeg" alt="hamburguer">

        </div>
    </section>
</main>
     
    <script src="script.js"></script>
    <!-- iniciando o carrousel-->

    <div class="slider">

    <div class="slides">
        <!-- radio butons-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!-- fim radio butons-->

        <!-- Slide Imagens-->

        <div class="slide first">
            <img src="imagens/materias/01.jpg" alt="" id="">

        </div>

         <div class="slide">
            <img src="imagens/materias/02.jpg" alt="" id="">

        </div>

         <div class="slide">
            <img src="imagens/materias/03.jpg" alt="" id="">

        </div>

         <div class="slide">
            <img src="imagens/materias/05.jpg" alt="" id="">

        </div>

       <!--  fim Slide Imagens-->

        <!--  navigation button-->

        <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
         <!--  fim navigation button-->
        </div>

    </div>

       <div class="manual-navigation">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
       </div>

    </div>


    
    
    <section class="flex">
        <div class="flex-img">
            <img src="imagens/materias/01.jpg" alt="hamburguer">
            <p>Accessibility
Terminal command failure audio cue
When a command exits with a non-zero code in a terminal with shell integration, sighted users can glance at the command decoration to quickly understand that there was a failure. 
</p>
        </div>
        <div class="flex-img">
            <img src="imagens/materias/02.jpg" alt="hamburguer">
            <p>Accessibility
Terminal command failure audio cue
When a command exits with a non-zero code in a terminal with shell integration, sighted users can glance at the command decoration to quickly understand that there was a failure. 
</p>
        </div>
        <div class="flex-img">
            <img src="imagens/materias/03.jpg" alt="hamburguer">
            <p>Accessibility
Terminal command failure audio cue
When a command exits with a non-zero code in a terminal with shell integration, sighted users can glance at the command decoration to quickly understand that there was a failure. 
</p>
        </div>
        <div class="flex-img">
            <img src="imagens/materias/06.jpg" alt="hamburguer">
            <p>Accessibility
Terminal command failure audio cue
When a command exits with a non-zero code in a terminal with shell integration, sighted users can glance at the command decoration to quickly understand that there was a failure. 
</p>
        </div>
        
        

    </section>
    
</body>
</html>