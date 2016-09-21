@extends('layouts.app')

@section('content')


    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="">Выбери навыки, которыми ты владеешь</h1>
        </div>
        <div class="panel-body">
            <p class=lead>Поставь оценку от 1 до 5, чтобы указать степень владения определенным навыком:</p>
            @foreach($skillsValue as $skill)
                <p><b>{{ $skill->id }}</b> - {{ $skill->description }}</p>
            @endforeach
        </div>
    </div>


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
        var text = arr[$(this).data().skillValue - 1];
        $.get('/user/skill/' + $(this).data().skillId + '/' + $(this).data().skillValue + '/save',
        function(data) {
            $('div.' + data.skillId + '-alert').text(data.text);
            if (data.add)
                $('button.' + data.skillId + '-btn-delete').removeAttr('disabled');
        }, "json");
        $('div.' + $(this).data().skillId + '-text').text(text);
    });
    
$('button[name="delete-skill"]').click(function() {
    $.get('/user/skill/' + $(this).data().skillId + '/delete', function(data) {
        $('div.' + data.skillId + '-alert').text(data.text);
        $('button.' + data.skillId + '-btn-delete').attr('disabled', true);
        $('div.' + data.skillId + '-btn').find('label').removeClass('active')
                .end().find('[type="radio"]').prop('checked', false);
    }, "json"); 
});

$('a[name="open-childs"]').click(function() {
    $('div.' + $(this).data().skillId + '-text').text(arr[$('div.' + $(this).data().skillId + '-btn').find('label.active').find('input').data().skillValue - 1]); 
});
</script>
@stop
