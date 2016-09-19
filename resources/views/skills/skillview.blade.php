@foreach($treeData as $k=>$v)
<div class="panel-heading half-unit">
    <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $k }}">
            @if(!empty($v['skillValue']))
                <dtitle><b>{{ $v['name'] }} ({{ $v['skillValue'] }})<b></dtitle>
            @else
                <dtitle>{{ $v['name'] }}</dtitle>
            @endif 
        </a>
    </h4>
</div>
<div id="collapse{{ $k }}" class="panel-collapse collapse skillsBackground">
    <div class="panel-body">
        @if($v['appoint'])
            @if(isset($skillsValue))
                <div class="btn-group" data-toggle="buttons">
                    @foreach($skillsValue as $value)
                        @if (isset($v['skillValue']) and $v['skillValue'] == $value->id)
                            <label class="btn btn-primary active">
                                <input type="radio" name="add-skill-value" class="add-skill-value active"
                                       data-skill-id="{{ $k }}" data-skill-value="{{ $value->id }}" 
                                           data-type="true" id="" checked="">{{ $value->id }}
                            </label>
                        @else
                            <label class="btn btn-primary">
                                <input type="radio" name="add-skill-value" class="add-skill-value active" 
                                       data-skill-id="{{ $k }}" data-skill-value="{{ $value->id }}" 
                                       data-type="true" id="">{{ $value->id }}
                            </label>
                        @endif
                    @endforeach
                </div>
            @if(!empty($v['skillValue']))
                <button type="button" name ="delete-skill" data-skill-id="{{ $k }}" class="btn btn-default">X</button>
            @endif
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