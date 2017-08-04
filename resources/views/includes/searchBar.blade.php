<div id="wrap">
    {!! Form::open(['role' => 'form','autocomplete'=>'on']) !!}
    {!! Form::input('text','search',null,['id'=>'search', 'class'=>'form-control', 'placeholder'=>"where are you looking for"]) !!}
    {!! Form::input('submit', 'search_submit', "Rechercher", ['id'=>'search_submit']) !!}
    {!! Form::close() !!}
</div>

