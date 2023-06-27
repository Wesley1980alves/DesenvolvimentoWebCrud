
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
                            <a class="nav-link active" aria-current="page" href="index.php" rel="prev">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Cadastro Animais
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item" href="formularioCadastro.php">Cadastrar Animais</a></li>
                                <li><a class="dropdown-item" href="atualizarAnimal.php">Atualizar Animais</a></li>
                                <li><a class="dropdown-item" href="excluirAnimal.php"> Excluir Animais</a></li>
                                <li ><a class="dropdown-item" href="consultarAnimal.php" rel="next">consultar  Animais</li>
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
            <div>
                <div>
                    <h3 class="mb-4 text-center"><strong><span style='color:black;'>Lista de Todos Animais Cadastrado</span></strong></h3>
                </div>
            </div>
            <div class="col-6 text-end ">
                <a href="#" class=" mb-4 btn bnt_danger text-center"  ><strong><span style="color:red;">Adicionar Animal</strong></span></a>
            </div>

            <hr>
         
            <table class='table'>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Peso</th>
                        <th>Sexo</th>
                        <th>Descrição</th>
                        <th>Histórico </th>
                        <th>Tipo</th>
                        <th>Status</th>



                    </tr>

                </thead>
                <tbody>

                    <tr>
                        <td>kira    </td>
                        <td> 12,3   </td>
                        <td>femea   </td>
                        <td> cachorra   </td>
                        <td> mansa   </td> 
                        <td> doberman   </td>
                        <td> vacinada</td>
                        <td>

                            <a herf="#" class="btn bnt_danger">Excluir</a>
                            <a herf="#" class="btn bnt-primary">Atualizar</a>
                        </td>




                    </tr>


                </tbody>





            </table>


            <div>

                <div class="row">







                </div>
            </div>


        </div>


        <footer style="background-color: #000">
            <div class="container text-white text-center pt-5">
                <p>Sistemas de Doações de Animais </p>
                <p>Fazer algo a um animal é cuidar de uma vida</p>
                <p> Cuide Dos Animais Como Parte Da Família
                    Seja Em Qualquer Lugar Que Você Encontrar</p>
                <p>  Um Animalzinho Sofrendo Ajude!!!!</p>
                <p>  Deus Lhe Gratificará Por Seu Amor!!  </p> 
                </p>
            </div>

        </footer>
    </body>
</html>