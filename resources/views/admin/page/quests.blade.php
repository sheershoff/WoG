@extends('admin.app')


@section('content')
  <h1 class="page-header">Квесты</h1>
  <div class="row">
  <div>
<div class="col-md-3 ">
  <div class="panel panel-default">
    <div class="panel-heading">Автомобили </div>
    <div class="panel-body">
      <button id="button_add" onclick="getFormProduct_new()" class="btn btn-default product_add" style="display: none;"><span class="glyphicon glyphicon-plus"></span>Добавить</button>
      <table class="table" ng-cloak>
        <thead>
          <tr>
            <th>Название</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody id="ElsemensProduct">
        @foreach ($currencys as $currency)
          <tr>
          <td>{{ $currency->name }}</td>       
          <th><div class="btn btn-default btn-xs edit" data-get-id="http://prokatlider.com/adminzone/Product/22" data-id="22"><span class="glyphicon glyphicon-pencil"></span></div></th> 
          <th><div class="btn btn-default btn-xs del" data-id="22"><span class="glyphicon glyphicon-remove"></span></div></th> 
          </tr>
        @endforeach
      
{{--           <tr>
          <td id="nameProductID-24">Nissan Serena</td>        
          <th><div class="btn btn-default btn-xs edit" data-get-id="http://prokatlider.com/adminzone/Product/24" data-id="24"><span class="glyphicon glyphicon-pencil"></span></div></th> 
          <th><div class="btn btn-default btn-xs del" data-id="24"><span class="glyphicon glyphicon-remove"></span></div></th> 
          </tr> --}}
        </tbody>
      </table>
<!--      <ul class="uk-pagination">
      <li><a class="first" href="/" title="Start"><i class="uk-icon-angle-double-left"></i></a></li>
      <li><a class="previous" href="/" title="Prev"><i class="uk-icon-angle-left"></i></a></li>
      <li><a class="" href="/" title="">1</a></li>
      <li class="uk-active"><span>2</span></li>
      <li><a class="next" href="/" title="Next"><i class="uk-icon-angle-right"></i></a></li>
      <li><a class="last" href="/" title="End"><i class="uk-icon-angle-double-right"></i></a></li
      </ul> -->
    </div>
  </div>
</div>
{{-- <div ng-include="'{{ asset('') }}admin-lib/form/questsForm.html'" onload="parts = current"></div> --}}
<div  ng-controller="myFormController">
  <div my-custom-url></div>
</div>
@stop

@section('script')
	<script type="text/javascript">
   var app = angular.module('app', []) .controller("myFormController", function ($scope) {

    });
    app.directive('myCustomUrl', function ($templateCache) {
      return {
        restrict: "E",
        templateUrl: '{{ asset('') }}admin-lib/form/questsForm.html',
        link: function(scope, iElement, iAttrs) {
         console.log('dire')
        }
      };
    });
  </script>
@stop