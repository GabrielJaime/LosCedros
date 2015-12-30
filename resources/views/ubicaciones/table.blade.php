<div id="DivBodyTableubicaciones" class="box-body" >
    <table id="Tableubicaciones" class="table table-bordered table-striped table-hover dataTable" >
        <thead>
        <th width="50px">Acciones</th>
        <th>Id</th>
			<th>Descripcion</th>
			<th>Created At</th>
			<th>Updated At</th>
        </thead>
        <tbody>
        @foreach($ubicaciones as $ubicaciones)
            <tr>
                <td>
                    <a href="{!! route('ubicaciones.edit', [$ubicaciones->id]) !!}"><abbr title="Modificar"><i class="glyphicon glyphicon-edit"></i></abbr></a>
                	&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                	<a href="{!! route('ubicaciones.delete', [$ubicaciones->id]) !!}" onclick="return confirm('Seguro de Elimnar este Ubicaciones?')"><abbr title="Eliminar"><i class="glyphicon glyphicon-remove text-red"></i></abbr></a>
                </td>
                <td>{!! $ubicaciones->id !!}</td>
			<td>{!! $ubicaciones->descripcion !!}</td>
			<td>{!! $ubicaciones->created_at !!}</td>
			<td>{!! $ubicaciones->updated_at !!}</td>

            </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th width="50px">Acciones</th>
                <th>Id</th>
			<th>Descripcion</th>
			<th>Created At</th>
			<th>Updated At</th>
             </tr>
         </tfoot>
    </table>
</div>