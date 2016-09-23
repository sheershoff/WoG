@extends('layouts.app')


@section('content')
<!-- USER PROFILE BLOCK -->
<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <!--         	<div class="half-unit">
                            <dtitle>Local Time</dtitle>
                            <hr>
                                    <div class="clockcenter">
                                            <digiclock>12:45:25</digiclock>
                                                    <p>StatCounter Information</p>
                                    </div>
                            </div> -->
    @include('home.new_quest')

    @include('home.user')

    @include('home.balance')

    {{-- 	<div class="half-unit">
	      		<dtitle>Server Uptime</dtitle>
	      		<hr>
	      		<div class="cont">
					<p><img src="http://www.prepbootstrap.com/Content/images/shared/single-page-admin/up.png" alt=""> <bold>Up</bold> | 356ms.</p>
				</div>
			</div>
			<div class="half-unit">
	      		<dtitle>Server Uptime</dtitle>
	      		<hr>
	      		<div class="cont">
					<p><img src="http://www.prepbootstrap.com/Content/images/shared/single-page-admin/up.png" alt=""> <bold>Up</bold> | 356ms.</p>
				</div>
			</div> --}}
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

    @include('home.quest_list')

    @include('home.action_list')

    @include('home.mail')


    <!-- TO DO LIST -->
    {{--       		<div class="half-unit">
	      		<dtitle>To Do List</dtitle>
	      		<hr>
	      		<div class="cont">
					<p><bold>13</bold> | Pending Tasks</p>
				</div>
		             <div class="progress">
				        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%;"><span class="sr-only">60% Complete</span>

				        </div>
				     </div>
				 </div> --}}

</div>
<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">

    @include('home.inventory')

    @include('home.skill')

</div>
<script>

    $('.open-quest').click(function (event) {
        $.get('/user/quest/' + $(this).data().userQuestId + '/open', function (data) {
            /*optional stuff to do after success */
        });
        $('#Quest').html(' ');
        location.reload();

    });

// $.ajax({
// 	url: '/path/to/file',
// 	type: 'POST',
// 	dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
// 	data: {param1: 'value1'},
// })
// .done(function() {
// 	console.log("success");
// })
// .fail(function() {
// 	console.log("error");
// })
// .always(function() {
// 	console.log("complete");
// });

</script>
@stop