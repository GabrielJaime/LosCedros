<table class="table">
    <thead>
    <th>Codigo</th>
			<th>Detalle</th>
			<th>Retencion</th>
			<th>Familia</th>
			<th>Haberdebe</th>
			<th>Sumaresta</th>
			<th>For</th>
			<th>Importe</th>
			<th>Porcentaje</th>
			<th>Por Sobre</th>
			<th>Esfijo</th>
			<th>Imp Por</th>
			<th>Retencion1</th>
			<th>Basico</th>
			<th>Con Carga</th>
			<th>Es Formula</th>
			<th>Quefor</th>
			<th>1Ero</th>
			<th>Manual</th>
			<th>Hblf</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($conceptos as $concepto)
        <tr>
            <td>{{ $concepto->id }}</td>
			<td>{{ $concepto->detalle }}</td>
			<td>{{ $concepto->retencion }}</td>
			<td>{{ $concepto->imp_por }}</td>
			<td>{{ $concepto->retencion1 }}</td>
			<td>{{ $concepto->basico }}</td>
			<td>{{ $concepto->con_carga }}</td>
			<td>{{ $concepto->es_formula }}</td>
			<td>{{ $concepto->quefor }}</td>
			<td>{{ $concepto->ero }}</td>
			<td>{{ $concepto->manual }}</td>
			<td>{{ $concepto->HBLF }}</td>
            <td>
                <a href="{{ route('conceptos.edit', [$concepto->id]) }}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{{ route('conceptos.delete', [$concepto->id]) }}" onclick="return confirm('Are you sure wants to delete this Conceptos?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
