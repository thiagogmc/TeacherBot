<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <div class="col-md-6">
        <label for="name">{{ 'Nome' }}</label>
        <input class="form-control" name="name" type="text" id="name" value="{{ $bot->name or ''}}" >
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-6">
        <label for="subject">Assunto</label>
        <input class="form-control" name="subject" type="text" id="subject" value="{{ $bot->subject or ''}}" >
        {!! $errors->first('subject', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-6">
        <label for="subject">Statement</label>
        <input class="form-control" name="statement" type="text" id="statement" value="{{ $bot->statement or ''}}" >
        {!! $errors->first('statement', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-6">
        <label for="bot_id">Bot</label>
        {{!! Form::open(['bot_id', $bots]) !!}}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Cadastrar' }}">
    </div>
</div>
