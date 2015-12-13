@if (count($errors) > 0)
	<!-- Form Error List -->
	<div class="callout callout-danger">
		<h4>Ops!! Algo salio mal!</h4>

		<br>

		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif
