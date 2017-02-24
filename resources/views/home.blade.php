@extends('layouts.app')

@section('styles')
	@parent
	<link href='/css/home.css' rel="stylesheet">
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @foreach($cats as $one)
					<div class='line'>
						<div class='line_name'>{{$one->name}}</div>
							<div class='line_check'>
								<input class='check' type='checkbox'>
							</div>
							<br style='clear:both' />
					</div>
					@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
