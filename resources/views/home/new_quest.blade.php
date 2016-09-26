
@if (count($passiveQuests) > 0)
<div id='Quest'  class="half-unit">
    <dtitle>Новые задания</dtitle>
    <hr>
    @foreach ($passiveQuests as $q)
    <div class="cont2">
        {{--<img style="height: 45px; width: 45px;" src="{{asset($q->photo())}}" alt="">--}}
        <br>
        <br>
        <p>{{$q->name}}</p>
        <p><bold>{{$q->description}}</bold></p>
        <button data-user-quest-id="{{$q->user_quests_id}}" data-quest-id="{{$q->id}}" data-type="true" type="submit" class="open-quest btn btn-default btn-xs">Принять</button>
    </div>
    @endforeach
</div>
@endif
