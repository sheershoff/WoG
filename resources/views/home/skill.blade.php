@if (count($skill) > 0)
<div class="dash-unit">
    <dtitle>Навыки</dtitle>
    <hr>
    @foreach ($skill as $val)
    <div class="cont">
        <p>{{  $val->name  }} <i>{{  $val->value  }}</i></p>
    </div>
    {{--надо придумать что такое макс - пока не понятно.
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%;"><span class="sr-only">60% Complete</span>

            </div>
        </div>--}}
    @endforeach
</div>
@endif