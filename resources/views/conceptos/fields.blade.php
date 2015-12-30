<!-- Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id', 'Id:') !!}
	{!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('codigo', 'Codigo:') !!}
	{!! Form::number('codigo', null, ['class' => 'form-control']) !!}
</div>

<!-- Detalle Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('detalle', 'Detalle:') !!}
	{!! Form::text('detalle', null, ['class' => 'form-control']) !!}
</div>

<!-- Retencion Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('retencion', 'Retencion:') !!}
	{!! Form::text('retencion', null, ['class' => 'form-control']) !!}
</div>

<!-- Familia Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('familia', 'Familia:') !!}
	{!! Form::text('familia', null, ['class' => 'form-control']) !!}
</div>

<!-- Haberdebe Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('haberdebe', 'Haberdebe:') !!}
	{!! Form::text('haberdebe', null, ['class' => 'form-control']) !!}
</div>

<!-- Sumaresta Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('sumaresta', 'Sumaresta:') !!}
	{!! Form::text('sumaresta', null, ['class' => 'form-control']) !!}
</div>

<!-- For Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('for', 'For:') !!}
	{!! Form::text('for', null, ['class' => 'form-control']) !!}
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
	{!! Form::text('por_sobre', null, ['class' => 'form-control']) !!}
</div>

<!-- Esfijo Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('esfijo', 'Esfijo:') !!}
	{!! Form::text('esfijo', null, ['class' => 'form-control']) !!}
</div>

<!-- Imp Por Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('imp_por', 'Imp Por:') !!}
	{!! Form::text('imp_por', null, ['class' => 'form-control']) !!}
</div>

<!-- Retencion1 Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('retencion1', 'Retencion1:') !!}
	{!! Form::text('retencion1', null, ['class' => 'form-control']) !!}
</div>

<!-- Basico Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('basico', 'Basico:') !!}
	{!! Form::text('basico', null, ['class' => 'form-control']) !!}
</div>

<!-- Con Carga Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('con_carga', 'Con Carga:') !!}
	{!! Form::text('con_carga', null, ['class' => 'form-control']) !!}
</div>

<!-- Es Formula Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('es_formula', 'Es Formula:') !!}
	{!! Form::text('es_formula', null, ['class' => 'form-control']) !!}
</div>

<!-- Quefor Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('quefor', 'Quefor:') !!}
	{!! Form::text('quefor', null, ['class' => 'form-control']) !!}
</div>

<!-- Ero1 Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('ero1', 'Ero1:') !!}
	{!! Form::number('ero1', null, ['class' => 'form-control']) !!}
</div>

<!-- Manual Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('manual', 'Manual:') !!}
	{!! Form::text('manual', null, ['class' => 'form-control']) !!}
</div>

<!-- Hblf Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('HBLF', 'Hblf:') !!}
	{!! Form::text('HBLF', null, ['class' => 'form-control']) !!}
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('created_at', 'Created At:') !!}
	{!! Form::date('created_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('updated_at', 'Updated At:') !!}
	{!! Form::date('updated_at', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    {!! link_to('/$MODEL_NAME_PLURAL_CAMEL$', 'Cancelar', ['class' => 'btn btn-warning']) !!}
</div>
