<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <div class="col-md-6">
        <label for="name" class="col-md-4">{{ 'Nome' }}</label>
        <input class="form-control" name="name" type="text" id="name" value="{{ $user->name or ''}}" >
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        <br>
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Salvar' }}">
    </div>
</div>
