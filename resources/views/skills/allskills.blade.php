@extends('layouts.app')

@section('content')

<script>
    var arr = [
            @foreach($skillsValue as $skill)
                " {{ $skill->description }} ",
            @endforeach
        ];
</script>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="">Выбери навыки, которыми ты владеешь </h1>
        </div>
        <div class="panel-body">
            <p class=lead>Поставь оценку от 1 до 5, чтобы указать степень владения определенным навыком:</p>
            @foreach($skillsValue as $skill)
                <p><b>{{ $skill->id }}</b> - {{ $skill->description }}</p>
            @endforeach
        </div>
    </div>


<div class="panel-group skillsBackground" id="0">
    @include ('skills.skillview', $treeData)
</div>

@include('skills.modals')

<script>
    function showBranch(obj) {
        while(obj.data().parent != null)
        {
            obj.collapse('show');
            obj = $(obj.data().parent);
        }
    }
    
    @if(isset($_GET['id'])) 
        $(document).ready(function(){
            var obj = $("#{{$_GET['id']}}");
            showBranch(obj);
        });
    @else
        @if(isset($_GET['array_id']))
            $(document).ready(function(){
                var obj = {{$_GET['array_id']}};
                obj.forEach(function(skill, i, obj) {
                    showBranch($('#' + skill));
                });
            });
        @endif
    @endif
    
    $('input[name="add-skill-value"]').change(function () {
            var text = arr[$(this).data().skillValue - 1];
            $.get('/user/skill/' + $(this).data().skillId + '/' + $(this).data().skillValue + '/save',
            function(data) {
                $('div.' + data.skillId + '-alert').text(data.text);
                if (data.add)
                    $('button.' + data.skillId + '-btn-delete').removeAttr('disabled');
            });
            $('div.' + $(this).data().skillId + '-text').text(text);
        });

    $('button[name="delete-user-skill"]').click(function() {
        $.get('/user/skill/' + $(this).data().skillId + '/delete', function(data) {
            $('div.' + data.skillId + '-alert').text(data.text);
            $('button.' + data.skillId + '-btn-delete').attr('disabled', true);
            $('div.' + data.skillId + '-btn').find('label').removeClass('active')
                    .end().find('[type="radio"]').prop('checked', false);
        }); 
    });

    $('a[name="open-childs"]').click(function() {
        $('div.' + $(this).data().skillId + '-text').text(arr[$('div.' + $(this).data().skillId + '-btn').find('label.active').find('input').data().skillValue - 1]); 
    });
    
    $('button[name="delete-skill"]').click(function() {
        event.stopPropagation();
        $('.delete-modal').modal('show');
        var skill_id = $(this).data().skillId;
        $('button.modal-btn-delete').on('click', function(event) {
            $.get('/skill/' + skill_id + '/delete', function(data) {
                alert(data.text);
                $('div.' + skill_id).remove();
            });
            $(this).off(event);
        });
    });
    
    
    var modal_text = $('div.modal-body').find('input.skillText');
    var modal_textarea = $('div.modal-body').find('textarea.skillDesc');
    var modal_checkbox = $('div.modal-body').find('input.skillAppoint');
    
    $('button[name="add-skill"]').click(function() {
        event.stopPropagation();
        modal_text.val('');
        modal_textarea.val('');
        modal_checkbox.prop('checked', false);
        $('.edit-modal').modal('show');
        var id_skill = $(this).data().skillId;
        $('button.modal-btn-save').on('click', function(event) {
            $.get('/skill/' + id_skill + '/add', { 
                name: modal_text.val(), 
                description: modal_textarea.val(), 
                appoint: modal_checkbox.prop('checked'),
                parent_skill_id: id_skill,
            },  function(data) {
                    if (data.reload)
                        window.location='/skills?id=' + id_skill;
                    else
                        alert(data.text);
            });
            $(this).off(event);
        });
        /////// Добавить появление нового элемента без перезагрузки страницы
    });
    
  
    $('button[name="edit-skill"]').click(function() {
        event.stopPropagation();
        $('.edit-modal').modal('show');
        var id_skill = $(this).data().skillId;
        $.get('/skill/' + id_skill + '/get', function(data) {
            modal_text.val(data.name);
            modal_textarea.val(data.description);
            modal_checkbox.prop('checked', data.appoint);
        });
        $('button.modal-btn-save').on('click', function(event) {
           $.get('/skill/' + id_skill + '/edit', {
                name: modal_text.val(), 
                description: modal_textarea.val(), 
                appoint: modal_checkbox.prop('checked'),
                skill_id: id_skill,
           }, function(data) {
                if (data.reload)
                    window.location='/skills?id=' + id_skill;
                else
                    alert(data.text);
           }); 
           $(this).off(event);
        });
        ////Добавить обновление элементов
    });
    
</script>
@stop
