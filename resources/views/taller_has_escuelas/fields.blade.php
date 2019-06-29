<!-- Taller Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Taller_id', 'Taller Id:') !!}
    {!! Form::number('Taller_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tallerHasEscuelas.index') !!}" class="btn btn-default">Cancel</a>
</div>
