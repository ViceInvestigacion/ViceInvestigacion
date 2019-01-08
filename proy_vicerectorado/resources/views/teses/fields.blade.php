<!-- Tesis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tesis', 'Tesis:') !!}
    {!! Form::text('tesis', null, ['class' => 'form-control']) !!}
</div>

<!-- Facultad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('facultad', 'Facultad:') !!}
    {!! Form::text('facultad', null, ['class' => 'form-control']) !!}
</div>

<!-- Escuela Field -->
<div class="form-group col-sm-6">
    {!! Form::label('escuela', 'Escuela:') !!}
    {!! Form::text('escuela', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('teses.index') !!}" class="btn btn-default">Cancel</a>
</div>
