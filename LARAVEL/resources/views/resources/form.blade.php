<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <div class="col-md-6">
        <label for="name">{{ 'Nome' }}</label>
        <input class="form-control" name="name" type="text" id="name" value="{{ $resource->name or ''}}" >
        {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-6">
        <label for="bot_id">Bot</label>
        <br>
        <select name="bot_id" class="form-control">
            <option value="">Selecione um bot</option>
            @foreach($bots as $bot)
            <option {{isset($resource) ? ($bot->id == $resource->bot->id ? 'selected' : ''):''}} value="{{ $bot->id }}">{{$bot->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-6">
        <label for="content">Conteúdo</label>
        <textarea class="form-control" name="content" type="text" id="content" >{{ $resource->content or ''}}</textarea>
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Cadastrar' }}">
    </div>
</div>
