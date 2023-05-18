<div class="box box-info padding-1">
    <div class="box-body">
        {{-- problems con el update --}}
        <div class="form-group">
            {{ Form::label('dni') }}
            {{ Form::text('dni', $users->dni, ['class' => 'form-control' . ($errors->has('dni') ? ' is-invalid' : ''), 'placeholder' => 'dni']) }}
            {!! $errors->first('dni', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $users->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'nombre usuario']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nacimiento') }}
            {{ Form::input('date','nacimiento', $users->nacimiento, ['class' => 'form-control' . ($errors->has('nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'nacimiento']) }}
            {!! $errors->first('nacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::input('email','email', $users->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('password') }}
            {{ Form::input('password','password', $users->password, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'password']) }}
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            <label for="statu">Tipo de Servicio</label>
            <select name="type_service_id" class="form-control"  id="zona" >
                @if($type_service->count() > 0)
                     {{-- <option value="{{$type_service->id}}">{{$type_service->rol_service}}</option> --}}
                     @foreach($type_service as $type)
                     <option value="{{$type->id}}">{{$type->rol_service}}</option>
                        {{-- @if($type_service->direccion_z != $zona->direccion_z)
                         <option value="{{$zona->id}}">{{$zona->direccion_z}}</option>
                         @endif --}}                    
                     @endforeach
                @endif
            </select>
        </div>
         
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>