<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <label for="name">{{ 'Nome' }}</label>
            <input class="form-control" name="name" type="text" id="name" value="{{ $bot->name or ''}}" >
            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Cadastrar' }}">
    </div>
</div>
