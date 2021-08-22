<?php 
	require_once('functions.php'); 
	include_once '../verificaLogin.php';
	view_treino($_GET['id']);

	$id = $_GET['id'];

	$pdo = getConnection();
	$consulta = $pdo->query("SELECT * FROM treinos WHERE id = '$id'");
	$res = $consulta->fetch(PDO::FETCH_ASSOC);

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Aluno: <?php echo $treino['nome']; ?>&nbsp&nbsp&nbsp&nbsp<a class="btn btn-primary" href="http://localhost/workgym/treinos/pdf/index.php?id=<?php echo $res['id']; ?>" target="_blank"><i class="fa fa-print"></i> Imprimir</a></h2>

<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<div class="row">
	<div class="col-md-4">
		<dl class="dl-horizontal">
			<dt>CPF:</dt>
			<dd><?php echo $treino['cpftreino']; ?></dd>
			<dt>Celular:</dt>
			<dd><?php echo $treino['celular']; ?></dd>
		</dl>	
	</div>	
</div>	

<table border=1 width=100%>
	<thead>
		<tr><td colspan="4" style="background-color:#D8D8D8"><center>LISTA DE EXERCICIOS - <?php echo $treino['dttreino']; ?></center></td></tr>
		<tr>
			<td style="background-color:#D8D8D8"><center>ALUNO</center></td>
			<td colspan="3"><center><?php echo $treino['nome']; ?></center></td>
		</tr>
		<tr>
			<td><center>GRUPO MUSCULAR</center></td>
			<td style="background-color:#D8D8D8"><center>EXERCICIO</center></td>
			<td style="background-color:#D8D8D8"><center>SERIE</center></td>
			<td style="background-color:#D8D8D8"><center>REPETIÇÃO</center></td>
		</tr>
	</thead>
	<tbody>
		<tr><td rowspan="4" style="background-color:#D8D8D8"><center>PEITO</center></td>
			<td><?php echo $res['peito1']; ?></td>
			<td><?php echo $res['seriepei1']; ?></td>
			<td><?php echo $res['repetpei1']; ?></td></tr>
			<tr><td><?php echo $res['peito2']; ?></td>
			<td><?php echo $res['seriepei2']; ?></td>
			<td><?php echo $res['repetpei2']; ?></td></tr>
			<tr><td><?php echo $res['peito3']; ?></td>
			<td><?php echo $res['seriepei3']; ?></td>
			<td><?php echo $res['repetpei3']; ?></td></tr>
			<tr><td><?php echo $res['peito4']; ?></td>
			<td><?php echo $res['seriepei4']; ?></td>
			<td><?php echo $res['repetpei4']; ?></td></tr>
			<tr><td rowspan="4" style="background-color:#D8D8D8"><center>COSTAS</center></td>
			<td><?php echo $res['costas1']; ?></td>
			<td><?php echo $res['seriecos1']; ?></td>
			<td><?php echo $res['repetcos1']; ?></td></tr>
			<tr><td><?php echo $res['costas2']; ?></td>
			<td><?php echo $res['seriecos2']; ?></td>
			<td><?php echo $res['repetcos2']; ?></td></tr>
			<tr><td><?php echo $res['costas3']; ?></td>
			<td><?php echo $res['seriecos3']; ?></td>
			<td><?php echo $res['repetcos3']; ?></td></tr>
			<tr><td><?php echo $res['costas4']; ?></td>
			<td><?php echo $res['seriecos4']; ?></td>
			<td><?php echo $res['repetcos4']; ?></td></tr>
			<tr><td rowspan="4" style="background-color:#D8D8D8"><center>PERNAS</center></td>
			<td><?php echo $res['perna1']; ?></td>
			<td><?php echo $res['serieper1']; ?></td>
			<td><?php echo $res['repetper1']; ?></td></tr>
			<tr><td><?php echo $res['perna2']; ?></td>
			<td><?php echo $res['serieper2']; ?></td>
			<td><?php echo $res['repetper2']; ?></td></tr>
			<tr><td><?php echo $res['perna3']; ?></td>
			<td><?php echo $res['serieper3']; ?></td>
			<td><?php echo $res['repetper3']; ?></td></tr>
			<tr><td><?php echo $res['perna4']; ?></td>
			<td><?php echo $res['serieper4']; ?></td>
			<td><?php echo $res['repetper4']; ?></td></tr>
			<tr><td rowspan="4" style="background-color:#D8D8D8"><center>BICEPS</center></td>
			<td><?php echo $res['biceps1']; ?></td>
			<td><?php echo $res['seriebic1']; ?></td>
			<td><?php echo $res['repetbic1']; ?></td></tr>
			<tr><td><?php echo $res['biceps2']; ?></td>
			<td><?php echo $res['seriebic2']; ?></td>
			<td><?php echo $res['repetbic2']; ?></td></tr>
			<tr><td><?php echo $res['biceps3']; ?></td>
			<td><?php echo $res['seriebic3']; ?></td>
			<td><?php echo $res['repetbic3']; ?></td></tr>
			<tr><td><?php echo $res['biceps4']; ?></td>
			<td><?php echo $res['seriebic4']; ?></td>
			<td><?php echo $res['repetbic4']; ?></td></tr>
			<tr><td rowspan="4" style="background-color:#D8D8D8"><center>TRICEPS</center></td>
			<td><?php echo $res['triceps1']; ?></td>
			<td><?php echo $res['serietri1']; ?></td>
			<td><?php echo $res['repettri1']; ?></td></tr>
			<tr><td><?php echo $res['triceps2']; ?></td>
			<td><?php echo $res['serietri2']; ?></td>
			<td><?php echo $res['repettri2']; ?></td></tr>
			<tr><td><?php echo $res['triceps3']; ?></td>
			<td><?php echo $res['serietri3']; ?></td>
			<td><?php echo $res['repettri3']; ?></td></tr>
			<tr><td><?php echo $res['triceps4']; ?></td>
			<td><?php echo $res['serietri4']; ?></td>
			<td><?php echo $res['repettri4']; ?></td></tr>
			<tr><td rowspan="4" style="background-color:#D8D8D8"><center>OMBRO</center></td>
			<td><?php echo $res['ombro1']; ?></td>
			<td><?php echo $res['serieomb1']; ?></td>
			<td><?php echo $res['repetomb1']; ?></td></tr>
			<tr><td><?php echo $res['ombro2']; ?></td>
			<td><?php echo $res['serieomb2']; ?></td>
			<td><?php echo $res['repetomb2']; ?></td></tr>
			<tr><td><?php echo $res['ombro3']; ?></td>
			<td><?php echo $res['serieomb3']; ?></td>
			<td><?php echo $res['repetomb3']; ?></td></tr>
			<tr><td><?php echo $res['ombro4']; ?></td>
			<td><?php echo $res['serieomb4']; ?></td>
			<td><?php echo $res['repetomb4']; ?></td></tr>
			<tr><td rowspan="4" style="background-color:#D8D8D8"><center>OBSERVAÇÕES</center></td>
			<td rowspan="4" colspan="3"><?php echo $res['obstreino']; ?></td>
		</tr>
	</tbody>	
</table>

<br>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="editTreino.php?id=<?php echo $treino['idtreino']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a>
	  <a href="index.php" class="btn btn-default"><i class="fa fa-arrow-left"></i> Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>