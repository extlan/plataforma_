<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Plataforma Home</title>

        <link href="./view/assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="">
        <!------------------------- MENU ------------------------------------->
        <nav class="navbar navbar-expand-md navbar navbar-dark bg-primary">
            <!-------------------------- LOGO ----------------------------->
            <a class="navbar-brand" href="index.php"><img src="./view/img/logo.png" style="width: 100px"></a>

            <!------------------------ ITEM 1 ------------------------->

            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cadastro <span class="sr-only"></span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Procurar" aria-label="Procurar">
                <button class="btn btn-dark my-2 my-sm-0" type="submit">Procurar</button>
            </form>



        </nav>

        <br>
        <div class="container ">
            <div class="form-sigin" >
                <h2 class="text-center">Bem vindo ao Clik's</h2>
                <?php
                //se existir a mensagem 
                if (isset($_SESSION['msg'])) {
                    //imprimi a mensagem 
                    echo $_SESSION['msg'];
                    //depois distrói a mensagem
                    unset($_SESSION['msg']);
                }
                ?>

                <form class="px-4 py-3" method="post" action="./controller/valida.php">
                    <!-- <label>Usuário</label> -->
                    <input type="text" name="usuario" placeholder="Digite seu usuário" class="form-control"><br>

                    <!-- <label>Senha</label> -->
                    <input type="password" name="senha" placeholder="Digite sua senha" class="form-control"><br>

                    <input type="submit" name="btnLogin" value="Acessar" class="btn-block">

                    <div class="row text-center" style="margin-top: 20px;">
                        <h4>Ainda não posui uma conta ?</h4>
                        <a href="#" style="color: #000"> Clique aqui e crie grátis</a>
                    </div>                    
                </form>
            </div>
        </div>






    <!----------------------------------------- RODAPÉ ----------------------------------->
    <div class="card-group bg-primary">
        <!------------------------------------- BLOCO 1 ----------------------------------->
        <div class="card bg-primary">
            <img class="card-img-top" src="./view/img/logo.png" style="width: 150px" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <!------------------------------------- BLOCO 2 ----------------------------------->
        <div class="card bg-primary">
            <img class="card-img-top" src="./view/img/logo.png" style="width: 150px"  alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <!------------------------------------- BLOCO 3 ----------------------------------->
        <div class="card bg-primary">
            <img class="card-img-top" src="./view/img/logo.png" style="width: 150px"  alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="./view/assets/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
