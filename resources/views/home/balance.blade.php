<div class="dash-unit">
    <dtitle>Балансы</dtitle>
    <hr>
    <div class="cont">
        @foreach ($cash as $val)
        <p style="text-align: left;">{{$val->name}} <bold>{{$val->value}}</bold></p>
        @endforeach
    </div>

</div>
