<div class="container">
	@if(session('sucess'))
		<p class="alert-sucess">
			{{ session('sucess') }}
		</p>
	@endif
	<form action="{{ url('/create_client') }}" method="post">
		<!-- Token de Segurança -->
		{{ csrf_field() }}
		<div class="col-lg-3">
			<div class="form-group">
				<label for="name">Digite o nome</label>
				<input type="text" name="name" placeholder="Digite o nome" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">Digite o email</label>
				<input type="text" name="email" placeholder="Digite o email" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" value="Salvar" class="btn btn-primary">				
			</div>
		</div>
	</form>
</div>