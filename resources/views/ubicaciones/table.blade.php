<table class="table">
    <thead>
    <th>Id</th>
			<th>Descripcion</th>
			<th>Created At</th>
			<th>Updated At</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($ubicaciones as $ubicaciones)
        <tr>
            <td>{!! $ubicaciones->id !!}</td>
			<td>{!! $ubicaciones->descripcion !!}</td>
			<td>{!! $ubicaciones->created_at !!}</td>
			<td>{!! $ubicaciones->updated_at !!}</td>
            <td>
                <a href="{!! route('ubicaciones.edit', [$ubicaciones->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('ubicaciones.delete', [$ubicaciones->id]) !!}" onclick="return confirm('Are you sure wants to delete this Ubicaciones?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
