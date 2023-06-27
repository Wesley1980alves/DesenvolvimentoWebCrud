<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="view/estilos.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body >
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


        <header style="background-color: #000">
            <div class="container text-white pt-2 ">
                <h1 class="pt-2 text-center" > SISTEMA  PARA ADOÇÃO DE ANIMAIS </h1>
                <h3 class="pt-2 text-center"> Seja Companheiro e Adote Um Animalzinho  </h3>

            </div>
        </header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Cadastro Animais
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item" href="formularioCadastro.php" rel='next'>Cadastrar Animais</a></li>
                                <li><a class="dropdown-item" href="atualizarAnimal.php">Atualizar Animais</a></li>
                                <li><a class="dropdown-item" href="excluirAnimal.php"> Excluir Animais</a></li>
                                <li ><a class="dropdown-item" href="consultarAnimal.php">consultar  Animais<a/></li>
                                <li ><a class="dropdown-item" href="listagemAnimal.php">Listagem de  Animais<a/></li>
                                

                            </ul>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Cadastro Acolhedor
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="">Cadastrar Pessoa</a></li>
                                <li><a class="dropdown-item" href="">Atualizar Pessoa</a></li>
                                <li><a class="dropdown-item" href=""> Excluir pessoa</a></li>
                                <li ><a class="dropdown-item" href="">consultar  Pessoa</li>

                            </ul>

                        </li>

                </div>
            </div>
        </nav>

        <div class="container">
          

            <hr>
            <div>

                <div class="row">



                    <div class="text-center">
                        <img src="imagens/kira.jpg" alt="Animal" class="img-thumbnail rounded-circle  ">

                    </div>

                    <hr><!-- comment -->

                </div>
            </div>


        </div>
        <hr>

        <footer style="background-color: #000">
            <div class="container text-white text-center pt-5">
                <p>Sistemas de Doações de Animais </p>
                <p>Fazer algo a um animal é cuidar de uma vida!</p>
            </div>

        </footer>
    </body>
</html>