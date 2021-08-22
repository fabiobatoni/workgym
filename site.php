<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Web Workgym</title>
<link rel="icon" href="site/images/favicon.png" type="image/png" sizes="16x16">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="iLand Multipurpose Landing Page Template">
<meta name="keywords" content="iLand HTML Template, iLand Landing Page, Landing Page Template">
<link href="site/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="site/css/animate.css">
<!-- Resource style -->
<link rel="stylesheet" href="site/css/owl.carousel.css">
<link rel="stylesheet" href="site/css/owl.theme.css">
<link rel="stylesheet" href="site/css/ionicons.min.css">
<link rel="stylesheet" href="site/css/all.min.css">
<!-- Resource style -->
<link href="site/css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div class="wrapper">
  <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand page-scroll" href="#main" style="color: white; padding-top: 15px">WORKGYM
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a class="page-scroll" href="#main">Home</a></li>
            <li><a class="page-scroll" href="#classes">Características</a></li>
            <li><a class="page-scroll" href="#classificacoes">Classificações</a></li>
            <li><a class="page-scroll" href="#review">Líderes</a></li>
            <li><a class="page-scroll" href="#pricing">Preços</a></li>
            <li><a class="page-scroll" href="#contact">Contato</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid -->
  
  <div class="main app form" id="main"><!-- Main Section-->
    <div class="hero-section">
      <div class="container nopadding">
        <div class="col-md-12">
          <div class="hero-content text-center">
            <h1 class="wow fadeInUp" data-wow-delay="0.1s">A MELHOR PERFORMANCE E DESEMPENHO</h1>
            <p class="wow fadeInUp" data-wow-delay="0.2s">Os únicos limites são aqueles que você acredita em ter </p>
            <!--<a id="modalC" href="#modalC" class="btn btn-action wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">EXPERIMENTE GRÁTIS</a> </div>-->
            <button type="button" class="btn btn-action wow fadeInUp" data-toggle="modal" data-target="#modalC" style="visibility: visible; animation-name: fadeInUp;">
  			    Experimente Grátis
			      </button>
          </div>
        </div>
      </div>
    </div>

    <!--Modal -->
    <div class="modal fade" id="modalC" tabindex="-1" role="dialog" aria-labelledby="modalC" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" >
            <center><h5 class="modal-title" id="modalC" style="font-family: Comic Sans MS;">Dados de Agenda Para Experiência</h5></center>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
  
          <div class="modal-body">
            <form method="post" action="./site/addExp.php">
  						<label style="font-family: Comic Sans MS;">Nome:</label>
  						<input class="form-control input-group" type="text" name="nome" required="">
  						<br>
  						<label style="font-family: Comic Sans MS;">CPF:</label>
  						<input class="form-control input-group" type="text" id="RegraValida" pattern=".{14}" title="O CPF precisa ter 11 números." onkeydown="javascript: fMascCPF( this, mCPF );" maxlength="14" name="cpfexp" required="">
  						<br>
              <label style="font-family: Comic Sans MS;">Telefone:</label>
              <input class="form-control input-group" type="text" id="RegraTelefone" minlength="13" onkeydown="javascript: fMascTEL( this, mTEL );" maxlength="13" name="telefone">
              <br>
  						<label style="font-family: Comic Sans MS;">Celular:</label>
  						<input class="form-control input-group" type="text" id="RegraCelular" minlength="14" onkeydown="javascript: fMascCEL( this, mCEL );" maxlength="14" name="celular">
  						<br>
  						<label style="font-family: Comic Sans MS;">E-mail:</label>
  						<input class="form-control input-group" type="text" name="email">
  						<br>
  			  </div>
     	    <div class="modal-footer">
            <center><button type="submit" class="btn btn-action wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Enviar</button></center>
          </div>
        </form>
        </div>
      </div>
    </div>
    	
    <!-- Classes Section -->
    <div class="pitch text-center" id="classes">
      <div class="container">
        <div class="pitch-intro">
          <h1 class="wow fadeInDown" data-wow-delay="0.2s">
						TUDO É POSSÍVEL COM DETERMINAÇÃO</h1>
          <p class="wow fadeInDown" data-wow-delay="0.2s">NÃO EXISTE IDADE PARA SUPERAR LIMITES.</p>
        </div>
        <div class="col-md-12">
          <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
            <div class="pitch-icon"> <i class="ion-ios-checkmark-outline"></i>
            </div>
            <div class="pitch-content">
              <h1>Personal Training</h1>
              <p> Profissionais capacitados a ministrar e supervisionar os treinamentos seguindo o objetivo de seu aluno. </p>
            </div>
          </div>
          <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
            <div class="pitch-icon"> <i class="ion-ios-checkmark-outline"></i>
            </div>
            <div class="pitch-content">
              <h1>Cardio Training</h1>
              <p> Exercícios aeróbicos são aqueles que exigem um gasto maior de oxigênio, realizando assim uma maior queima de calorias, completando o treino de musculação.</p>
            </div>
          </div>
          <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
            <div class="pitch-icon"> <i class="ion-ios-checkmark-outline"></i>
            </div>
            <div class="pitch-content">
              <h1>Musculação</h1>
              <p>Musculação focado para o treinamento e desenvolvimento dos músculos, para fins atléticos, estéticos e de saúde. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- Split classificacoes Section -->
    <div id="classificacoes">
      <div class="split-features" >
        <div class="col-md-6 nopadding">
          <div class="split-image"> <img class="img-responsive wow fadeIn" src="site/images/app_image.png" alt="Image" />
          </div>
        </div>
        <div class="col-md-6 nopadding">
          <div class="split-content">
            <h1 class="wow fadeInUp">ESTÉTICO<br>Corpo Ideal</h1>
            <p class="wow fadeInUp">Com o exercício físico regular, bem orientado e uma alimentação saudável, você pode alcançar o seu corpo ideal!</p>
          </div>
        </div>
      </div>
    </div>
     <!-- Split Feature2 Section -->
    <div class="split-features2">
      <div class="col-md-6 nopadding">
        <div class="split-content second">
          <h1 class="wow fadeInUp">Saúde</h1>
          <p class="wow fadeInUp"> Bem-estar</p>
          <p class="wow fadeInUp"> O exercício físico bem orientado só trás benefícios à sua saúde! Não deixe nada te limitar e corra atrás do tempo perdido!</p>
        </div>
      </div>
      <div class="col-md-6 nopadding">
        <div class="split-image"> <img class="img-responsive wow fadeIn" src="site/images/app_image2.png" alt="Image" />
        </div>
      </div>
    </div>
     <!-- Split Feature3 Section -->
    <div class="split-features">
      <div class="col-md-6 nopadding">
        <div class="split-image"> <img class="img-responsive wow fadeIn" src="site/images/gym-3.jpg" alt="Image" />
        </div>
      </div>
      <div class="col-md-6 nopadding">
        <div class="split-content">
          <h1 class="wow fadeInUp">Performance</h1>
          <p class="wow fadeInUp">Auto-rendimento</p>
          <p class="wow fadeInUp">Quer subir em um palco para competir? Não perca mais tempo! Treine pesado, se alimente de acordo com seu objetivo e tenha uma orientação adequada!</p>
        </div>
        <ul class="wow fadeInUp"></ul>
      </div>
    </div>
  
     <!-- Bold call to action Section -->
    <div class="feature-sub">
      <div class="container">
        <div class="sub-inner">
          <h1 class="wow fadeInUp">Se não é pessoal, não é possível! Veja os resultados e sentir a diferença imediatamente.</h1>
          <a href="#" class="btn btn-action wow fadeInUp">Voltar ao Início</a>
        </div>
      </div>
    </div>
     <!-- Client Section -->
    <div class="review-section" id="review">
      <div class="container">
        <div class="col-md-10 col-md-offset-1">
          <div class="reviews owl-carousel owl-theme">
            <div class="review-single"><img class="img-circle" src="site/images/isa.jpg" alt="Client Testimonoal" />
              <div class="review-text wow fadeInUp" data-wow-delay="0.2s">
                <p>Bacharelado em Educação Física e Designer proporcionando Aulas e Marketing Digital e Empresarial.</p>                  
                <h3>Isabela Garisto</h3>
                <h3>Professora e Marketing Digital</h3>
              </div>
            </div>
            <div class="review-single"><img class="img-circle" src="site/images/ricardo.jpg" alt="Client Testimonoal" />
              <div class="review-text">
                <p>Bacharelado em Educação Física e Pós-Graduado em Fisiologia do Exercício</p>
                 <h3>Ricardo Luiz dos Santos</h3>
                <h3>Presidente</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Package Section -->
    <div id="pricing" class="pricing-section text-center">
      <div class="container">
        <div class="col-md-12 col-sm-12 nopadding">
          <div class="pricing-intro">
            <h1 class="wow fadeInUp" data-wow-delay="0s">PACOTES</h1>
            <p class="wow fadeInUp" data-wow-delay="0.2s"> APROVEITE OS MELHORES PREÇOS DA CIDADE COM EQUIPAMENTOS NOVOS<br>PROPORCIONANDO TODA REPERCUÇÃO A SUA SATISFAÇÃO</p>
          </div>
          <div class="col-sm-6">
            <div class="table-left wow fadeInUp" data-wow-delay="0.4s">
              <div class="pricing-details">
                <h2>PLANO MENSAL</h2>
                <span>R$70,00</span>
                <ul>
                  <li>Plano Individual</li>
                  <li>Matrículas R$10,00 por pessoa.</li>
                  <li>Multa em caso de atraso a partir de 5 dias.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="table-right wow fadeInUp" data-wow-delay="0.6s">
              <div class="pricing-details">
                <h2>PLANO FAMILIAR MENSAL</h2>
                <span>R$60,00</span>
                <ul>
                  <li>A partir de 3 pessoas.</li>
                  <li>Matrículas R$10,00 por pessoa.</li>
                  <li>Multa em caso de atraso a partir de 5 dias.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Footer Section -->
    <div class="footer" id="contact">
      <div class="container">
        <div class="col-md-6 contact">
          <h1>WhatsApp</h1>
          <p><i class="fab fa-whatsapp"></i>&nbsp&nbspWorkGym (11) 93266-2570</p>
        </div>
        <div class="col-md-3 contact footer-menu">
          <h1>Social</h1>
          <ul>
            <li><i class="fab fa-facebook"></i><a href="https://www.facebook.com/academiaworkgymbraganca" target="_blank">&nbsp&nbspFacebook</a></li>
            <li><i class="fab fa-instagram"></i><a href="https://instagram.com/academiaworkgymbraganca" target="_blank">&nbsp&nbspInstagram</a></li>
          </ul>
        </div>
        <div class="col-md-3 contact">
          <h1>Dias e Horários</h1>
          <p>Segunda a Quinta-feira das 6h00 às 22h00</p>
          <p>Sexta-feira das 6h00 às 21h00</p>
          <p>Sábado das 6h00 às 14h00</p>
          <p>Domingo das 9h00 às 12h00</p>
      </div>
    </div>
  </div>
  
  <!-- Scroll To Top --> 
  
  <a id="back-top" class="back-to-top page-scroll" href="#main"> <i class="ion-ios-arrow-thin-up"></i> </a> 
  
  <!-- Scroll To Top Ends--> 
  
</div>
<!-- Main Section -->
</div>
<!-- Wrapper--> 

<!-- Jquery and Js Plugins --> 
<script type="text/javascript" src="site/js/jquery-2.1.1.js"></script> 
<script type="text/javascript" src="site/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="site/js/plugins.js"></script> 
<script type="text/javascript" src="site/js/menu.js"></script> 
<script type="text/javascript" src="site/js/custom.js"></script> 
<script src="site/js/jquery.subscribe.js"></script>
<script type="text/javascript" src="site/js/all.min.js"></script>
<script type="text/javascript" src="site/js/valida.js"></script>
</body>
</html>
