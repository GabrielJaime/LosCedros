<!-- codigo Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id', 'Codigo:') !!}
    {!! Form::text('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Detalle Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('detalle', 'Detalle:') !!}
	{!! Form::text('detalle', null, ['class' => 'form-control']) !!}
</div>

<!-- Retencion Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('retencion', 'Retencion:') !!}
	{!! Form::select('retencion', [ 'S' => 'S', 'N' => 'N' ], null, ['class' => 'form-control']) !!}
</div>

<!-- Familia Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('familia', 'Familia:') !!}
	{!! Form::select('familia', [ 's' => 's', 'N' => 'N' ], null, ['class' => 'form-control']) !!}
</div>

<!-- Haberdebe Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('haberdebe', 'Haberdebe:') !!}
	{!! Form::select('haberdebe', [ 'H' => 'H', 'S' => 'S' ], null, ['class' => 'form-control']) !!}
</div>

<!-- Sumaresta Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('sumaresta', 'Sumaresta:') !!}
	{!! Form::select('sumaresta', [ 'S' => 'S', 'R' => 'R' ], null, ['class' => 'form-control']) !!}
</div>

<!-- For Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('for', 'For:') !!}
	{!! Form::select('for', [ 'S' => 'S', 'N' => 'N' ], null, ['class' => 'form-control']) !!}
</div>

<!-- Importe Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('importe', 'Importe:') !!}
	{!! Form::number('importe', null, ['class' => 'form-control']) !!}
</div>

<!-- Porcentaje Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('porcentaje', 'Porcentaje:') !!}
	{!! Form::number('porcentaje', null, ['class' => 'form-control']) !!}
</div>

<!-- Por Sobre Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('por_sobre', 'Por Sobre:') !!}
	{!! Form::select('por_sobre', [ 'B' => 'B', 'F' => 'F' ], null, ['class' => 'form-control']) !!}
</div>

<!-- Esfijo Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('esfijo', 'Esfijo:') !!}
	{!! Form::select('esfijo', [ 'S' => 'S', 'N' => 'N' ], null, ['class' => 'form-control']) !!}
</div>

<!-- Imp Por Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('imp_por', 'Imp Por:') !!}
	{!! Form::select('imp_por', [ 'C' => 'C', '%' => '%' ], null, ['class' => 'form-control']) !!}
</div>

<!-- Retencion1 Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('retencion1', 'Retencion1:') !!}
	{!! Form::select('retencion1', [ 'S' => 'S', 'N' => 'N' ], null, ['class' => 'form-control']) !!}
</div>

<!-- Basico Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('basico', 'Basico:') !!}
	{!! Form::select('basico', [ 'S' => 'S', 'N' => 'N' ], null, ['class' => 'form-control']) !!}
</div>

<!-- Con Carga Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('con_carga', 'Con Carga:') !!}
	{!! Form::select('con_carga', [ 'S' => 'S', 'N' => 'N' ], null, ['class' => 'form-control']) !!}
</div>

<!-- Es Formula Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('es_formula', 'Es Formula:') !!}
	{!! Form::select('es_formula', [ 'S' => 'S', 'N' => 'N' ], null, ['class' => 'form-control']) !!}
</div>

<!-- Quefor Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('quefor', 'Quefor:') !!}
	{!! Form::text('quefor', null, ['class' => 'form-control']) !!}
</div>

<!-- 1Ero Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('1ero', '1Ero:') !!}
	{!! Form::number('1ero', null, ['class' => 'form-control']) !!}
</div>

<!-- Manual Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('manual', 'Manual:') !!}
	{!! Form::select('manual', [ 'S' => 'S', 'N' => 'N' ], null, ['class' => 'form-control']) !!}
</div>

<!-- Hblf Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('HBLF', 'Hblf:') !!}
	{!! Form::select('HBLF', [ 'S' => 'S', 'N' => 'N' ], null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
