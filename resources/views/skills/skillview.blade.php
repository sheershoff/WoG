    <ul>
        @foreach($treeData as $k=>$v) 
            <li>
                <p>{{ $v['name'] }}</p>
            </li>
            @if(!empty($v['children']))
                @include('skills.skillview', ['treeData'=>$v['children']])
            @endif
        @endforeach
    </ul>