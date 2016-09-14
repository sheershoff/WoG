@foreach($treeData as $k=>$v)
    <div class="panel-heading panel-success">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $k }}">
               @if(!empty($v['isLearn']))
                    <b>{{ $v['name'] }}</b>
                @else
                    {{ $v['name'] }}
                @endif 
            </a>
        </h4>
    </div>
    <div id="collapse{{ $k }}" class="panel-collapse collapse in">
      <div class="panel-body">
        @if(!empty($v['children']))
            @include('skills.skillview', ['treeData'=>$v['children']])
        @endif
      </div>
    </div>
@endforeach
