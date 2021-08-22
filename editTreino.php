<?php 
  require_once ('functions.php'); 
  include_once '../verificaLogin.php';
  edit_treino();

  $id = $_GET['id'];
 
  $pdo = getConnection();
  $consulta = $pdo->query("SELECT * FROM treinos WHERE id ='$id'");
  $res = $consulta->fetch(PDO::FETCH_ASSOC);

  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Editar Treino</h2>

<form action="editTreino.php?id=<?php echo $res['id']; ?>" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo2">CPF</label>
      <input type="text" class="form-control" maxlength="11" required="" disabled="" name="treino['cpftreino']" value="<?php echo $treino['cpftreino']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Criação</label>
      <input type="text" class="form-control" name="treino['dttreino']" disabled="" value="<?php echo $treino['dttreino']; ?>">
    </div>
  </div> 

  <h3>Exercícios</h3>

  <hr />

  <div class="row">
    <div class="form-group col-md-2">
      <label for="peito">Peito - Exercício</label>
      <select class="form-control" name="treino['peito1']">
        <option selected=""> - </option>
        <option value="Supino Reto"
        <?php
          if($res['peito1']=='Supino Reto')
            echo 'selected'; 
        ?>>Supino Reto</option>
        <option value="Supino Inclinado"
        <?php
          if($res['peito1']=='Supino Inclinado')
            echo 'selected'; 
        ?>>Supino Inclinado</option>
        <option value="Supino Declinado"
        <?php
          if($res['peito1']=='Supino Declinado')
            echo 'selected'; 
        ?>>Supino Declinado</option>
        <option value="Crucifixo"
        <?php
          if($res['peito1']=='Crucifixo')
            echo 'selected'; 
        ?>>Crucifixo</option>
        <option value="Voador"
        <?php
          if($res['peito1']=='Voador')
            echo 'selected'; 
        ?>>Voador</option>
        <option value="Cross-Over"
        <?php
          if($res['peito1']=='Cross-Over')
            echo 'selected'; 
        ?>>Cross-Over</option>
      </select><br>
      <select class="form-control" name="treino['peito2']">
        <option selected=""> - </option>
        <option value="Supino Reto"
        <?php
          if($res['peito2']=='Supino Reto')
            echo 'selected'; 
        ?>>Supino Reto</option>
        <option value="Supino Inclinado"
        <?php
          if($res['peito2']=='Supino Inclinado')
            echo 'selected'; 
        ?>>Supino Inclinado</option>
        <option value="Supino Declinado"
        <?php
          if($res['peito2']=='Supino Declinado')
            echo 'selected'; 
        ?>>Supino Declinado</option>
        <option value="Crucifixo"
        <?php
          if($res['peito2']=='Crucifixo')
            echo 'selected'; 
        ?>>Crucifixo</option>
        <option value="Voador"
        <?php
          if($res['peito2']=='Voador')
            echo 'selected'; 
        ?>>Voador</option>
        <option value="Cross-Over"
        <?php
          if($res['peito2']=='Cross-Over')
            echo 'selected'; 
        ?>>Cross-Over</option>
      </select><br>
      <select class="form-control" name="treino['peito3']">
        <option selected=""> - </option>
        <option value="Supino Reto"
        <?php
          if($res['peito3']=='Supino Reto')
            echo 'selected'; 
        ?>>Supino Reto</option>
        <option value="Supino Inclinado"
        <?php
          if($res['peito3']=='Supino Inclinado')
            echo 'selected'; 
        ?>>Supino Inclinado</option>
        <option value="Supino Declinado"
        <?php
          if($res['peito3']=='Supino Declinado')
            echo 'selected'; 
        ?>>Supino Declinado</option>
        <option value="Crucifixo"
        <?php
          if($res['peito3']=='Crucifixo')
            echo 'selected'; 
        ?>>Crucifixo</option>
        <option value="Voador"
        <?php
          if($res['peito3']=='Voador')
            echo 'selected'; 
        ?>>Voador</option>
        <option value="Cross-Over"
        <?php
          if($res['peito3']=='Cross-Over')
            echo 'selected'; 
        ?>>Cross-Over</option>
      </select><br>
      <select class="form-control" name="treino['peito4']">
        <option selected=""> - </option>
        <option value="Supino Reto"
        <?php
          if($res['peito4']=='Supino Reto')
            echo 'selected'; 
        ?>>Supino Reto</option>
        <option value="Supino Inclinado"
        <?php
          if($res['peito4']=='Supino Inclinado')
            echo 'selected'; 
        ?>>Supino Inclinado</option>
        <option value="Supino Declinado"
        <?php
          if($res['peito4']=='Supino Declinado')
            echo 'selected'; 
        ?>>Supino Declinado</option>
        <option value="Crucifixo"
        <?php
          if($res['peito4']=='Crucifixo')
            echo 'selected'; 
        ?>>Crucifixo</option>
        <option value="Voador"
        <?php
          if($res['peito4']=='Voador')
            echo 'selected'; 
        ?>>Voador</option>
        <option value="Cross-Over"
        <?php
          if($res['peito4']=='Cross-Over')
            echo 'selected'; 
        ?>>Cross-Over</option>
      </select><br>
    </div> 
  
    <div class="form-group col-md-1">
      <label>Série</label>
      <select class="form-control" name="treino['seriepei1']">
        <option selected=""></option>
        <option value="1"
        <?php
          if($res['seriepei1']=='1')
            echo 'selected'; 
        ?>>1</option>
        <option value="2"
        <?php
          if($res['seriepei1']=='2')
            echo 'selected'; 
        ?>>2</option>
        <option value="3"
        <?php
          if($res['seriepei1']=='3')
            echo 'selected'; 
        ?>>3</option>
        <option value="4"
        <?php
          if($res['seriepei1']=='4')
            echo 'selected'; 
        ?>>4</option>
        <option value="5"
        <?php
          if($res['seriepei1']=='5')
            echo 'selected'; 
        ?>>5</option>
        <option value="6"
        <?php
          if($res['seriepei1']=='6')
            echo 'selected'; 
        ?>>6</option>
      </select><br>
      <select class="form-control" name="treino['seriepei2']">
        <option selected=""></option>
        <option value="1"
        <?php
          if($res['seriepei2']=='1')
            echo 'selected'; 
        ?>>1</option>
        <option value="2"
        <?php
          if($res['seriepei2']=='2')
            echo 'selected'; 
        ?>>2</option>
        <option value="3"
        <?php
          if($res['seriepei2']=='3')
            echo 'selected'; 
        ?>>3</option>
        <option value="4"
        <?php
          if($res['seriepei2']=='4')
            echo 'selected'; 
        ?>>4</option>
        <option value="5"
        <?php
          if($res['seriepei2']=='5')
            echo 'selected'; 
        ?>>5</option>
        <option value="6"
        <?php
          if($res['seriepei2']=='6')
            echo 'selected'; 
        ?>>6</option>
      </select><br>
      <select class="form-control" name="treino['seriepei3']">
        <option selected=""></option>
        <option value="1"
        <?php
          if($res['seriepei3']=='1')
            echo 'selected'; 
        ?>>1</option>
        <option value="2"
        <?php
          if($res['seriepei3']=='2')
            echo 'selected'; 
        ?>>2</option>
        <option value="3"
        <?php
          if($res['seriepei3']=='3')
            echo 'selected'; 
        ?>>3</option>
        <option value="4"
        <?php
          if($res['seriepei3']=='4')
            echo 'selected'; 
        ?>>4</option>
        <option value="5"
        <?php
          if($res['seriepei3']=='5')
            echo 'selected'; 
        ?>>5</option>
        <option value="6"
        <?php
          if($res['seriepei3']=='6')
            echo 'selected'; 
        ?>>6</option>
      </select><br>
      <select class="form-control" name="treino['seriepei4']">
        <option selected=""></option>
        <option value="1"
        <?php
          if($res['seriepei4']=='1')
            echo 'selected'; 
        ?>>1</option>
        <option value="2"
        <?php
          if($res['seriepei4']=='2')
            echo 'selected'; 
        ?>>2</option>
        <option value="3"
        <?php
          if($res['seriepei4']=='3')
            echo 'selected'; 
        ?>>3</option>
        <option value="4"
        <?php
          if($res['seriepei4']=='4')
            echo 'selected'; 
        ?>>4</option>
        <option value="5"
        <?php
          if($res['seriepei4']=='5')
            echo 'selected'; 
        ?>>5</option>
        <option value="6"
        <?php
          if($res['seriepei4']=='6')
            echo 'selected'; 
        ?>>6</option>
      </select><br>
    </div>
 
    <div class="form-group col-md-1">
      <label>Repetições</label>
      <select class="form-control" name="treino['repetpei1']">
        <option selected=""></option>
        <option value="5"
        <?php
          if($res['repetpei1']=='5')
            echo 'selected'; 
        ?>>5</option>
        <option value="10"
        <?php
          if($res['repetpei1']=='10')
            echo 'selected'; 
        ?>>10</option>
        <option value="15"
        <?php
          if($res['repetpei1']=='15')
            echo 'selected'; 
        ?>>15</option>
        <option value="20"
        <?php
          if($res['repetpei1']=='20')
            echo 'selected'; 
        ?>>20</option>
      </select><br>
      <select class="form-control" name="treino['repetpei2']">
        <option selected=""></option>
        <option value="5"
        <?php
          if($res['repetpei2']=='5')
            echo 'selected'; 
        ?>>5</option>
        <option value="10"
        <?php
          if($res['repetpei2']=='10')
            echo 'selected'; 
        ?>>10</option>
        <option value="15"
        <?php
          if($res['repetpei2']=='15')
            echo 'selected'; 
        ?>>15</option>
        <option value="20"
        <?php
          if($res['repetpei2']=='20')
            echo 'selected'; 
        ?>>20</option>
      </select><br>
      <select class="form-control" name="treino['repetpei3']">
        <option selected=""></option>
        <option value="5"
        <?php
          if($res['repetpei3']=='5')
            echo 'selected'; 
        ?>>5</option>
        <option value="10"
        <?php
          if($res['repetpei3']=='10')
            echo 'selected'; 
        ?>>10</option>
        <option value="15"
        <?php
          if($res['repetpei3']=='15')
            echo 'selected'; 
        ?>>15</option>
        <option value="20"
        <?php
          if($res['repetpei3']=='20')
            echo 'selected'; 
        ?>>20</option>
      </select><br>
      <select class="form-control" name="treino['repetpei4']">
        <option selected=""></option>
        <option value="5"
        <?php
          if($res['repetpei4']=='5')
            echo 'selected'; 
        ?>>5</option>
        <option value="10"
        <?php
          if($res['repetpei4']=='10')
            echo 'selected'; 
        ?>>10</option>
        <option value="15"
        <?php
          if($res['repetpei4']=='15')
            echo 'selected'; 
        ?>>15</option>
        <option value="20"
        <?php
          if($res['repetpei4']=='20')
            echo 'selected'; 
        ?>>20</option>
      </select><br>
    </div>
 
    <div class="form-group col-md-2">
      <label for="costas">Costas - Exercício</label>
      <select class="form-control" name="treino['costas1']">
        <option selected=""> - </option>
        <option value="Puxador"
        <?php
          if($res['costas1']=='Puxador')
            echo 'selected'; 
        ?>>Puxador</option>
        <option value="Remada Baixa"
        <?php
          if($res['costas1']=='Remada Baixa')
            echo 'selected'; 
        ?>>Remada Baixa</option>
        <option value="Remada Unilateral"
        <?php
          if($res['costas1']=='Remada Unilateral')
            echo 'selected'; 
        ?>>Remada Unilateral</option>
        <option value="Crucifixo Invertido"
        <?php
          if($res['costas1']=='Crucifixo Invertido')
            echo 'selected'; 
        ?>>Crucifixo Invertido</option>
        <option value="Pullover"
        <?php
          if($res['costas1']=='Pullover')
            echo 'selected'; 
        ?>>Pullover</option>
        <option value="Barra Fixa"
        <?php
          if($res['costas1']=='Barra Fixa')
            echo 'selected'; 
        ?>>Barra Fixa</option>
      </select><br>
      <select class="form-control" name="treino['costas2']">
        <option selected=""> - </option>
        <option value="Puxador"
        <?php
          if($res['costas2']=='Puxador')
            echo 'selected'; 
        ?>>Puxador</option>
        <option value="Remada Baixa"
        <?php
          if($res['costas2']=='Remada Baixa')
            echo 'selected'; 
        ?>>Remada Baixa</option>
        <option value="Remada Unilateral"
        <?php
          if($res['costas2']=='Remada Unilateral')
            echo 'selected'; 
        ?>>Remada Unilateral</option>
        <option value="Crucifixo Invertido"
        <?php
          if($res['costas2']=='Crucifixo Invertido')
            echo 'selected'; 
        ?>>Crucifixo Invertido</option>
        <option value="Pullover"
        <?php
          if($res['costas2']=='Pullover')
            echo 'selected'; 
        ?>>Pullover</option>
        <option value="Barra Fixa"
        <?php
          if($res['costas2']=='Barra Fixa')
            echo 'selected'; 
        ?>>Barra Fixa</option>
      </select><br>
      <select class="form-control" name="treino['costas3']">
        <option selected=""> - </option>
        <option value="Puxador"
        <?php
          if($res['costas3']=='Puxador')
            echo 'selected'; 
        ?>>Puxador</option>
        <option value="Remada Baixa"
        <?php
          if($res['costas3']=='Remada Baixa')
            echo 'selected'; 
        ?>>Remada Baixa</option>
        <option value="Remada Unilateral"
        <?php
          if($res['costas3']=='Remada Unilateral')
            echo 'selected'; 
        ?>>Remada Unilateral</option>
        <option value="Crucifixo Invertido"
        <?php
          if($res['costas3']=='Crucifixo Invertido')
            echo 'selected'; 
        ?>>Crucifixo Invertido</option>
        <option value="Pullover"
        <?php
          if($res['costas3']=='Pullover')
            echo 'selected'; 
        ?>>Pullover</option>
        <option value="Barra Fixa"
        <?php
          if($res['costas3']=='Barra Fixa')
            echo 'selected'; 
        ?>>Barra Fixa</option>
      </select><br>
      <select class="form-control" name="treino['costas4']">
        <option selected=""> - </option>
        <option value="Puxador"
        <?php
          if($res['costas4']=='Puxador')
            echo 'selected'; 
        ?>>Puxador</option>
        <option value="Remada Baixa"
        <?php
          if($res['costas4']=='Remada Baixa')
            echo 'selected'; 
        ?>>Remada Baixa</option>
        <option value="Remada Unilateral"
        <?php
          if($res['costas4']=='Remada Unilateral')
            echo 'selected'; 
        ?>>Remada Unilateral</option>
        <option value="Crucifixo Invertido"
        <?php
          if($res['costas4']=='Crucifixo Invertido')
            echo 'selected'; 
        ?>>Crucifixo Invertido</option>
        <option value="Pullover"
        <?php
          if($res['costas4']=='Pullover')
            echo 'selected'; 
        ?>>Pullover</option>
        <option value="Barra Fixa"
        <?php
          if($res['costas4']=='Barra Fixa')
            echo 'selected'; 
        ?>>Barra Fixa</option>
      </select><br>
    </div>

    <div class="form-group col-md-1">
      <label>Série</label>
      <select class="form-control" name="treino['seriecos1']">
        <option selected=""></option>
        <option value="1"
        <?php
          if($res['seriecos1']=='1')
            echo 'selected'; 
        ?>>1</option>
        <option value="2"
        <?php
          if($res['seriecos1']=='2')
            echo 'selected'; 
        ?>>2</option>
        <option value="3"
        <?php
          if($res['seriecos1']=='3')
            echo 'selected'; 
        ?>>3</option>
        <option value="4"
        <?php
          if($res['seriecos1']=='4')
            echo 'selected'; 
        ?>>4</option>
        <option value="5"
        <?php
          if($res['seriecos1']=='5')
            echo 'selected'; 
        ?>>5</option>
        <option value="6"
        <?php
          if($res['seriecos1']=='6')
            echo 'selected'; 
        ?>>6</option>
      </select><br>
      <select class="form-control" name="treino['seriecos2']">
        <option selected=""></option>
        <option value="1"
        <?php
          if($res['seriecos2']=='1')
            echo 'selected'; 
        ?>>1</option>
        <option value="2"
        <?php
          if($res['seriecos2']=='2')
            echo 'selected'; 
        ?>>2</option>
        <option value="3"
        <?php
          if($res['seriecos2']=='3')
            echo 'selected'; 
        ?>>3</option>
        <option value="4"
        <?php
          if($res['seriecos2']=='4')
            echo 'selected'; 
        ?>>4</option>
        <option value="5"
        <?php
          if($res['seriecos2']=='5')
            echo 'selected'; 
        ?>>5</option>
        <option value="6"
        <?php
          if($res['seriecos2']=='6')
            echo 'selected'; 
        ?>>6</option>
      </select><br>
      <select class="form-control" name="treino['seriecos3']">
        <option selected=""></option>
        <option value="1"
        <?php
          if($res['seriecos3']=='1')
            echo 'selected'; 
        ?>>1</option>
        <option value="2"
        <?php
          if($res['seriecos3']=='2')
            echo 'selected'; 
        ?>>2</option>
        <option value="3"
        <?php
          if($res['seriecos3']=='3')
            echo 'selected'; 
        ?>>3</option>
        <option value="4"
        <?php
          if($res['seriecos3']=='4')
            echo 'selected'; 
        ?>>4</option>
        <option value="5"
        <?php
          if($res['seriecos3']=='5')
            echo 'selected'; 
        ?>>5</option>
        <option value="6"
        <?php
          if($res['seriecos3']=='6')
            echo 'selected'; 
        ?>>6</option>
      </select><br>
      <select class="form-control" name="treino['seriecos4']">
        <option selected=""></option>
        <option value="1"
        <?php
          if($res['seriecos4']=='1')
            echo 'selected'; 
        ?>>1</option>
        <option value="2"
        <?php
          if($res['seriecos4']=='2')
            echo 'selected'; 
        ?>>2</option>
        <option value="3"
        <?php
          if($res['seriecos4']=='3')
            echo 'selected'; 
        ?>>3</option>
        <option value="4"
        <?php
          if($res['seriecos4']=='4')
            echo 'selected'; 
        ?>>4</option>
        <option value="5"
        <?php
          if($res['seriecos4']=='5')
            echo 'selected'; 
        ?>>5</option>
        <option value="6"
        <?php
          if($res['seriecos4']=='6')
            echo 'selected'; 
        ?>>6</option>
      </select><br>
    </div>

    <div class="form-group col-md-1">
      <label>Repetições</label>
      <select class="form-control" name="treino['repetcos1']">
        <option selected=""></option>
        <option value="5"
        <?php
          if($res['repetcos1']=='5')
            echo 'selected'; 
        ?>>5</option>
        <option value="10"
        <?php
          if($res['repetcos1']=='10')
            echo 'selected'; 
        ?>>10</option>
        <option value="15"
        <?php
          if($res['repetcos1']=='15')
            echo 'selected'; 
        ?>>15</option>
        <option value="20"
        <?php
          if($res['repetcos1']=='20')
            echo 'selected'; 
        ?>>20</option>
      </select><br>
      <select class="form-control" name="treino['repetcos2']">
        <option selected=""></option>
        <option value="5"
        <?php
          if($res['repetcos2']=='5')
            echo 'selected'; 
        ?>>5</option>
        <option value="10"
        <?php
          if($res['repetcos2']=='10')
            echo 'selected'; 
        ?>>10</option>
        <option value="15"
        <?php
          if($res['repetcos2']=='15')
            echo 'selected'; 
        ?>>15</option>
        <option value="20"
        <?php
          if($res['repetcos2']=='20')
            echo 'selected'; 
        ?>>20</option>
      </select><br>
      <select class="form-control" name="treino['repetcos3']">
        <option selected=""></option>
        <option value="5"
        <?php
          if($res['repetcos3']=='5')
            echo 'selected'; 
        ?>>5</option>
        <option value="10"
        <?php
          if($res['repetcos3']=='10')
            echo 'selected'; 
        ?>>10</option>
        <option value="15"
        <?php
          if($res['repetcos3']=='15')
            echo 'selected'; 
        ?>>15</option>
        <option value="20"
        <?php
          if($res['repetcos3']=='20')
            echo 'selected'; 
        ?>>20</option>
      </select><br>
      <select class="form-control" name="treino['repetcos4']">
        <option selected=""></option>
        <option value="5"
        <?php
          if($res['repetcos4']=='5')
            echo 'selected'; 
        ?>>5</option>
        <option value="10"
        <?php
          if($res['repetcos4']=='10')
            echo 'selected'; 
        ?>>10</option>
        <option value="15"
        <?php
          if($res['repetcos4']=='15')
            echo 'selected'; 
        ?>>15</option>
        <option value="20"
        <?php
          if($res['repetcos4']=='20')
            echo 'selected'; 
        ?>>20</option>
      </select><br>
    </div>

    <div class="form-group col-md-2">
      <label for="perna">Perna - Exercício</label>
      <select class="form-control" name="treino['perna1']">
        <option selected=""> - </option>
        <option value="Agachamento"
        <?php
          if($res['perna1']=='Agachamento')
            echo 'selected'; 
        ?>>Agachamento</option>
        <option value="Extensora"
        <?php
          if($res['perna1']=='Extensora')
            echo 'selected'; 
        ?>>Extensora</option>
        <option value="Flexora"
        <?php
          if($res['perna1']=='Flexora')
            echo 'selected'; 
        ?>>Flexora</option>
        <option value="Adutora"
        <?php
          if($res['perna1']=='Adutora')
            echo 'selected'; 
        ?>>Adutora</option>
        <option value="Abdutora"
        <?php
          if($res['perna1']=='Abdutora')
            echo 'selected'; 
        ?>>Abdutora</option>
        <option value="Leg-Press"
        <?php
          if($res['perna1']=='Leg-Press')
            echo 'selected'; 
        ?>>Leg-Press</option>
        <option value="Panturrilha"
        <?php
          if($res['perna1']=='Panturrilha')
            echo 'selected'; 
        ?>>Panturrilha</option>
      </select><br>
      <select class="form-control" name="treino['perna2']">
        <option selected=""> - </option>
        <option value="Agachamento"
        <?php
          if($res['perna2']=='Agachamento')
            echo 'selected'; 
        ?>>Agachamento</option>
        <option value="Extensora"
        <?php
          if($res['perna2']=='Extensora')
            echo 'selected'; 
        ?>>Extensora</option>
        <option value="Flexora"
        <?php
          if($res['perna2']=='Flexora')
            echo 'selected'; 
        ?>>Flexora</option>
        <option value="Adutora"
        <?php
          if($res['perna2']=='Adutora')
            echo 'selected'; 
        ?>>Adutora</option>
        <option value="Abdutora"
        <?php
          if($res['perna2']=='Abdutora')
            echo 'selected'; 
        ?>>Abdutora</option>
        <option value="Leg-Press"
        <?php
          if($res['perna2']=='Leg-Press')
            echo 'selected'; 
        ?>>Leg-Press</option>
        <option value="Panturrilha"
        <?php
          if($res['perna2']=='Panturrilha')
            echo 'selected'; 
        ?>>Panturrilha</option>
      </select><br>
      <select class="form-control" name="treino['perna3']">
        <option selected=""> - </option>
        <option value="Agachamento"
        <?php
          if($res['perna3']=='Agachamento')
            echo 'selected'; 
        ?>>Agachamento</option>
        <option value="Extensora"
        <?php
          if($res['perna3']=='Extensora')
            echo 'selected'; 
        ?>>Extensora</option>
        <option value="Flexora"
        <?php
          if($res['perna3']=='Flexora')
            echo 'selected'; 
        ?>>Flexora</option>
        <option value="Adutora"
        <?php
          if($res['perna3']=='Adutora')
            echo 'selected'; 
        ?>>Adutora</option>
        <option value="Abdutora"
        <?php
          if($res['perna3']=='Abdutora')
            echo 'selected'; 
        ?>>Abdutora</option>
        <option value="Leg-Press"
        <?php
          if($res['perna3']=='Leg-Press')
            echo 'selected'; 
        ?>>Leg-Press</option>
        <option value="Panturrilha"
        <?php
          if($res['perna3']=='Panturrilha')
            echo 'selected'; 
        ?>>Panturrilha</option>
      </select><br>
      <select class="form-control" name="treino['perna4']">
        <option selected=""> - </option>
        <option value="Agachamento"
        <?php
          if($res['perna4']=='Agachamento')
            echo 'selected'; 
        ?>>Agachamento</option>
        <option value="Extensora"
        <?php
          if($res['perna4']=='Extensora')
            echo 'selected'; 
        ?>>Extensora</option>
        <option value="Flexora"
        <?php
          if($res['perna4']=='Flexora')
            echo 'selected'; 
        ?>>Flexora</option>
        <option value="Adutora"
        <?php
          if($res['perna4']=='Adutora')
            echo 'selected'; 
        ?>>Adutora</option>
        <option value="Abdutora"
        <?php
          if($res['perna4']=='Abdutora')
            echo 'selected'; 
        ?>>Abdutora</option>
        <option value="Leg-Press"
        <?php
          if($res['perna4']=='Leg-Press')
            echo 'selected'; 
        ?>>Leg-Press</option>
        <option value="Panturrilha"
        <?php
          if($res['perna4']=='Panturrilha')
            echo 'selected'; 
        ?>>Panturrilha</option>
      </select><br>
    </div>

    <div class="form-group col-md-1">
      <label>Série</label>
      <select class="form-control" name="treino['serieper1']">
        <option selected=""></option>
        <option value="1"
        <?php
          if($res['serieper1']=='1')
            echo 'selected'; 
        ?>>1</option>
        <option value="2"
        <?php
          if($res['serieper1']=='2')
            echo 'selected'; 
        ?>>2</option>
        <option value="3"
        <?php
          if($res['serieper1']=='3')
            echo 'selected'; 
        ?>>3</option>
        <option value="4"
        <?php
          if($res['serieper1']=='4')
            echo 'selected'; 
        ?>>4</option>
        <option value="5"
        <?php
          if($res['serieper1']=='5')
            echo 'selected'; 
        ?>>5</option>
        <option value="6"
        <?php
          if($res['serieper1']=='6')
            echo 'selected'; 
        ?>>6</option>
      </select><br>
      <select class="form-control" name="treino['serieper2']">
        <option selected=""></option>
        <option value="1"
        <?php
          if($res['serieper2']=='1')
            echo 'selected'; 
        ?>>1</option>
        <option value="2"
        <?php
          if($res['serieper2']=='2')
            echo 'selected'; 
        ?>>2</option>
        <option value="3"
        <?php
          if($res['serieper2']=='3')
            echo 'selected'; 
        ?>>3</option>
        <option value="4"
        <?php
          if($res['serieper2']=='4')
            echo 'selected'; 
        ?>>4</option>
        <option value="5"
        <?php
          if($res['serieper2']=='5')
            echo 'selected'; 
        ?>>5</option>
        <option value="6"
        <?php
          if($res['serieper2']=='6')
            echo 'selected'; 
        ?>>6</option>
      </select><br>
      <select class="form-control" name="treino['serieper3']">
        <option selected=""></option>
        <option value="1"
        <?php
          if($res['serieper3']=='1')
            echo 'selected'; 
        ?>>1</option>
        <option value="2"
        <?php
          if($res['serieper3']=='2')
            echo 'selected'; 
        ?>>2</option>
        <option value="3"
        <?php
          if($res['serieper3']=='3')
            echo 'selected'; 
        ?>>3</option>
        <option value="4"
        <?php
          if($res['serieper3']=='4')
            echo 'selected'; 
        ?>>4</option>
        <option value="5"
        <?php
          if($res['serieper3']=='5')
            echo 'selected'; 
        ?>>5</option>
        <option value="6"
        <?php
          if($res['serieper3']=='6')
            echo 'selected'; 
        ?>>6</option>
      </select><br>
      <select class="form-control" name="treino['serieper4']">
        <option selected=""></option>
       <option value="1"
        <?php
          if($res['serieper4']=='1')
            echo 'selected'; 
        ?>>1</option>
        <option value="2"
        <?php
          if($res['serieper4']=='2')
            echo 'selected'; 
        ?>>2</option>
        <option value="3"
        <?php
          if($res['serieper4']=='3')
            echo 'selected'; 
        ?>>3</option>
        <option value="4"
        <?php
          if($res['serieper4']=='4')
            echo 'selected'; 
        ?>>4</option>
        <option value="5"
        <?php
          if($res['serieper4']=='5')
            echo 'selected'; 
        ?>>5</option>
        <option value="6"
        <?php
          if($res['serieper4']=='6')
            echo 'selected'; 
        ?>>6</option>
      </select><br>
    </div>

    <div class="form-group col-md-1">
      <label>Repetições</label>
      <select class="form-control" name="treino['repetper1']">
        <option selected=""></option>
        <option value="5"
        <?php
          if($res['repetper1']=='5')
            echo 'selected'; 
        ?>>5</option>
        <option value="10"
        <?php
          if($res['repetper1']=='10')
            echo 'selected'; 
        ?>>10</option>
        <option value="15"
        <?php
          if($res['repetper1']=='15')
            echo 'selected'; 
        ?>>15</option>
        <option value="20"
        <?php
          if($res['repetper1']=='20')
            echo 'selected'; 
        ?>>20</option>
      </select><br>
      <select class="form-control" name="treino['repetper2']">
        <option selected=""></option>
        <option value="5"
        <?php
          if($res['repetper2']=='5')
            echo 'selected'; 
        ?>>5</option>
        <option value="10"
        <?php
          if($res['repetper2']=='10')
            echo 'selected'; 
        ?>>10</option>
        <option value="15"
        <?php
          if($res['repetper2']=='15')
            echo 'selected'; 
        ?>>15</option>
        <option value="20"
        <?php
          if($res['repetper2']=='20')
            echo 'selected'; 
        ?>>20</option>
      </select><br>
      <select class="form-control" name="treino['repetper3']">
        <option selected=""></option>
        <option value="5"
        <?php
          if($res['repetper3']=='5')
            echo 'selected'; 
        ?>>5</option>
        <option value="10"
        <?php
          if($res['repetper3']=='10')
            echo 'selected'; 
        ?>>10</option>
        <option value="15"
        <?php
          if($res['repetper3']=='15')
            echo 'selected'; 
        ?>>15</option>
        <option value="20"
        <?php
          if($res['repetper3']=='20')
            echo 'selected'; 
        ?>>20</option>
      </select><br>
      <select class="form-control" name="treino['repetper4']">
        <option selected=""></option>
        <option value="5"
        <?php
          if($res['repetper4']=='5')
            echo 'selected'; 
        ?>>5</option>
        <option value="10"
        <?php
          if($res['repetper4']=='10')
            echo 'selected'; 
        ?>>10</option>
        <option value="15"
        <?php
          if($res['repetper4']=='15')
            echo 'selected'; 
        ?>>15</option>
        <option value="20"
        <?php
          if($res['repetper4']=='20')
            echo 'selected'; 
        ?>>20</option>
      </select><br>
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-2">
        <label for="biceps">Bíceps - Exercício</label>
        <select class="form-control" name="treino['biceps1']">
          <option selected=""> - </option>
          <option value="Rosca Direta"
          <?php
            if($res['biceps1']=='Rosca Direta')
              echo 'selected'; 
          ?>>Rosca Direta</option>
          <option value="Rosca Alterada"
          <?php
            if($res['biceps1']=='Rosca Alterada')
              echo 'selected'; 
          ?>>Rosca Alternada</option>
          <option value="Rosca Invertida"
          <?php
            if($res['biceps1']=='Rosca Invertida')
              echo 'selected'; 
          ?>>Rosca Invertida</option>
          <option value="Rosca Concentrada"
          <?php
            if($res['biceps1']=='Rosca Concentrada')
              echo 'selected'; 
          ?>>Rosca Concentrada</option>
          <option value="Rosca Martelo"
          <?php
            if($res['biceps1']=='Rosca Martelo')
              echo 'selected'; 
          ?>>Rosca Martelo</option>
          <option value="Rosca-Scott"
          <?php
            if($res['biceps1']=='Rosca-Scott')
              echo 'selected'; 
          ?>>Rosca-Scott</option>
          <option value="Rosca Cross-Over"
          <?php
            if($res['biceps1']=='Rosca Cross-Over')
              echo 'selected'; 
          ?>>Rosca Cross-Over</option>
        </select><br>
        <select class="form-control" name="treino['biceps2']">
          <option selected=""> - </option>
          <option value="Rosca Direta"
          <?php
            if($res['biceps2']=='Rosca Direta')
              echo 'selected'; 
          ?>>Rosca Direta</option>
          <option value="Rosca Alterada"
          <?php
            if($res['biceps2']=='Rosca Alterada')
              echo 'selected'; 
          ?>>Rosca Alternada</option>
          <option value="Rosca Invertida"
          <?php
            if($res['biceps2']=='Rosca Invertida')
              echo 'selected'; 
          ?>>Rosca Invertida</option>
          <option value="Rosca Concentrada"
          <?php
            if($res['biceps2']=='Rosca Concentrada')
              echo 'selected'; 
          ?>>Rosca Concentrada</option>
          <option value="Rosca Martelo"
          <?php
            if($res['biceps2']=='Rosca Martelo')
              echo 'selected'; 
          ?>>Rosca Martelo</option>
          <option value="Rosca-Scott"
          <?php
            if($res['biceps2']=='Rosca-Scott')
              echo 'selected'; 
          ?>>Rosca-Scott</option>
          <option value="Rosca Cross-Over"
          <?php
            if($res['biceps2']=='Rosca Cross-Over')
              echo 'selected'; 
          ?>>Rosca Cross-Over</option>
        </select><br>
        <select class="form-control" name="treino['biceps3']">
          <option selected=""> - </option>
          <option value="Rosca Direta"
          <?php
            if($res['biceps3']=='Rosca Direta')
              echo 'selected'; 
          ?>>Rosca Direta</option>
          <option value="Rosca Alterada"
          <?php
            if($res['biceps3']=='Rosca Alterada')
              echo 'selected'; 
          ?>>Rosca Alternada</option>
          <option value="Rosca Invertida"
          <?php
            if($res['biceps3']=='Rosca Invertida')
              echo 'selected'; 
          ?>>Rosca Invertida</option>
          <option value="Rosca Concentrada"
          <?php
            if($res['biceps3']=='Rosca Concentrada')
              echo 'selected'; 
          ?>>Rosca Concentrada</option>
          <option value="Rosca Martelo"
          <?php
            if($res['biceps3']=='Rosca Martelo')
              echo 'selected'; 
          ?>>Rosca Martelo</option>
          <option value="Rosca-Scott"
          <?php
            if($res['biceps3']=='Rosca-Scott')
              echo 'selected'; 
          ?>>Rosca-Scott</option>
          <option value="Rosca Cross-Over"
          <?php
            if($res['biceps3']=='Rosca Cross-Over')
              echo 'selected'; 
          ?>>Rosca Cross-Over</option>
        </select><br>
        <select class="form-control" name="treino['biceps4']">
          <option selected=""> - </option>
         <option value="Rosca Direta"
          <?php
            if($res['biceps4']=='Rosca Direta')
              echo 'selected'; 
          ?>>Rosca Direta</option>
          <option value="Rosca Alterada"
          <?php
            if($res['biceps4']=='Rosca Alterada')
              echo 'selected'; 
          ?>>Rosca Alternada</option>
          <option value="Rosca Invertida"
          <?php
            if($res['biceps4']=='Rosca Invertida')
              echo 'selected'; 
          ?>>Rosca Invertida</option>
          <option value="Rosca Concentrada"
          <?php
            if($res['biceps4']=='Rosca Concentrada')
              echo 'selected'; 
          ?>>Rosca Concentrada</option>
          <option value="Rosca Martelo"
          <?php
            if($res['biceps4']=='Rosca Martelo')
              echo 'selected'; 
          ?>>Rosca Martelo</option>
          <option value="Rosca-Scott"
          <?php
            if($res['biceps4']=='Rosca-Scott')
              echo 'selected'; 
          ?>>Rosca-Scott</option>
          <option value="Rosca Cross-Over"
          <?php
            if($res['biceps4']=='Rosca Cross-Over')
              echo 'selected'; 
          ?>>Rosca Cross-Over</option>
        </select><br>
      </div>

      <div class="form-group col-md-1">
        <label>Série</label>
        <select class="form-control" name="treino['seriebic1']">
          <option selected=""></option>
          <option value="1"
          <?php
            if($res['seriebic1']=='1')
              echo 'selected'; 
          ?>>1</option>
          <option value="2"
          <?php
            if($res['seriebic1']=='2')
              echo 'selected'; 
          ?>>2</option>
          <option value="3"
          <?php
            if($res['seriebic1']=='3')
              echo 'selected'; 
          ?>>3</option>
          <option value="4"
          <?php
            if($res['seriebic1']=='4')
              echo 'selected'; 
          ?>>4</option>
          <option value="5"
          <?php
            if($res['seriebic1']=='5')
              echo 'selected'; 
          ?>>5</option>
          <option value="6"
          <?php
            if($res['seriebic1']=='6')
              echo 'selected'; 
          ?>>6</option>
        </select><br>
        <select class="form-control" name="treino['seriebic2']">
          <option selected=""></option>
          <option value="1"
          <?php
            if($res['seriebic2']=='1')
              echo 'selected'; 
          ?>>1</option>
          <option value="2"
          <?php
            if($res['seriebic2']=='2')
              echo 'selected'; 
          ?>>2</option>
          <option value="3"
          <?php
            if($res['seriebic2']=='3')
              echo 'selected'; 
          ?>>3</option>
          <option value="4"
          <?php
            if($res['seriebic2']=='4')
              echo 'selected'; 
          ?>>4</option>
          <option value="5"
          <?php
            if($res['seriebic2']=='5')
              echo 'selected'; 
          ?>>5</option>
          <option value="6"
          <?php
            if($res['seriebic2']=='6')
              echo 'selected'; 
          ?>>6</option>
        </select><br>
        <select class="form-control" name="treino['seriebic3']">
          <option selected=""></option>
          <option value="1"
          <?php
            if($res['seriebic3']=='1')
              echo 'selected'; 
          ?>>1</option>
          <option value="2"
          <?php
            if($res['seriebic3']=='2')
              echo 'selected'; 
          ?>>2</option>
          <option value="3"
          <?php
            if($res['seriebic3']=='3')
              echo 'selected'; 
          ?>>3</option>
          <option value="4"
          <?php
            if($res['seriebic3']=='4')
              echo 'selected'; 
          ?>>4</option>
          <option value="5"
          <?php
            if($res['seriebic3']=='5')
              echo 'selected'; 
          ?>>5</option>
          <option value="6"
          <?php
            if($res['seriebic3']=='6')
              echo 'selected'; 
          ?>>6</option>
        </select><br>
        <select class="form-control" name="treino['seriebic4']">
          <option selected=""></option>
          <option value="1"
          <?php
            if($res['seriebic4']=='1')
              echo 'selected'; 
          ?>>1</option>
          <option value="2"
          <?php
            if($res['seriebic4']=='2')
              echo 'selected'; 
          ?>>2</option>
          <option value="3"
          <?php
            if($res['seriebic4']=='3')
              echo 'selected'; 
          ?>>3</option>
          <option value="4"
          <?php
            if($res['seriebic4']=='4')
              echo 'selected'; 
          ?>>4</option>
          <option value="5"
          <?php
            if($res['seriebic4']=='5')
              echo 'selected'; 
          ?>>5</option>
          <option value="6"
          <?php
            if($res['seriebic4']=='6')
              echo 'selected'; 
          ?>>6</option>
        </select><br>
      </div>

      <div class="form-group col-md-1">
        <label>Repetições</label>
        <select class="form-control" name="treino['repetbic1']">
          <option selected=""></option>
          <option value="5"
          <?php
            if($res['repetbic1']=='5')
              echo 'selected'; 
          ?>>5</option>
          <option value="10"
          <?php
            if($res['repetbic1']=='10')
              echo 'selected'; 
          ?>>10</option>
          <option value="15"
          <?php
            if($res['repetbic1']=='15')
              echo 'selected'; 
          ?>>15</option>
          <option value="20"
          <?php
            if($res['repetbic1']=='20')
              echo 'selected'; 
          ?>>20</option>
        </select><br>
        <select class="form-control" name="treino['repetbic2']">
          <option selected=""></option>
          <option value="5"
          <?php
            if($res['repetbic2']=='5')
              echo 'selected'; 
          ?>>5</option>
          <option value="10"
          <?php
            if($res['repetbic2']=='10')
              echo 'selected'; 
          ?>>10</option>
          <option value="15"
          <?php
            if($res['repetbic2']=='15')
              echo 'selected'; 
          ?>>15</option>
          <option value="20"
          <?php
            if($res['repetbic2']=='20')
              echo 'selected'; 
          ?>>20</option>
        </select><br>
        <select class="form-control" name="treino['repetbic3']">
          <option selected=""></option>
          <option value="5"
          <?php
            if($res['repetbic3']=='5')
              echo 'selected'; 
          ?>>5</option>
          <option value="10"
          <?php
            if($res['repetbic3']=='10')
              echo 'selected'; 
          ?>>10</option>
          <option value="15"
          <?php
            if($res['repetbic3']=='15')
              echo 'selected'; 
          ?>>15</option>
          <option value="20"
          <?php
            if($res['repetbic3']=='20')
              echo 'selected'; 
          ?>>20</option>
        </select><br>
        <select class="form-control" name="treino['repetbic4']">
          <option selected=""></option>
          <option value="5"
          <?php
            if($res['repetbic4']=='5')
              echo 'selected'; 
          ?>>5</option>
          <option value="10"
          <?php
            if($res['repetbic4']=='10')
              echo 'selected'; 
          ?>>10</option>
          <option value="15"
          <?php
            if($res['repetbic4']=='15')
              echo 'selected'; 
          ?>>15</option>
          <option value="20"
          <?php
            if($res['repetbic4']=='20')
              echo 'selected'; 
          ?>>20</option>
        </select><br>
      </div>

      <div class="form-group col-md-2">
        <label for="triceps">Triceps - Exercício</label>
        <select class="form-control" name="treino['triceps1']">
          <option selected=""> - </option>
          <option value="Triceps Polia"
          <?php
            if($res['triceps1']=='Triceps Polia')
              echo 'selected'; 
          ?>>Triceps Polia</option>
          <option value="Triceps Corda"
          <?php
            if($res['triceps1']=='Triceps Corda')
              echo 'selected'; 
          ?>>Triceps Corda</option>
          <option value="Triceps Testa"
          <?php
            if($res['triceps1']=='Triceps Testa')
              echo 'selected'; 
          ?>>Triceps Testa</option>
          <option value="Triceps Francês"
          <?php
            if($res['triceps1']=='Triceps Francês')
              echo 'selected'; 
          ?>>Triceps Francês</option>
          <option value="Triceps Supinado"
          <?php
            if($res['triceps1']=='Triceps Supinado')
              echo 'selected'; 
          ?>>Triceps Supinado</option>
          <option value="Triceps Paralela"
          <?php
            if($res['triceps1']=='Triceps Paralela')
              echo 'selected'; 
          ?>>Triceps Paralela</option>
          <option value="Triceps Banco"
          <?php
            if($res['triceps1']=='Triceps Banco')
              echo 'selected'; 
          ?>>Triceps Banco</option>
        </select><br>
        <select class="form-control" name="treino['triceps2']">
          <option selected=""> - </option>
          <option value="Triceps Polia"
          <?php
            if($res['triceps2']=='Triceps Polia')
              echo 'selected'; 
          ?>>Triceps Polia</option>
          <option value="Triceps Corda"
          <?php
            if($res['triceps2']=='Triceps Corda')
              echo 'selected'; 
          ?>>Triceps Corda</option>
          <option value="Triceps Testa"
          <?php
            if($res['triceps2']=='Triceps Testa')
              echo 'selected'; 
          ?>>Triceps Testa</option>
          <option value="Triceps Francês"
          <?php
            if($res['triceps2']=='Triceps Francês')
              echo 'selected'; 
          ?>>Triceps Francês</option>
          <option value="Triceps Supinado"
          <?php
            if($res['triceps2']=='Triceps Supinado')
              echo 'selected'; 
          ?>>Triceps Supinado</option>
          <option value="Triceps Paralela"
          <?php
            if($res['triceps2']=='Triceps Paralela')
              echo 'selected'; 
          ?>>Triceps Paralela</option>
          <option value="Triceps Banco"
          <?php
            if($res['triceps2']=='Triceps Banco')
              echo 'selected'; 
          ?>>Triceps Banco</option>
        </select><br>
        <select class="form-control" name="treino['triceps3']">
          <option selected=""> - </option>
          <option value="Triceps Polia"
          <?php
            if($res['triceps3']=='Triceps Polia')
              echo 'selected'; 
          ?>>Triceps Polia</option>
          <option value="Triceps Corda"
          <?php
            if($res['triceps3']=='Triceps Corda')
              echo 'selected'; 
          ?>>Triceps Corda</option>
          <option value="Triceps Testa"
          <?php
            if($res['triceps3']=='Triceps Testa')
              echo 'selected'; 
          ?>>Triceps Testa</option>
          <option value="Triceps Francês"
          <?php
            if($res['triceps3']=='Triceps Francês')
              echo 'selected'; 
          ?>>Triceps Francês</option>
          <option value="Triceps Supinado"
          <?php
            if($res['triceps3']=='Triceps Supinado')
              echo 'selected'; 
          ?>>Triceps Supinado</option>
          <option value="Triceps Paralela"
          <?php
            if($res['triceps3']=='Triceps Paralela')
              echo 'selected'; 
          ?>>Triceps Paralela</option>
          <option value="Triceps Banco"
          <?php
            if($res['triceps3']=='Triceps Banco')
              echo 'selected'; 
          ?>>Triceps Banco</option>
        </select><br>
        <select class="form-control" name="treino['triceps4']">
          <option selected=""> - </option>
          <option value="Triceps Polia"
          <?php
            if($res['triceps4']=='Triceps Polia')
              echo 'selected'; 
          ?>>Triceps Polia</option>
          <option value="Triceps Corda"
          <?php
            if($res['triceps4']=='Triceps Corda')
              echo 'selected'; 
          ?>>Triceps Corda</option>
          <option value="Triceps Testa"
          <?php
            if($res['triceps4']=='Triceps Testa')
              echo 'selected'; 
          ?>>Triceps Testa</option>
          <option value="Triceps Francês"
          <?php
            if($res['triceps4']=='Triceps Francês')
              echo 'selected'; 
          ?>>Triceps Francês</option>
          <option value="Triceps Supinado"
          <?php
            if($res['triceps4']=='Triceps Supinado')
              echo 'selected'; 
          ?>>Triceps Supinado</option>
          <option value="Triceps Paralela"
          <?php
            if($res['triceps4']=='Triceps Paralela')
              echo 'selected'; 
          ?>>Triceps Paralela</option>
          <option value="Triceps Banco"
          <?php
            if($res['triceps4']=='Triceps Banco')
              echo 'selected'; 
          ?>>Triceps Banco</option>
        </select><br>
      </div>

      <div class="form-group col-md-1">
        <label>Série</label>
        <select class="form-control" name="treino['serietri1']">
          <option selected=""></option>
          <option value="1"
          <?php
            if($res['serietri1']=='1')
              echo 'selected'; 
          ?>>1</option>
          <option value="2"
          <?php
            if($res['serietri1']=='2')
              echo 'selected'; 
          ?>>2</option>
          <option value="3"
          <?php
            if($res['serietri1']=='3')
              echo 'selected'; 
          ?>>3</option>
          <option value="4"
          <?php
            if($res['serietri1']=='4')
              echo 'selected'; 
          ?>>4</option>
          <option value="5"
          <?php
            if($res['serietri1']=='5')
              echo 'selected'; 
          ?>>5</option>
          <option value="6"
          <?php
            if($res['serietri1']=='6')
              echo 'selected'; 
          ?>>6</option>
        </select><br>
        <select class="form-control" name="treino['serietri2']">
          <option selected=""></option>
           <option value="1"
          <?php
            if($res['serietri2']=='1')
              echo 'selected'; 
          ?>>1</option>
          <option value="2"
          <?php
            if($res['serietri2']=='2')
              echo 'selected'; 
          ?>>2</option>
          <option value="3"
          <?php
            if($res['serietri2']=='3')
              echo 'selected'; 
          ?>>3</option>
          <option value="4"
          <?php
            if($res['serietri2']=='4')
              echo 'selected'; 
          ?>>4</option>
          <option value="5"
          <?php
            if($res['serietri2']=='5')
              echo 'selected'; 
          ?>>5</option>
          <option value="6"
          <?php
            if($res['serietri2']=='6')
              echo 'selected'; 
          ?>>6</option>
        </select><br>
        <select class="form-control" name="treino['serietri3']">
          <option selected=""></option>
           <option value="1"
          <?php
            if($res['serietri3']=='1')
              echo 'selected'; 
          ?>>1</option>
          <option value="2"
          <?php
            if($res['serietri3']=='2')
              echo 'selected'; 
          ?>>2</option>
          <option value="3"
          <?php
            if($res['serietri3']=='3')
              echo 'selected'; 
          ?>>3</option>
          <option value="4"
          <?php
            if($res['serietri3']=='4')
              echo 'selected'; 
          ?>>4</option>
          <option value="5"
          <?php
            if($res['serietri3']=='5')
              echo 'selected'; 
          ?>>5</option>
          <option value="6"
          <?php
            if($res['serietri3']=='6')
              echo 'selected'; 
          ?>>6</option>
        </select><br>
        <select class="form-control" name="treino['serietri4']">
          <option selected=""></option>
           <option value="1"
          <?php
            if($res['serietri4']=='1')
              echo 'selected'; 
          ?>>1</option>
          <option value="2"
          <?php
            if($res['serietri4']=='2')
              echo 'selected'; 
          ?>>2</option>
          <option value="3"
          <?php
            if($res['serietri4']=='3')
              echo 'selected'; 
          ?>>3</option>
          <option value="4"
          <?php
            if($res['serietri4']=='4')
              echo 'selected'; 
          ?>>4</option>
          <option value="5"
          <?php
            if($res['serietri4']=='5')
              echo 'selected'; 
          ?>>5</option>
          <option value="6"
          <?php
            if($res['serietri4']=='6')
              echo 'selected'; 
          ?>>6</option>
        </select><br>
      </div>

      <div class="form-group col-md-1">
        <label>Repetições</label>
        <select class="form-control" name="treino['repettri1']">
          <option selected=""></option>
          <option value="5"
          <?php
            if($res['repettri1']=='5')
              echo 'selected'; 
          ?>>5</option>
          <option value="10"
          <?php
            if($res['repettri1']=='10')
              echo 'selected'; 
          ?>>10</option>
          <option value="15"
          <?php
            if($res['repettri1']=='15')
              echo 'selected'; 
          ?>>15</option>
          <option value="20"
          <?php
            if($res['repettri1']=='20')
              echo 'selected'; 
          ?>>20</option>
        </select><br>
        <select class="form-control" name="treino['repettri2']">
          <option selected=""></option>
          <option value="5"
          <?php
            if($res['repettri2']=='5')
              echo 'selected'; 
          ?>>5</option>
          <option value="10"
          <?php
            if($res['repettri2']=='10')
              echo 'selected'; 
          ?>>10</option>
          <option value="15"
          <?php
            if($res['repettri2']=='15')
              echo 'selected'; 
          ?>>15</option>
          <option value="20"
          <?php
            if($res['repettri2']=='20')
              echo 'selected'; 
          ?>>20</option>
        </select><br>
        <select class="form-control" name="treino['repettri3']">
          <option selected=""></option>
          <option value="5"
          <?php
            if($res['repettri3']=='5')
              echo 'selected'; 
          ?>>5</option>
          <option value="10"
          <?php
            if($res['repettri3']=='10')
              echo 'selected'; 
          ?>>10</option>
          <option value="15"
          <?php
            if($res['repettri3']=='15')
              echo 'selected'; 
          ?>>15</option>
          <option value="20"
          <?php
            if($res['repettri3']=='20')
              echo 'selected'; 
          ?>>20</option>
        </select><br>
        <select class="form-control" name="treino['repettri4']">
          <option selected=""></option>
          <option value="5"
          <?php
            if($res['repettri4']=='5')
              echo 'selected'; 
          ?>>5</option>
          <option value="10"
          <?php
            if($res['repettri4']=='10')
              echo 'selected'; 
          ?>>10</option>
          <option value="15"
          <?php
            if($res['repettri4']=='15')
              echo 'selected'; 
          ?>>15</option>
          <option value="20"
          <?php
            if($res['repettri4']=='20')
              echo 'selected'; 
          ?>>20</option>
        </select><br>
      </div>

      <div class="form-group col-md-2">
        <label for="ombro">Ombro - Exercício</label>
        <select class="form-control" name="treino['ombro1']">
          <option selected=""> - </option>
          <option value="Desenv. Maquina"
          <?php
            if($res['ombro1']=='Desenv. Maquina')
              echo 'selected'; 
          ?>>Desenv. Maquina</option>
          <option value="Desenv. Barra"
          <?php
            if($res['ombro1']=='Desenv. Barra')
              echo 'selected'; 
          ?>>Desenv. Barra</option>
          <option value="Desenv. Halteres"
          <?php
            if($res['ombro1']=='Desenv. Halteres')
              echo 'selected'; 
          ?>>Desenv. Halteres</option>
          <option value="Elevacao Lateral"
          <?php
            if($res['ombro1']=='Elevacao Lateral')
              echo 'selected'; 
          ?>>Elevacao Lateral</option>
          <option value="Elevacao Frontal"
          <?php
            if($res['ombro1']=='Elevacao Frontal')
              echo 'selected'; 
          ?>>Elevacao Frontal</option>
          <option value="Remada Alta"
          <?php
            if($res['ombro1']=='Remada Alta')
              echo 'selected'; 
          ?>>Remada Alta</option>
          <option value="Encolhimento"
          <?php
            if($res['ombro1']=='Encolhimento')
              echo 'selected'; 
          ?>>Encolhimento</option>
        </select><br>
        <select class="form-control" name="treino['ombro2']">
          <option selected=""> - </option>
          <option value="Desenv. Maquina"
          <?php
            if($res['ombro2']=='Desenv. Maquina')
              echo 'selected'; 
          ?>>Desenv. Maquina</option>
          <option value="Desenv. Barra"
          <?php
            if($res['ombro2']=='Desenv. Barra')
              echo 'selected'; 
          ?>>Desenv. Barra</option>
          <option value="Desenv. Halteres"
          <?php
            if($res['ombro2']=='Desenv. Halteres')
              echo 'selected'; 
          ?>>Desenv. Halteres</option>
          <option value="Elevacao Lateral"
          <?php
            if($res['ombro2']=='Elevacao Lateral')
              echo 'selected'; 
          ?>>Elevacao Lateral</option>
          <option value="Elevacao Frontal"
          <?php
            if($res['ombro2']=='Elevacao Frontal')
              echo 'selected'; 
          ?>>Elevacao Frontal</option>
          <option value="Remada Alta"
          <?php
            if($res['ombro2']=='Remada Alta')
              echo 'selected'; 
          ?>>Remada Alta</option>
          <option value="Encolhimento"
          <?php
            if($res['ombro2']=='Encolhimento')
              echo 'selected'; 
          ?>>Encolhimento</option>
        </select><br>
        <select class="form-control" name="treino['ombro3']">
          <option selected=""> - </option>
          <option value="Desenv. Maquina"
          <?php
            if($res['ombro3']=='Desenv. Maquina')
              echo 'selected'; 
          ?>>Desenv. Maquina</option>
          <option value="Desenv. Barra"
          <?php
            if($res['ombro3']=='Desenv. Barra')
              echo 'selected'; 
          ?>>Desenv. Barra</option>
          <option value="Desenv. Halteres"
          <?php
            if($res['ombro3']=='Desenv. Halteres')
              echo 'selected'; 
          ?>>Desenv. Halteres</option>
          <option value="Elevacao Lateral"
          <?php
            if($res['ombro3']=='Elevacao Lateral')
              echo 'selected'; 
          ?>>Elevacao Lateral</option>
          <option value="Elevacao Frontal"
          <?php
            if($res['ombro3']=='Elevacao Frontal')
              echo 'selected'; 
          ?>>Elevacao Frontal</option>
          <option value="Remada Alta"
          <?php
            if($res['ombro3']=='Remada Alta')
              echo 'selected'; 
          ?>>Remada Alta</option>
          <option value="Encolhimento"
          <?php
            if($res['ombro3']=='Encolhimento')
              echo 'selected'; 
          ?>>Encolhimento</option>
        </select><br>
        <select class="form-control" name="treino['ombro4']">
          <option selected=""> - </option>
          <option value="Desenv. Maquina"
          <?php
            if($res['ombro4']=='Desenv. Maquina')
              echo 'selected'; 
          ?>>Desenv. Maquina</option>
          <option value="Desenv. Barra"
          <?php
            if($res['ombro4']=='Desenv. Barra')
              echo 'selected'; 
          ?>>Desenv. Barra</option>
          <option value="Desenv. Halteres"
          <?php
            if($res['ombro4']=='Desenv. Halteres')
              echo 'selected'; 
          ?>>Desenv. Halteres</option>
          <option value="Elevacao Lateral"
          <?php
            if($res['ombro4']=='Elevacao Lateral')
              echo 'selected'; 
          ?>>Elevacao Lateral</option>
          <option value="Elevacao Frontal"
          <?php
            if($res['ombro4']=='Elevacao Frontal')
              echo 'selected'; 
          ?>>Elevacao Frontal</option>
          <option value="Remada Alta"
          <?php
            if($res['ombro4']=='Remada Alta')
              echo 'selected'; 
          ?>>Remada Alta</option>
          <option value="Encolhimento"
          <?php
            if($res['ombro4']=='Encolhimento')
              echo 'selected'; 
          ?>>Encolhimento</option>
        </select><br>
      </div>

      <div class="form-group col-md-1">
        <label>Série</label>
        <select class="form-control" name="treino['serieomb1']">
          <option selected=""></option>
          <option value="1"
          <?php
            if($res['serieomb1']=='1')
              echo 'selected'; 
          ?>>1</option>
          <option value="2"
          <?php
            if($res['serieomb1']=='2')
              echo 'selected'; 
          ?>>2</option>
          <option value="3"
          <?php
            if($res['serieomb1']=='3')
              echo 'selected'; 
          ?>>3</option>
          <option value="4"
          <?php
            if($res['serieomb1']=='4')
              echo 'selected'; 
          ?>>4</option>
          <option value="5"
          <?php
            if($res['serieomb1']=='5')
              echo 'selected'; 
          ?>>5</option>
          <option value="6"
          <?php
            if($res['serieomb1']=='6')
              echo 'selected'; 
          ?>>6</option>
        </select><br>
        <select class="form-control" name="treino['serieomb2']">
          <option selected=""></option>
          <option value="1"
          <?php
            if($res['serieomb2']=='1')
              echo 'selected'; 
          ?>>1</option>
          <option value="2"
          <?php
            if($res['serieomb2']=='2')
              echo 'selected'; 
          ?>>2</option>
          <option value="3"
          <?php
            if($res['serieomb2']=='3')
              echo 'selected'; 
          ?>>3</option>
          <option value="4"
          <?php
            if($res['serieomb2']=='4')
              echo 'selected'; 
          ?>>4</option>
          <option value="5"
          <?php
            if($res['serieomb2']=='5')
              echo 'selected'; 
          ?>>5</option>
          <option value="6"
          <?php
            if($res['serieomb2']=='6')
              echo 'selected'; 
          ?>>6</option>
        </select><br>
        <select class="form-control" name="treino['serieomb3']">
          <option selected=""></option>
          <option value="1"
          <?php
            if($res['serieomb3']=='1')
              echo 'selected'; 
          ?>>1</option>
          <option value="2"
          <?php
            if($res['serieomb3']=='2')
              echo 'selected'; 
          ?>>2</option>
          <option value="3"
          <?php
            if($res['serieomb3']=='3')
              echo 'selected'; 
          ?>>3</option>
          <option value="4"
          <?php
            if($res['serieomb3']=='4')
              echo 'selected'; 
          ?>>4</option>
          <option value="5"
          <?php
            if($res['serieomb3']=='5')
              echo 'selected'; 
          ?>>5</option>
          <option value="6"
          <?php
            if($res['serieomb3']=='6')
              echo 'selected'; 
          ?>>6</option>
        </select><br>
        <select class="form-control" name="treino['serieomb4']">
          <option selected=""></option>
          <option value="1"
          <?php
            if($res['serieomb4']=='1')
              echo 'selected'; 
          ?>>1</option>
          <option value="2"
          <?php
            if($res['serieomb4']=='2')
              echo 'selected'; 
          ?>>2</option>
          <option value="3"
          <?php
            if($res['serieomb4']=='3')
              echo 'selected'; 
          ?>>3</option>
          <option value="4"
          <?php
            if($res['serieomb4']=='4')
              echo 'selected'; 
          ?>>4</option>
          <option value="5"
          <?php
            if($res['serieomb4']=='5')
              echo 'selected'; 
          ?>>5</option>
          <option value="6"
          <?php
            if($res['serieomb4']=='6')
              echo 'selected'; 
          ?>>6</option>
        </select><br>
      </div>

      <div class="form-group col-md-1">
        <label>Repetições</label>
        <select class="form-control" name="treino['repetomb1']">
          <option selected=""></option>
          <option value="5"
          <?php
            if($res['repetomb1']=='5')
              echo 'selected'; 
          ?>>5</option>
          <option value="10"
          <?php
            if($res['repetomb1']=='10')
              echo 'selected'; 
          ?>>10</option>
          <option value="15"
          <?php
            if($res['repetomb1']=='15')
              echo 'selected'; 
          ?>>15</option>
          <option value="20"
          <?php
            if($res['repetomb1']=='20')
              echo 'selected'; 
          ?>>20</option>
        </select><br>
        <select class="form-control" name="treino['repetomb2']">
          <option selected=""></option>
          <option value="5"
          <?php
            if($res['repetomb2']=='5')
              echo 'selected'; 
          ?>>5</option>
          <option value="10"
          <?php
            if($res['repetomb2']=='10')
              echo 'selected'; 
          ?>>10</option>
          <option value="15"
          <?php
            if($res['repetomb2']=='15')
              echo 'selected'; 
          ?>>15</option>
          <option value="20"
          <?php
            if($res['repetomb2']=='20')
              echo 'selected'; 
          ?>>20</option>
        </select><br>
        <select class="form-control" name="treino['repetomb3']">
          <option selected=""></option>
          <option value="5"
          <?php
            if($res['repetomb3']=='5')
              echo 'selected'; 
          ?>>5</option>
          <option value="10"
          <?php
            if($res['repetomb3']=='10')
              echo 'selected'; 
          ?>>10</option>
          <option value="15"
          <?php
            if($res['repetomb3']=='15')
              echo 'selected'; 
          ?>>15</option>
          <option value="20"
          <?php
            if($res['repetomb3']=='20')
              echo 'selected'; 
          ?>>20</option>
        </select><br>
        <select class="form-control" name="treino['repetomb4']">
          <option selected=""></option>
          <option value="5"
          <?php
            if($res['repetomb4']=='5')
              echo 'selected'; 
          ?>>5</option>
          <option value="10"
          <?php
            if($res['repetomb4']=='10')
              echo 'selected'; 
          ?>>10</option>
          <option value="15"
          <?php
            if($res['repetomb4']=='15')
              echo 'selected'; 
          ?>>15</option>
          <option value="20"
          <?php
            if($res['repetomb4']=='20')
              echo 'selected'; 
          ?>>20</option>
        </select><br>
      </div>
  </div>

  <div class="row">
    <div class="form-group col-md-12">
      <label>Observações sobre o Treino</label>
      <textarea class="form-control" title="Observações sobre o treino" name="treino['obstreino']" maxlength="200" style="resize: vertical"><?php echo $res['obstreino']; ?></textarea>
    </div>
  </div> 

  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Salvar</button>
      <a href="index.php" class="btn btn-default"><i class="fa fa-window-close"></i> Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>