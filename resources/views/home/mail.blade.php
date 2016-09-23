<div style=" height: 450px; " class="half-unit">
    <dtitle>Сообщения</dtitle>
    <hr>
    @foreach ($action as $val)
    <div class="text">
        <p><grey  style=" font-size: 17px; "  >{{ $val->name }}</grey> {{ $val->body }} <i>{{ $val->description }} {{ $val->message }}</i></p>
    </div>
    @endforeach

</div>
