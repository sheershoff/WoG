@extends('layouts.app')

@section('content')
<div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="">Магазин</h1>
        </div>
        <div class="panel-body">
            <p class=lead>Здесь ты можешь приобрести различные </p>
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="panel panel-body panel-group">
        @foreach($items as $item)
            <div class="col-md-2">
                <p>{{ $item->name }}</p>
                <p>{{ $item->description }}</p>
                @foreach($item->actionCurrencies as $cur)
                    <p>{{ $cur->currency->name }}: {{ $cur->value }}</p>
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