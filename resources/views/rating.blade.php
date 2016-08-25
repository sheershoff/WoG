@extends('layouts.app')

@section('content')

<div class="page-header" style="min-height:167px">
    <div style=" height: 170px; " class="panel panel-default">

        <span class="to-type">
            <h1>Они лучшие!</h1>
            <p>Готов возглавить список?</p>
        </span>
    </div>
</div>
<div class="container">
    <div class="row">

        <!-- /Rating/ XP/Gold -->
        <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
                        <table>
<thead>
			<tr>
			    <th></th>
			    <th>Name</th>
@foreach ($t as $tt=>$vv)
			    <th><img class="avatar" src="{{$vv['photo']}}" alt="{{$vv['name']}}"></th>
 @endforeach
			</tr>
		    </thead>
		    <tfoot>
			<tr>
			    <th></th>
			    <th>Name</th>
@foreach ($t as $tt=>$vv)
			    <th><img class="avatar" src="{{$vv['photo']}}" alt="{{$vv['name']}}"></th>
 @endforeach
			</tr>
		    </tfoot>
                            @foreach ($v as $bl)
                            <tr>
                                 <td><img class="avatar" src="{{$bl['photo']}}" alt="avatar"></td>
                                <td>{{$bl['name']}}</td>
                            @foreach ($t as $tt=>$vv)

                                <td>{{$bl[$tt]}}</td>
                            @endforeach
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript" src="{{asset('/js/typed.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/typedRun.js')}}"></script>
@endsection
