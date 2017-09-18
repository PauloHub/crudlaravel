<div class="container">
	@if(session('success'))
		<p class="alert-success">
			{{ session('success') }}
		</p>
	@endif
	<form action="{{ url('/edit_client', $client->id) }}" method="post">
		<!-- Token de Segurança -->
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="PUT">
		<div class="col-lg-3">
			<div class="form-group">
				<label for="name">Digite o nome</label>
				<input type="text" name="name" placeholder="Digite o nome" class="form-control" value="{{ $client->name }}">
			</div>
			<div class="form-group">
				<label for="email">Digite o email</label>
				<input type="text" name="email" placeholder="Digite o email" class="form-control" value="{{ $client->email }}">
			</div>
			<div class="form-group">
				<input type="submit" value="Salvar" class="btn btn-primary">				
			</div>
		</div>
	</form>
</div>