@extends('layouts.app')

@section('content')
<div class="container">

 @if(session('application_message'))
   <div class="alert alert-success" role="alert"><b>Congratulations! </b> {{ session('application_message') }}</div> 
 @endif

 {!! Form::open(['url' => 'workshops', 'method' => 'get']) !!}
 <div class="input-group">
   {!! Form::text('search_entry', null, ['class' => 'form-control', 'placeholder' => !empty($search_placeholder) ? $search_placeholder : 'Search for...' ]) !!}
   <span class="input-group-btn">{!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}</span>
 </div>
 {!! Form::close() !!}
 <hr/>
 @foreach($workshops->chunk(4) as $items)
  <div class="row">
   @foreach($items as $item)
    <div class="col-md-3">
      <div class="thumbnail text-center">

        <div class="caption">
	  
	  <img src="https://laravelcollective.com/img/full-logo.png" class="img-responsive" alt="...">
	  
          <p>
	    <div class="row">
	      <div class="col-xs-6"><span class="label label-info col-xs-12">Program</span>{{$item -> program}}</div>
	      <div class="col-xs-6"><span class="label label-info col-xs-12">Level</span>{{$item -> program}}</div>
	    </div>

	    <div class="row">
	      <div class="col-xs-6"><span class="label label-info col-xs-12">Start</span>{{$item -> program}}</div>
	      <div class="col-xs-6"><span class="label label-info col-xs-12">Finish</span>{{$item -> program}}</div>
	    </div>
	    
	    <div><span class="label label-info col-xs-12">Schedule</span>{{$item -> name}}</div>
	  </p>

	  <div class="row">

	    {!! Form::open(['url' => 'workshops/show', 'method' => 'get']) !!}
              <div class="col-xs-6">
	        {!! Form::submit('About', ['class' => 'btn btn-default col-xs-12']) !!}
	      </div>
	    {!! Form::close() !!}

	    {!! Form::open(['url' => ['applications/create'], 'method' => 'get']) !!}
      	      {{--<a href="applications/create"><div class="col-xs-6"><span class="btn btn-primary col-xs-12">Apply</span></div></a>--}}
	      {!! Form::hidden('program', $item -> program); !!}		
	      {!! Form::hidden('workshop_name', $item -> name); !!}
              <div class="col-xs-6">
	        {!! Form::submit('Apply', ['class' => 'btn btn-primary col-xs-12']) !!}
	      </div>
	    {!! Form::close() !!}

	    {{--<div class="col-lg-offset-3 col-lg-6">
	      <div class="input-group">
		<div class="input-group-btn">
	          <div class="btn btn-default col-xs-6">About</div></a>
	          <div class="btn btn-primary col-xs-6">Apply</div></a>
		</div>
	      </div>
	    </div>--}}
	  </div>

	</div>
      </div>
    </div>
   @endforeach
  </div>
 @endforeach
 <div class="pull-right">{{ $workshops->links() }}</div>
</div>
@endsection
