<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Crud Laravel</title>
	<link rel="stylesheet" href="">
</head>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<style>
		._content{
			width: 700px;
			display: flex;
			justify-content: center;
			margin-top: 100px;
		}
	</style>

<body>
	<div class="container">
		<h1>Sistema de Cleintes</h1>
		<div><a href="{{ url('/create_client') }}" class="btn btn-primary">Criar Cliente</a></div>		
	</div>	
	<div class="container _content">
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Nome</th>
					<th>Email</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Paulo Luis</td>
					<td>Pauloluis.f@gmail.com</td>
					<td>
						<input type="button" name="" value="Deletar" class="btn btn-danger">
						<input type="button" name="" value="Editar" class="btn btn-success">

					</td>
			</tr>
			</tbody>
		</table>
	</div>
	
</body>
</html>