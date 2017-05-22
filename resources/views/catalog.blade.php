@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Catalog</div>
                <div class="panel-body">
					@foreach($y as $one)
						<div class='line_name'><a href="{{asset($one->id)}}"><h2>{{$one->name}}</h2></a></div>
					@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
