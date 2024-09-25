
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_medico') }}</label>
    <div>
        {{ Form::text('id_medico', $cita->id_medico, ['class' => 'form-control' .
        ($errors->has('id_medico') ? ' is-invalid' : ''), 'placeholder' => 'Id Medico']) }}
        {!! $errors->first('id_medico', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">cita <b>id_medico</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_paciente') }}</label>
    <div>
        {{ Form::text('id_paciente', $cita->id_paciente, ['class' => 'form-control' .
        ($errors->has('id_paciente') ? ' is-invalid' : ''), 'placeholder' => 'Id Paciente']) }}
        {!! $errors->first('id_paciente', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">cita <b>id_paciente</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha_cita') }}</label>
    <div>
        {{ Form::text('fecha_cita', $cita->fecha_cita, ['class' => 'form-control' .
        ($errors->has('fecha_cita') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Cita']) }}
        {!! $errors->first('fecha_cita', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">cita <b>fecha_cita</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('tipo_cita') }}</label>
    <div>
        {{ Form::text('tipo_cita', $cita->tipo_cita, ['class' => 'form-control' .
        ($errors->has('tipo_cita') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Cita']) }}
        {!! $errors->first('tipo_cita', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">cita <b>tipo_cita</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
