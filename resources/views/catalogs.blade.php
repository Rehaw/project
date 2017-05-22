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
                <div class="panel-heading">Catalogs</div>
                <div class="panel-body">
					@foreach($cats as $one)
						<div class='line'>
							<div class='line_name'><a href="{{asset('catalog'.'/'.$one->id)}}"><h2>{{$one->name}}</h2></a></div>
							<br style='clear:both' />
						</div>
					@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
