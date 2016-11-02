@extends('layouts.app')

@section('content')

@include('shops.modals')
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
        @foreach($cats as $items)
            <h1>{{$items->name}}</h1>
            <div class="row">
            @foreach($items->actions as $item)
                <div class="col-md-2">
                    <p><b>{{ $item->name }}</b></p>
                    <p>{{ $item->description }}</p>
                    @foreach($item->actionCurrencies as $cur)
                        <p><i>{{ $cur->currency->name }}: {{ $cur->value }}</i></p>
                    @endforeach
                    <button type="button" class="btn btn-primary btn-xs buy-item" data-item-id="{{ $item->id }}">Купить</button>
                    <button type="button" class="btn btn-primary btn-xs select-user" data-item-id="{{ $item->id }}">Купить другу</button>
                </div>
            @endforeach 
            </div>
        @endforeach
        </div>
    </div>
</div>

<script>
    $('button.buy-item').click(function() {
        location.href = '/shop/buy/' + $(this).data().itemId;
    });
    
    $('button.select-user').click(function() {
        $itemId = $(this).data().itemId;
        $('.select-user-modal').modal('show');
        $('input.user-email').change(function() {
            $.get('shop/find/' + $('input.user-email').val(), function(data) {
                if (data != 'empty') {
                    $('i.fa').removeClass('fa-close');
                    $('i.fa').addClass('fa-check')
                }
                else {
                    $('i.fa').removeClass('fa-check')
                    $('i.fa').addClass('fa-close');
                }
            });
        });
        $('button.modal-btn-buy').click(function() {
            if ($('input.user-email').val() == '')
                    alert('Поле не должно быть пустым.');
            else
                $.get('shop/find/' + $('input.user-email').val(), function(data) {
                    if (data != 'empty') {
                        location.href = 'shop/buy/' + $itemId + '/' + $('input.user-email').val();
                    }
                    else {
                        alert('Пользователя с таким email не существует.');
                    }
                });
        });
        /////// Добавить появление нового элемента без перезагрузки страницы
    });
</script>
@endsection