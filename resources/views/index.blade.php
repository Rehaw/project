@extends('layouts.app')

@section('styles')
	@parent
	<link href="{{asset('/css/home.css')}}" rel="stylesheet">
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
					@foreach($tovars as $one)
						<a href="{{asset($one->id)}}"><h2>{{$one->name}}</h2></a>
						<img src="{{asset((isset($one->picture))?'uploads/thumb/'.$one->picture:'uploads/1487949694-249509332.jpg')}}" class="kartinka" />
					@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
