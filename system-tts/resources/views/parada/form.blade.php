<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre de Referencia') }}
            {{ Form::text('name_ref', $parada->name_ref, ['class' => 'form-control' . ($errors->has('name_ref') ? ' is-invalid' : ''), 'placeholder' => 'nombre']) }}
            {!! $errors->first('name_ref', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('coordenada') }}
            {{ Form::text('coordenada', $parada->coordenada, ['class' => 'form-control' . ($errors->has('coordenada') ? ' is-invalid' : ''), 'placeholder' => 'nombre parada']) }}
            {!! $errors->first('coordenada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('img referencia') }}
            {{ Form::text('img_ref', $parada->img_ref, ['class' => 'form-control' . ($errors->has('img_ref') ? ' is-invalid' : ''), 'placeholder' => 'apellido parada']) }}
            {!! $errors->first('img_ref', '<div class="invalid-feedback">:message</div>') !!}
        </div>
          
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>