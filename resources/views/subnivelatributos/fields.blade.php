<!-- Clave Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clave', 'Clave:') !!}
    {!! Form::text('clave', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('valor', 'Valor:') !!}
    {!! Form::textarea('valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('subnivelatributos.index') !!}" class="btn btn-default">Cancel</a>
</div>
