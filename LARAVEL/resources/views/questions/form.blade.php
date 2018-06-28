<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <div class="col-md-6">
        <label for="name">{{ 'Nome' }}</label>
        <input required class="form-control" name="name" type="text" id="name" value="{{ $question->name or ''}}" >
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-6">
        <label for="bot_id">Bot</label>
        <br>
        <select name="bot_id" required class="form-control">
            <option value="">Selecione um bot</option>
            @foreach($bots as $bot)
            <option {{isset($question) ? ($bot->id == $question->bot->id ? 'selected' : '') : ''}} value="{{ $bot->id }}">{{$bot->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-12">
        <label for="subject">Assunto</label>
        <input required class="form-control" name="subject" type="text" id="subject" value="{{ $question->subject or ''}}" >
        {!! $errors->first('subject', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-12">
        <label for="subject">Enunciado</label>
        <textarea required class="form-control" name="statement" type="text" id="statement">{{ $question->statement or ''}}</textarea>
        {!! $errors->first('statement', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Cadastrar' }}">
    </div>
</div>
