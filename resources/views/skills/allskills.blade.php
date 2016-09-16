@extends('layouts.app')

@section('content')


<div class="panel-group skillsBackground" id="accordion">
    @include ('skills.skillview', $treeData)
</div>

<script>
    
$('input[name="add-skill-value"]').change(function () {
        $.get('/user/skill/' + $(this).data().skillId + '/' + $(this).data().skillValue + '/save'); 
        var text = ' Сохранено! Ваше значение текущего навыка: ' + $(this).data().skillValue;
        $('div.' + $(this).data().skillId + '-text').text(text)
    });
</script>
@stop
