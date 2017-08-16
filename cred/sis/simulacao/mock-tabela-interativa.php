<?php
    require_once '../../valida.php';
require_once '../../conecta.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>SIS Control</title>
	
	<!-- Latest compiled and minified CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"  rel="stylesheet" >
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

	<!-- Optional theme -->
	<link rel="stylesheet" href="../../css/dashboard.css">

	<!-- JavaScript da tabela interativa -->
	<script src="../bootstrap.min.js"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script type="text/javascript" src="../css/bootstrap.min.js"></script>

	<!-- Script responsavel por adicionar uma nova linha a tabela-->
	<script type="text/javascript">
        var item = 0;
        var qtd = 0;
        var serv = 0;

		// Função responsável em receber um objeto e extrair as informações necessárias para adicionar uma linha.
        function adicionarUsuario()
        {
            var local=document.getElementById('ficha');
            var tblBody = local.tBodies[0];
            var newRow = tblBody.insertRow(-1);
            var ind = newRow.rowIndex;
			/*
            var newCell0 = newRow.insertCell(0);
            newCell0.innerHTML = '<td><input class="form-control" type="text" name="nome['+ ind +']" placeholder="Informe o Cardápio" required/></td>';
			*/
            var newCell0 = newRow.insertCell(0);
            //newCell0.innerHTML = '<td><input class="form-control" type="text" id="item" name="item['+ ind +']" autocomplete="off" required/></td>';					
											
			newCell0.innerHTML = '<td><select class="col-sm-10 form-control" id="item" name="item['+ ind +']"><option value="0">Selecione</option> <?php $result_pts = "SELECT id, nome FROM produtos ORDER BY nome ASC"; $resultado_pts = mysqli_query($connect, $result_pts); while($rows_pts = mysqli_fetch_assoc($resultado_pts)){ echo" <option>".mb_convert_case($rows_pts['nome'], MB_CASE_UPPER)."</option> "; } ?></select></td>';

            var newCell1 = newRow.insertCell(1);
			newCell1.innerHTML = '<td><input class="form-control" type="text" name="quantidade['+ ind +']" placeholder="Ex: 1.200" pattern="[0-9.]{3,7}" required/></td>';
			
			var newCell2 = newRow.insertCell(2);
            newCell2.innerHTML = '<td><button type="button" onclick="removerLinha(this)" class="btn btn-xs btn-danger" />Excluir</button></td>';
        }

		// Função responsável em receber um objeto e extrair as informações necessárias para a remoção da linha.
        function removerLinha(obj) {
 
                // Capturamos a referência da TR (linha) pai do objeto
                var objTR = obj.parentNode.parentNode;
                // Capturamos a referência da TABLE (tabela) pai da linha
                var objTable = objTR.parentNode;
                // Capturamos o índice da linha
                var indexTR = objTR.rowIndex;
                // Chamamos o método de remoção de linha nativo do JavaScript, passando como parâmetro o índice da linha  
                objTable.deleteRow(indexTR);
                // Exibe uma mensagem de confirmação da remoção
                //alert("Remoção Efetuada com Sucesso!!");
				return false;
         }
    </script>

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
			<a class="navbar-brand" href="../index.php">SISBI - Controle de Produção</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a><?php
						$login_session=$_SESSION['login_user'];
						echo ($login_session);
						?></a></li>
				<li><a href="../logout.php">Sair</a></li>
			</ul>
			</div>
		</div>
		</nav>
	<br>
<body>
	<div class="container-fluid">
	
		<h3 class="page-header">Cadastro de Ficha Técnica</h3>
		<div class="container-fluid">
			<form name="formficha" method="post" action="dbFichaTecnica/create.php">

			<div class="form-group col-md-12">
				<label class="col-sm-1 control-label">Receita:</label>
					<div class="col-sm-11">
						<select class="col-sm-10 form-control" id="receita" name="receita">	
							<option>Selecione</option>
							<?php
			
								$result_rcs = "SELECT id, nome FROM preparacoes WHERE active = 1 ORDER BY nome ASC";
								$resultado_rcs = mysqli_query($connect, $result_rcs);
								while($rows_rcs = mysqli_fetch_assoc($resultado_rcs)){
									echo"
										<option>".mb_convert_case($rows_rcs['nome'], MB_CASE_UPPER)."</option> 
									";
								} 
				
							?>
						</select>
					</div>
			</div>

			<div class="form-group col-md-6">
				<label class="col-sm-2 control-label">Cardápio:</label>
					<div class="col-sm-10">
						<select class="col-sm-10 form-control" id="cardapio" name="cardapio">	
							<option>Selecione</option>
							<?php
			
								$result_cds = "SELECT id, nome FROM cardapios WHERE active = 1 ORDER BY nome ASC";
								$resultado_cds = mysqli_query($connect, $result_cds);
								while($rows_cds = mysqli_fetch_assoc($resultado_cds)){
									echo"
										<option>".mb_convert_case($rows_cds['nome'], MB_CASE_UPPER)."</option> 
									";
								} 
				
							?>
						</select>
					</div>
			</div>

			<div class="form-group col-md-6">
				<label class="col-sm-2 control-label">Serviço:</label>
					<div class="col-sm-10">
						<select class="col-sm-10 form-control" id="servico" name="servico">	
							<option>Selecione</option>
							<?php
			
								$result_svs = "SELECT id, nome FROM servicos WHERE active = 1 ORDER BY nome ASC";
								$resultado_svs = mysqli_query($connect, $result_svs);
								while($rows_svs = mysqli_fetch_assoc($resultado_svs)){
									echo"
										<option>".mb_convert_case($rows_svs['nome'], MB_CASE_UPPER)."</option> 
									";
								} 
				
							?>
						</select>
					</div>
			</div>

			<div class="form-group col-md-6">
				<label class="col-sm-2 control-label">Categoria:</label>
					<div class="col-sm-10">
						<select class="col-sm-10 form-control" id="grupoprato" name="grupoprato">	
							<option>Selecione</option>
							<?php
			
								$result_cts = "SELECT id, nome FROM grupopratos WHERE active = 1 ORDER BY nome ASC";
								$resultado_cts = mysqli_query($connect, $result_cts);
								while($rows_cts = mysqli_fetch_assoc($resultado_cts)){
									echo"
										<option>".mb_convert_case($rows_cts['nome'], MB_CASE_UPPER)."</option> 
									";
								} 
				
							?>
						</select>
					</div>
			</div>

			<div class="form-group col-md-6">
				<label class="col-sm-2 control-label">Setor:</label>
					<div class="col-sm-10">
						<select class="col-sm-10 form-control" id="setor" name="setor">	
							<option>Selecione</option>
							<?php
			
								$result_sts = "SELECT id, nome FROM setores WHERE active = 1 ORDER BY nome ASC";
								$resultado_sts = mysqli_query($connect, $result_sts);
								while($rows_sts = mysqli_fetch_assoc($resultado_sts)){
									echo"
										<option>".mb_convert_case($rows_sts['nome'], MB_CASE_UPPER)."</option> 
									";
								} 
				
							?>
						</select>
					</div>
			</div>

			<div class="form-group col-md-4">
				<label class="col-sm-2 control-label">Criador:</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" id="resp" name="resp" required/>
					</div>
			</div>

			<div class="form-group col-md-4">
				<label class="col-sm-2 control-label">Tempo:</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" id="tpreparo" name="tpreparo" required/>
					</div>
			</div>

			<div class="form-group col-md-4">
				<label class="col-sm-2 control-label">Data:</label>
					<div class="col-sm-10">
						<input class="form-control" type="datetime-local" id="data" name="data" required/>
					</div>
			</div>

        	<table class='table table-striped table-bordered table-hover table-condensed' id="ficha">
				<thead>
					<tr>
						<th class="col-xs-9 col-sm-9 col-md-9 col-lg-9">Item</th>
						<th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Quantidade</th>
						<th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Ações</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<select class="col-sm-10 form-control" id="item" name="item[0]">
								<option>Selecione</option>
							<?php
			
								$result_pds = "SELECT id, nome FROM produtos WHERE active = 1 ORDER BY nome ASC";
								$resultado_pds = mysqli_query($connect, $result_pds);
								while($rows_pds = mysqli_fetch_assoc($resultado_pds)){
									echo"
										<option>".mb_convert_case($rows_pds['nome'], MB_CASE_UPPER)."</option> 
									";
								} 
				
							?>
							
						</select>
						</td>
						<td>
							<input class="form-control" type="text" id="quantidade" name="quantidade[0]" placeholder="Ex: 1.200" pattern="[0-9.]{3,7}" required/>
						</td>
						<td><button type="button" onclick="removerLinha(this)" class="btn btn-danger btn-xs" />Excluir</button></td>
					</tr>

				</tbody>
        	</table>

        	<p><input class="btn btn-xs btn-info" type="button" value="+ item" onclick="adicionarUsuario();" /></p> 
			
			<div class="form-group col-md-6">
				<label class="col-sm-12 control-label">Modo de Preparo:</label>
					<div class="col-sm-12">
						<textarea rows="5" class="col-sm-12 form-control" id="preparo" name="preparo"></textarea>
					</div>
			</div>

			<div class="form-group col-md-6">
				<label class="col-sm-12 control-label">Utensílios:</label>
					<div class="col-sm-12">
						<textarea rows="5" class="col-sm-12 form-control" id="utensilio" name="utensilio"></textarea>
					</div>
			</div>

			<div class="form-group">

				<input class="btn btn-xs btn-success" type="submit" value="Cadastrar Ficha Técnica"/>
				<!--
				<a href="card-prato.php">
					<button class="col-sm-1 btn btn-xs btn-danger" type="button">
						<span class='glyphicon glyphicon-arrow-left'></span> Retornar
					</button>
				</a>
				-->
			</div>

   	 		</form>

		</div>
	</div>
</body>
</html>
<script>
$(document).ready(function(){
 
 $('#item').typeahead({
  source: function(query, result)
  {
   $.ajax({
    url:"ajaxpro.php",
    method:"POST",
    data:{query:query},
    dataType:"json",
    success:function(data)
    {
     result($.map(data, function(item){
      return item;
     }));
    }
   })
  }
 });
 
});
</script>



