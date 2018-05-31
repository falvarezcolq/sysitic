@extends('layout.admin')

	@section('content')
		<table class="table">
			<thead>
				<th>Código Laboratorio</th>
				<th>Nombre de Laboratorio</th>
				<th>Ubicación</th>
				<th>Responsable</th>
				<th>Acción </th>
			</thead>
			<tbody id="laboratories">						
			</tbody>
		</table>
	@endsection

	@section('scripts')
     <script src="{{ asset('sysitic/js/laboratory.index.js')}}"></script>
    @endsection