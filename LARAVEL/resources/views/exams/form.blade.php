<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <div class="col-md-6">
        <label for="name">{{ 'Data' }}</label>
        <input class="form-control" required name="date" type="date" id="date" value="{{ $exam->date or ''}}" >
        {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-6">
        <label for="bot_id">Bot</label>
        <br>
        <select name="bot_id" required class="form-control">
            <option value="">Selecione um bot</option>
            @foreach($bots as $bot)
            <option {{isset($exam) ? ($bot->id == $exam->bot->id ? 'selected' : ''):''}} value="{{ $bot->id }}">{{$bot->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-6">
        <label for="content">Conteúdo</label>
        <textarea required class="form-control" name="content" type="text" id="content" >{{ $exam->content or ''}}</textarea>
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-6">
        <label for="subject">Valor</label>
        <input class="form-control" name="score" type="number" required step=".01" value="{{ $exam->score or ''}}" id="score">
        {!! $errors->first('score', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Cadastrar' }}">
    </div>
</div>
