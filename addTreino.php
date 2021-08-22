<?php 
  require_once ('functions.php');
  include_once '../verificaLogin.php'; 
  add_treino();

  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Treino</h2>

<form action="addTreino.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo2">CPF</label>
      <input type="text" id="cpftreino" pattern=".{14}" title="O CPF precisa ter 11 números." onkeydown="javascript: fMascCPF( this, mCPF );" class="form-control" maxlength="14" required="" name="treino['cpftreino']">
      <div class="msg2">verificando...</div><div class="msg"></div>
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Criação</label>
      <input type="text" class="form-control" name="treino['dttreino']" disabled="">
    </div>
  </div>  

  <h3>Exercícios</h3>

  <hr />

  <div class="row">
    <div class="form-group col-md-2">
      <label for="peito">Peito - Exercício</label>
      <select class="form-control" name="treino['peito1']">
        <option selected=""> - </option>
        <option value="Supino Reto">Supino Reto</option>
        <option value="Supino Inclinado">Supino Inclinado</option>
        <option value="Supino Declinado">Supino Declinado</option>
        <option value="Crucifixo">Crucifixo</option>
        <option value="Voador">Voador</option>
        <option value="Cross-Over">Cross-Over</option>
      </select><br>
      <select class="form-control" name="treino['peito2']">
        <option selected=""> - </option>
        <option value="Supino Reto">Supino Reto</option>
        <option value="Supino Inclinado">Supino Inclinado</option>
        <option value="Supino Declinado">Supino Declinado</option>
        <option value="Crucifixo">Crucifixo</option>
        <option value="Voador">Voador</option>
        <option value="Cross-Over">Cross-Over</option>
      </select><br>
      <select class="form-control" name="treino['peito3']">
        <option selected=""> - </option>
        <option value="Supino Reto">Supino Reto</option>
        <option value="Supino Inclinado">Supino Inclinado</option>
        <option value="Supino Declinado">Supino Declinado</option>
        <option value="Crucifixo">Crucifixo</option>
        <option value="Voador">Voador</option>
        <option value="Cross-Over">Cross-Over</option>
      </select><br>
      <select class="form-control" name="treino['peito4']">
        <option selected=""> - </option>
        <option value="Supino Reto">Supino Reto</option>
        <option value="Supino Inclinado">Supino Inclinado</option>
        <option value="Supino Declinado">Supino Declinado</option>
        <option value="Crucifixo">Crucifixo</option>
        <option value="Voador">Voador</option>
        <option value="Cross-Over">Cross-Over</option>
      </select><br>
    </div> 
  
    <div class="form-group col-md-1">
      <label>Série</label>
      <select class="form-control" name="treino['seriepei1']">
        <option selected=""></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select><br>
      <select class="form-control" name="treino['seriepei2']">
        <option selected=""></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select><br>
      <select class="form-control" name="treino['seriepei3']">
        <option selected=""></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select><br>
      <select class="form-control" name="treino['seriepei4']">
        <option selected=""></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select><br>
    </div>
 
    <div class="form-group col-md-1">
      <label>Repetições</label>
      <select class="form-control" name="treino['repetpei1']">
        <option selected=""></option>
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
      </select><br>
      <select class="form-control" name="treino['repetpei2']">
        <option selected=""></option>
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
      </select><br>
      <select class="form-control" name="treino['repetpei3']">
        <option selected=""></option>
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
      </select><br>
      <select class="form-control" name="treino['repetpei4']">
        <option selected=""></option>
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
      </select><br>
    </div>
 
    <div class="form-group col-md-2">
      <label for="costas">Costas - Exercício</label>
      <select class="form-control" name="treino['costas1']">
        <option selected=""> - </option>
        <option value="Puxador">Puxador</option>
        <option value="Remada Baixa">Remada Baixa</option>
        <option value="Remada Unilateral">Remada Unilateral</option>
        <option value="Crucifixo Invertido">Crucifixo Invertido</option>
        <option value="Pullover">Pullover</option>
        <option value="Barra Fixa">Barra Fixa</option>
      </select><br>
      <select class="form-control" name="treino['costas2']">
        <option selected=""> - </option>
        <option value="Puxador">Puxador</option>
        <option value="Remada Baixa">Remada Baixa</option>
        <option value="Remada Unilateral">Remada Unilateral</option>
        <option value="Crucifixo Invertido">Crucifixo Invertido</option>
        <option value="Pullover">Pullover</option>
        <option value="Barra Fixa">Barra Fixa</option>
      </select><br>
      <select class="form-control" name="treino['costas3']">
        <option selected=""> - </option>
        <option value="Puxador">Puxador</option>
        <option value="Remada Baixa">Remada Baixa</option>
        <option value="Remada Unilateral">Remada Unilateral</option>
        <option value="Crucifixo Invertido">Crucifixo Invertido</option>
        <option value="Pullover">Pullover</option>
        <option value="Barra Fixa">Barra Fixa</option>
      </select><br>
      <select class="form-control" name="treino['costas4']">
        <option selected=""> - </option>
        <option value="Puxador">Puxador</option>
        <option value="Remada Baixa">Remada Baixa</option>
        <option value="Remada Unilateral">Remada Unilateral</option>
        <option value="Crucifixo Invertido">Crucifixo Invertido</option>
        <option value="Pullover">Pullover</option>
        <option value="Barra Fixa">Barra Fixa</option>
      </select><br>
    </div>

    <div class="form-group col-md-1">
      <label>Série</label>
      <select class="form-control" name="treino['seriecos1']">
        <option selected=""></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select><br>
      <select class="form-control" name="treino['seriecos2']">
        <option selected=""></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select><br>
      <select class="form-control" name="treino['seriecos3']">
        <option selected=""></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select><br>
      <select class="form-control" name="treino['seriecos4']">
        <option selected=""></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select><br>
    </div>

    <div class="form-group col-md-1">
      <label>Repetições</label>
      <select class="form-control" name="treino['repetcos1']">
        <option selected=""></option>
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
      </select><br>
      <select class="form-control" name="treino['repetcos2']">
        <option selected=""></option>
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
      </select><br>
      <select class="form-control" name="treino['repetcos3']">
        <option selected=""></option>
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
      </select><br>
      <select class="form-control" name="treino['repetcos4']">
        <option selected=""></option>
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
      </select><br>
    </div>

    <div class="form-group col-md-2">
      <label for="perna">Perna - Exercício</label>
      <select class="form-control" name="treino['perna1']">
        <option selected=""> - </option>
        <option value="Agachamento">Agachamento</option>
        <option value="Extensora">Extensora</option>
        <option value="Flexora">Flexora</option>
        <option value="Adutora">Adutora</option>
        <option value="Abdutora">Abdutora</option>
        <option value="Leg-Press">Leg-Press</option>
        <option value="Panturrilha">Panturrilha</option>
      </select><br>
      <select class="form-control" name="treino['perna2']">
        <option selected=""> - </option>
        <option value="Agachamento">Agachamento</option>
        <option value="Extensora">Extensora</option>
        <option value="Flexora">Flexora</option>
        <option value="Adutora">Adutora</option>
        <option value="Abdutora">Abdutora</option>
        <option value="Leg-Press">Leg-Press</option>
        <option value="Panturrilha">Panturrilha</option>
      </select><br>
      <select class="form-control" name="treino['perna3']">
        <option selected=""> - </option>
        <option value="Agachamento">Agachamento</option>
        <option value="Extensora">Extensora</option>
        <option value="Flexora">Flexora</option>
        <option value="Adutora">Adutora</option>
        <option value="Abdutora">Abdutora</option>
        <option value="Leg-Press">Leg-Press</option>
        <option value="Panturrilha">Panturrilha</option>
      </select><br>
      <select class="form-control" name="treino['perna4']">
        <option selected=""> - </option>
        <option value="Agachamento">Agachamento</option>
        <option value="Extensora">Extensora</option>
        <option value="Flexora">Flexora</option>
        <option value="Adutora">Adutora</option>
        <option value="Abdutora">Abdutora</option>
        <option value="Leg-Press">Leg-Press</option>
        <option value="Panturrilha">Panturrilha</option>
      </select><br>
    </div>

    <div class="form-group col-md-1">
      <label>Série</label>
      <select class="form-control" name="treino['serieper1']">
        <option selected=""></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select><br>
      <select class="form-control" name="treino['serieper2']">
        <option selected=""></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select><br>
      <select class="form-control" name="treino['serieper3']">
        <option selected=""></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select><br>
      <select class="form-control" name="treino['serieper4']">
        <option selected=""></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select><br>
    </div>

    <div class="form-group col-md-1">
      <label>Repetições</label>
      <select class="form-control" name="treino['repetper1']">
        <option selected=""></option>
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
      </select><br>
      <select class="form-control" name="treino['repetper2']">
        <option selected=""></option>
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
      </select><br>
      <select class="form-control" name="treino['repetper3']">
        <option selected=""></option>
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
      </select><br>
      <select class="form-control" name="treino['repetper4']">
        <option selected=""></option>
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
      </select><br>
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-2">
        <label for="biceps">Biceps - Exercício</label>
        <select class="form-control" name="treino['biceps1']">
          <option selected=""> - </option>
          <option value="Rosca Direta">Rosca Direta</option>
          <option value="Rosca Alterada">Rosca Alternada</option>
          <option value="Rosca Invertida">Rosca Invertida</option>
          <option value="Rosca Concentrada">Rosca Concentrada</option>
          <option value="Rosca Martelo">Rosca Martelo</option>
          <option value="Rosca-Scott">Rosca-Scott</option>
          <option value="Rosca Cross-Over">Rosca Cross-Over</option>
        </select><br>
        <select class="form-control" name="treino['biceps2']">
          <option selected=""> - </option>
          <option value="Rosca Direta">Rosca Direta</option>
          <option value="Rosca Alterada">Rosca Alternada</option>
          <option value="Rosca Invertida">Rosca Invertida</option>
          <option value="Rosca Concentrada">Rosca Concentrada</option>
          <option value="Rosca Martelo">Rosca Martelo</option>
          <option value="Rosca-Scott">Rosca-Scott</option>
          <option value="Rosca Cross-Over">Rosca Cross-Over</option>
        </select><br>
        <select class="form-control" name="treino['biceps3']">
          <option selected=""> - </option>
          <option value="Rosca Direta">Rosca Direta</option>
          <option value="Rosca Alterada">Rosca Alternada</option>
          <option value="Rosca Invertida">Rosca Invertida</option>
          <option value="Rosca Concentrada">Rosca Concentrada</option>
          <option value="Rosca Martelo">Rosca Martelo</option>
          <option value="Rosca-Scott">Rosca-Scott</option>
          <option value="Rosca Cross-Over">Rosca Cross-Over</option>
        </select><br>
        <select class="form-control" name="treino['biceps4']">
          <option selected=""> - </option>
          <option value="Rosca Direta">Rosca Direta</option>
          <option value="Rosca Alterada">Rosca Alternada</option>
          <option value="Rosca Invertida">Rosca Invertida</option>
          <option value="Rosca Concentrada">Rosca Concentrada</option>
          <option value="Rosca Martelo">Rosca Martelo</option>
          <option value="Rosca-Scott">Rosca-Scott</option>
          <option value="Rosca Cross-Over">Rosca Cross-Over</option>
        </select><br>
      </div>

      <div class="form-group col-md-1">
        <label>Série</label>
        <select class="form-control" name="treino['seriebic1']">
          <option selected=""></option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select><br>
        <select class="form-control" name="treino['seriebic2']">
          <option selected=""></option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select><br>
        <select class="form-control" name="treino['seriebic3']">
          <option selected=""></option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select><br>
        <select class="form-control" name="treino['seriebic4']">
          <option selected=""></option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select><br>
      </div>

      <div class="form-group col-md-1">
        <label>Repetições</label>
        <select class="form-control" name="treino['repetbic1']">
          <option selected=""></option>
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="15">15</option>
          <option value="20">20</option>
        </select><br>
        <select class="form-control" name="treino['repetbic2']">
          <option selected=""></option>
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="15">15</option>
          <option value="20">20</option>
        </select><br>
        <select class="form-control" name="treino['repetbic3']">
          <option selected=""></option>
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="15">15</option>
          <option value="20">20</option>
        </select><br>
        <select class="form-control" name="treino['repetbic4']">
          <option selected=""></option>
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="15">15</option>
          <option value="20">20</option>
        </select><br>
      </div>

      <div class="form-group col-md-2">
        <label for="triceps">Triceps - Exercício</label>
        <select class="form-control" name="treino['triceps1']">
          <option selected=""> - </option>
          <option value="Triceps Polia">Triceps Polia</option>
          <option value="Triceps Corda">Triceps Corda</option>
          <option value="Triceps Testa">Triceps Testa</option>
          <option value="Triceps Francês">Triceps Francês</option>
          <option value="Triceps Supinado">Triceps Supinado</option>
          <option value="Triceps Paralela">Triceps Paralela</option>
          <option value="Triceps Banco">Triceps Banco</option>
        </select><br>
        <select class="form-control" name="treino['triceps2']">
          <option selected=""> - </option>
          <option value="Triceps Polia">Triceps Polia</option>
          <option value="Triceps Corda">Triceps Corda</option>
          <option value="Triceps Testa">Triceps Testa</option>
          <option value="Triceps Francês">Triceps Francês</option>
          <option value="Triceps Supinado">Triceps Supinado</option>
          <option value="Triceps Paralela">Triceps Paralela</option>
          <option value="Triceps Banco">Triceps Banco</option>
        </select><br>
        <select class="form-control" name="treino['triceps3']">
          <option selected=""> - </option>
          <option value="Triceps Polia">Triceps Polia</option>
          <option value="Triceps Corda">Triceps Corda</option>
          <option value="Triceps Testa">Triceps Testa</option>
          <option value="Triceps Francês">Triceps Francês</option>
          <option value="Triceps Supinado">Triceps Supinado</option>
          <option value="Triceps Paralela">Triceps Paralela</option>
          <option value="Triceps Banco">Triceps Banco</option>
        </select><br>
        <select class="form-control" name="treino['triceps4']">
          <option selected=""> - </option>
          <option value="Triceps Polia">Triceps Polia</option>
          <option value="Triceps Corda">Triceps Corda</option>
          <option value="Triceps Testa">Triceps Testa</option>
          <option value="Triceps Francês">Triceps Francês</option>
          <option value="Triceps Supinado">Triceps Supinado</option>
          <option value="Triceps Paralela">Triceps Paralela</option>
          <option value="Triceps Banco">Triceps Banco</option>
        </select><br>
      </div>

      <div class="form-group col-md-1">
        <label>Série</label>
        <select class="form-control" name="treino['serietri1']">
          <option selected=""></option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select><br>
        <select class="form-control" name="treino['serietri2']">
          <option selected=""></option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select><br>
        <select class="form-control" name="treino['serietri3']">
          <option selected=""></option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select><br>
        <select class="form-control" name="treino['serietri4']">
          <option selected=""></option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select><br>
      </div>

      <div class="form-group col-md-1">
        <label>Repetições</label>
        <select class="form-control" name="treino['repettri1']">
          <option selected=""></option>
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="15">15</option>
          <option value="20">20</option>
        </select><br>
        <select class="form-control" name="treino['repettri2']">
          <option selected=""></option>
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="15">15</option>
          <option value="20">20</option>
        </select><br>
        <select class="form-control" name="treino['repettri3']">
          <option selected=""></option>
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="15">15</option>
          <option value="20">20</option>
        </select><br>
        <select class="form-control" name="treino['repettri4']">
          <option selected=""></option>
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="15">15</option>
          <option value="20">20</option>
        </select><br>
      </div>

      <div class="form-group col-md-2">
        <label for="ombro">Ombro - Exercício</label>
        <select class="form-control" name="treino['ombro1']">
          <option selected=""> - </option>
          <option value="Desenv. Maquina">Desenv. Maquina</option>
          <option value="Desenv. Barra">Desenv. Barra</option>
          <option value="Desenv. Halteres">Desenv. Halteres</option>
          <option value="Elevacao Lateral">Elevacao Lateral</option>
          <option value="Elevacao Frontal">Elevacao Frontal</option>
          <option value="Remada Alta">Remada Alta</option>
          <option value="Encolhimento">Encolhimento</option>
        </select><br>
        <select class="form-control" name="treino['ombro2']">
          <option selected=""> - </option>
          <option value="Desenv. Maquina">Desenv. Maquina</option>
          <option value="Desenv. Barra">Desenv. Barra</option>
          <option value="Desenv. Halteres">Desenv. Halteres</option>
          <option value="Elevacao Lateral">Elevacao Lateral</option>
          <option value="Elevacao Frontal">Elevacao Frontal</option>
          <option value="Remada Alta">Remada Alta</option>
          <option value="Encolhimento">Encolhimento</option>
        </select><br>
        <select class="form-control" name="treino['ombro3']">
          <option selected=""> - </option>
          <option value="Desenv. Maquina">Desenv. Maquina</option>
          <option value="Desenv. Barra">Desenv. Barra</option>
          <option value="Desenv. Halteres">Desenv. Halteres</option>
          <option value="Elevacao Lateral">Elevacao Lateral</option>
          <option value="Elevacao Frontal">Elevacao Frontal</option>
          <option value="Remada Alta">Remada Alta</option>
          <option value="Encolhimento">Encolhimento</option>
        </select><br>
        <select class="form-control" name="treino['ombro4']">
          <option selected=""> - </option>
          <option value="Desenv. Maquina">Desenv. Maquina</option>
          <option value="Desenv. Barra">Desenv. Barra</option>
          <option value="Desenv. Halteres">Desenv. Halteres</option>
          <option value="Elevacao Lateral">Elevacao Lateral</option>
          <option value="Elevacao Frontal">Elevacao Frontal</option>
          <option value="Remada Alta">Remada Alta</option>
          <option value="Encolhimento">Encolhimento</option>
        </select><br>
      </div>

      <div class="form-group col-md-1">
        <label>Série</label>
        <select class="form-control" name="treino['serieomb1']">
          <option selected=""></option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select><br>
        <select class="form-control" name="treino['serieomb2']">
          <option selected=""></option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select><br>
        <select class="form-control" name="treino['serieomb3']">
          <option selected=""></option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select><br>
        <select class="form-control" name="treino['serieomb4']">
          <option selected=""></option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select><br>
      </div>

      <div class="form-group col-md-1">
        <label>Repetições</label>
        <select class="form-control" name="treino['repetomb1']">
          <option selected=""></option>
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="15">15</option>
          <option value="20">20</option>
        </select><br>
        <select class="form-control" name="treino['repetomb2']">
          <option selected=""></option>
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="15">15</option>
          <option value="20">20</option>
        </select><br>
        <select class="form-control" name="treino['repetomb3']">
          <option selected=""></option>
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="15">15</option>
          <option value="20">20</option>
        </select><br>
        <select class="form-control" name="treino['repetomb4']">
          <option selected=""></option>
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="15">15</option>
          <option value="20">20</option>
        </select><br>
      </div>
  </div>

  <div class="row">
    <div class="form-group col-md-12">
      <label>Observações sobre o Treino</label>
      <textarea class="form-control" title="Observações sobre o treino" name="treino['obstreino']" maxlength="200" style="resize: vertical"></textarea>
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