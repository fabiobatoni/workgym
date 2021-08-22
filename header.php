<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>WORKGYM</title>
    <link rel="icon" type="img/jpg" href="<?php echo BASEURL; ?>img/icowg.png">   
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/dataTables.bootstrap4.min.css">
    
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <style type="text/css">
        .msg2{
            display: none;
        }
    </style>
    
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/all.min.css">
</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo BASEURL; ?>dashboard.php" class="navbar-brand">WORKGYM</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Usuários <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo BASEURL; ?>usuarios">Gerenciar Usuários</a></li>
                            <li><a href="<?php echo BASEURL; ?>usuarios/addUser.php">Novo Usuário</a></li>
                        </ul>
                    </li>          
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Alunos <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo BASEURL; ?>alunos">Gerenciar Alunos</a></li>
                            <li><a href="<?php echo BASEURL; ?>alunos/add.php">Novo Aluno</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Pagamentos <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo BASEURL; ?>pagamentos">Gerenciar Pagamentos</a></li>
                            <li><a href="<?php echo BASEURL; ?>pagamentos/addPag.php">Novo Pagamento</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Treinos <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo BASEURL; ?>treinos">Gerenciar Treinos</a></li>
                            <li><a href="<?php echo BASEURL; ?>treinos/addTreino.php">Novo Treino</a></li>
                            <li><a href="<?php echo BASEURL; ?>experimental/index.php">Treino Experimental</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo BASEURL; ?>logout.php">Sair</a></li>
                </ul>
            </div><!--/.navbar-collapse -->
        </div>
    </nav>

    <main class="container">