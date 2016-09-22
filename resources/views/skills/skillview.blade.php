@foreach($treeData as $k=>$v)
<a name="open-childs" data-toggle="collapse" data-parent="#{{$v['parent_skill_id']}}" href="#{{ $k }}" data-skill-id="{{$k}}">
    <div class="panel-heading half-unit skillsHeader">
        <h4 class="panel-title">
                @if(!empty($v['skillValue']))
                    <dtitle><b>{{ $v['name'] }} ({{ $v['skillValue'] }})<b></dtitle>
                @else
                    <dtitle>{{ $v['name'] }}</dtitle>
                @endif 
    {{--        <button type="button" name="delete-skill" data-skill-id="{{$k}}" class="btn btn-xs navbar-right">Удалить</button>
            <button type="button" name="edit-skill" data-skill-id="{{$k}}" class="btn btn-xs navbar-right">Редактировать</button>
            <button type="button" name="add-skill" data-skill-id="{{$k}}" class="btn btn-xs navbar-right">Добавить</button>         --}}
        </h4>
    </div>
</a>

<div id="{{ $k }}"  data-parent="#{{$v['parent_skill_id']}}" class="panel-collapse collapse skillsBackground">
    <div class="panel-body">
        @if($v['appoint'])
            @if(isset($skillsValue))
                <div class="btn-group {{$k}}-btn" data-toggle="buttons">
                    @foreach($skillsValue as $value)
                        <label class="btn btn-primary @if(isset($v['skillValue']) and $v['skillValue'] == $value->id) active @endif ">
                            <input type="radio" name="add-skill-value" class="add-skill-value"
                                data-skill-id="{{ $k }}" data-skill-value="{{ $value->id }}" 
                                data-type="true" id="">{{ $value->id }}
                        </label>
                    @endforeach
                </div>
                <button type="button" name ="delete-user-skill" data-skill-id="{{ $k }}" class="btn btn-default {{ $k }}-btn-delete" @if(empty($v['skillValue'])) disabled @endif >X</button>
                <div class="{{$k}}-alert skillsText"></div>
                <div class="{{$k}}-text skillsText"></div>
            @endif
            <div class="skillsText"><p>{{ $v['description'] }}</p></div>
        @endif
        @if(!empty($v['children']))
            @include('skills.skillview', ['treeData'=>$v['children']])
        @endif
    </div>
</div>
@endforeach
