@extends('layouts.app')

@section('content')

<script>
    var arr = [
            @foreach($skillsValue as $skill)
                " {{ $skill->description }} ",
            @endforeach
        ];
</script>

<div class="panel-group skillsBackground" id="accordion">
    @include ('skills.skillview', $treeData)
</div>



<script>
    
$('input[name="add-skill-value"]').change(function () {
        $.get('/user/skill/' + $(this).data().skillId + '/' + $(this).data().skillValue + '/save'); 
        var text = arr[$(this).data().skillValue - 1];
        $('div.' + $(this).data().skillId + '-text').text(text)
    });
    
$('button[name="delete-skill"]').click(function() {
    $.get('/user/skill/' + $(this).data().skillId + '/delete'); 
    $('div.' + $(this).data().skillId + '-text').text('Навык удален')
});
</script>
@stop
