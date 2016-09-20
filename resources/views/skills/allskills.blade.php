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
    $('div.' + $(this).data().skillId + '-text').text(arr[$('div.' + $(this).data().skillId + '-btn').find('label.active').find('input').data().skillValue]); 
});
</script>
@stop
