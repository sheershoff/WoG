@extends('layouts.app')

@section('content')
<div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="">Магазин</h1>
        </div>
        <div class="panel-body">
            <p class=lead>Здесь ты можешь приобрести различные игровые и неигровые товары.</p>
            <p>Ваши текущие валюты:</p>
            @foreach($cash as $val)
                <p>{{ $val->name }}: {{ $val->value }}</p>
            @endforeach
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="panel panel-body panel-group">
        @foreach($items as $item)
            <div class="col-md-2">
                <p><b>{{ $item->name }}</b></p>
                <p>{{ $item->description }}</p>
                @foreach($item->actionCurrencies as $cur)
                    <p><i>{{ $cur->currency->name }}: {{ $cur->value }}</i></p>
                @endforeach
                <button type="button" class="btn btn-primary buy-item" data-item-id="{{ $item->id }}">Купить</button>
            </div>
        @endforeach
        </div>
    </div>
</div>

<script>
    $('button.buy-item').click(function() {
        $.get('/shop/buy/' + $(this).data().itemId, function(data) {
            if (!data.error)
                alert(data.text);
            else
                alert(data.text);
        });
    });
</script>
@endsection