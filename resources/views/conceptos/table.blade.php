<div id="DivBodyTableconceptos" class="box-body" >
    <table id="Tableconceptos" class="table table-bordered table-striped table-hover dataTable" >
        <thead>
        <th width="50px">Acciones</th>
        <th>Id</th>
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
			<th>Ero1</th>
			<th>Manual</th>
			<th>Hblf</th>
			<th>Created At</th>
			<th>Updated At</th>
        </thead>
        <tbody>
        @foreach($conceptos as $conceptos)
            <tr>
                <td>
                    <a href="{!! route('conceptos.edit', [$conceptos->id]) !!}"><abbr title="Modificar"><i class="glyphicon glyphicon-edit"></i></abbr></a>
                	&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                	<a href="{!! route('conceptos.delete', [$conceptos->id]) !!}" onclick="return confirm('Seguro de Elimnar este Conceptos?')"><abbr title="Eliminar"><i class="glyphicon glyphicon-remove text-red"></i></abbr></a>
                </td>
                <td>{!! $conceptos->id !!}</td>
			<td>{!! $conceptos->codigo !!}</td>
			<td>{!! $conceptos->detalle !!}</td>
			<td>{!! $conceptos->retencion !!}</td>
			<td>{!! $conceptos->familia !!}</td>
			<td>{!! $conceptos->haberdebe !!}</td>
			<td>{!! $conceptos->sumaresta !!}</td>
			<td>{!! $conceptos->for !!}</td>
			<td>{!! $conceptos->importe !!}</td>
			<td>{!! $conceptos->porcentaje !!}</td>
			<td>{!! $conceptos->por_sobre !!}</td>
			<td>{!! $conceptos->esfijo !!}</td>
			<td>{!! $conceptos->imp_por !!}</td>
			<td>{!! $conceptos->retencion1 !!}</td>
			<td>{!! $conceptos->basico !!}</td>
			<td>{!! $conceptos->con_carga !!}</td>
			<td>{!! $conceptos->es_formula !!}</td>
			<td>{!! $conceptos->quefor !!}</td>
			<td>{!! $conceptos->ero1 !!}</td>
			<td>{!! $conceptos->manual !!}</td>
			<td>{!! $conceptos->HBLF !!}</td>
			<td>{!! $conceptos->created_at !!}</td>
			<td>{!! $conceptos->updated_at !!}</td>

            </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th width="50px">Acciones</th>
                <th>Id</th>
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
			<th>Ero1</th>
			<th>Manual</th>
			<th>Hblf</th>
			<th>Created At</th>
			<th>Updated At</th>
             </tr>
         </tfoot>
    </table>
</div>