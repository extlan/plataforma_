<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Plataforma - Cadastrar</title>

        <!-- CSS e Bootstrap -->
        <link href="/view/assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>     
    </head>
    
    <body>
        
        <!------------------------- MENU ------------------------------------->
        <nav class="navbar navbar-expand-md navbar navbar-dark bg-primary">
            <!-------------------------- LOGO ----------------------------->
            <a class="navbar-brand" href="index.php"><img src="/view/img/logo.png" style="width: 100px"></a>

            

            <ul class="navbar-nav mr-auto">
                <!------------------------ ITEM 1 ------------------------->
                <li class="nav-item">
                    <a class="nav-link" href="/view/home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <!------------------------ ITEM 2 ------------------------->
                <li class="nav-item active">
                    <a class="nav-link" href="#">Cadastro <span class="sr-only"></span></a>
                </li>
                <!------------------------ ITEM 3 ------------------------->
                <li class="nav-item ">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <!------------------------ ITEM 4 ------------------------->
                <li class="nav-item ">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Procurar" aria-label="Procurar">
                <button class="btn btn-dark my-2 my-sm-0" type="submit">Procurar</button>
            </form>
            
        </nav>
        
        <div class="container">
            <div class="form-signin" style="background: #2e66ab;">
                <h2>Cadastro de usuário</h2>
                <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
                <form method="POST" action="">
                    <!--<label>Nome</label>-->
                    <input type="text" name="nome" placeholder="Digite o nome e o sobrenome" class="form-control"><br>

                    <!--<label>E-mail</label>-->
                    <input type="text" name="email" placeholder="Digite o seu e-mail" class="form-control"><br>

                    <!--<label>Usuário</label>-->
                    <input type="text" name="contato" placeholder="Digite seu contato" class="form-control"><br>

                    <!--<label>Senha</label>-->
                    <input type="password" name="senha" placeholder="Digite a senha" class="form-control">

                    <p align="center"><strong>Se quiser ofertar algum serviço selecione a caixa abaixo!</strong></p>
                    
                    <!-- opção para vender serviços -->
                    <p><label class="checkbox-inline"><input type="checkbox" name="opcaoVender" value="">Quero oferecer meus serviços</label></p>

                    <input type="submit" name="btnCadUsuario" value="Cadastrar" class="btn-block"><br><br>

                    <div class="row text-center" style="margin-top: 20px;"> 
                        Voltar ? <a href="../index.php" style="color: #000">Clique aqui</a> para logar
                    </div>
                </form>
            </div>
                        
        </div><!----------------------------------------- RODAPÉ ----------------------------------->
    <div class="card-group bg-primary">
        
        <!------------------------------------- BLOCO 1 ----------------------------------->
        <div class="card bg-primary">
            <br>
            <div class="card-body">
                <h5 class="card-title">Plataforma Click's</h5>
                <p class="card-text">Com o Click's, o usuário além de achar serviços indispensáveis para o seu dia a dia, que estejam próximos, também tem a opção de oferecer
                algum tipo de serviço a outro usuário.</p>
                <p class="card-text"><small class="text-muted"></small></p>
            </div>
            
        </div>

        <!------------------------------------- BLOCO 2 ----------------------------------->
        <div class="card bg-primary">
            <br>
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <img class="card-img-top" src="./view/img/logo.png" style="width: 50px" alt="Card image cap">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <!------------------------------------- BLOCO 3 ----------------------------------->
        <div class="card bg-primary">
            <br>
            
            <div class="card-body">
                <h5 class="card-title">Entre em contato</h5>
                <p class="card-text">
                    <a href="#">
                        <img class="card-img-top" src="./view/img/face.png" style="width: 80px"  alt="Card image cap">
                    </a>
                    <a href="#">
                        <img class="card-img-top" src="./view/img/google.png" style="width: 50px"  alt="Card image cap">
                    </a>
                    <a href="#">
                        <img class="card-img-top" src="./view/img/whatsapp.png" style="width: 70px"  alt="Card image cap">
                    </a>
                    
                </p>
            </div>
            
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="./view/assets/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
