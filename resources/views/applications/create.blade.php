@extends('layouts.app')

@section('content')
<div class="container">

  <div class="page-header">
    <h1 class="text-center">Application <small>{{ $workshop }}</small></h1>
  </div>

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      
      {!! Form::open(['url' => 'applications']) !!}

      {!! Form::hidden('workshop', $workshop); !!}

      <p>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Program</span>
          {!! Form::text('program', $program, ['class' => 'form-control', 'aria-describedby' => 'basic-addon1', 'readonly']) !!}
        </div>
      </p>

      <p>
        <div class="input-group"> 
          <span class="input-group-addon" id="basic-addon1">First name</span>
          {!! Form::text('first_name', null, ['class' => 'form-control', 'aria-describedby' => 'basic-addon1']) !!}
        </div>
      </p>

      <p>
        <div class="input-group">   
          <span class="input-group-addon" id="basic-addon1">Middle name</span>
          {!! Form::text('middle_name', null, ['class' => 'form-control', 'aria-describedby' => 'basic-addon1']) !!}
        </div>
      </p>
  
      <p>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">First surname</span>
          {!! Form::text('first_surname', null, ['class' => 'form-control', 'aria-describedby' => 'basic-addon1']) !!}
	</div>
      </p>

      <p>
        <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Second surname</span>
        {!! Form::text('second_surname', null, ['class' => 'form-control', 'aria-describedby' => 'basic-addon1']) !!}
	</div>
      </p>

      <p>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Birth date</span>
          {!! Form::text('birth_date', null, ['class' => 'form-control', 'aria-describedby' => 'basic-addon1']) !!}
        </div>
      </p>

      <p>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Document ID	</span>
          {!! Form::text('document', null, ['class' => 'form-control', 'aria-describedby' => 'basic-addon1']) !!}
        </div>
      </p>

      <p>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Home phone</span>
          {!! Form::text('home_phone', null, ['class' => 'form-control', 'aria-describedby' => 'basic-addon1']) !!}
        </div>
      </p>

      <p>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Mobile phone</span>
          {!! Form::text('mobile_phone', null, ['class' => 'form-control', 'aria-describedby' => 'basic-addon1']) !!}
        </div>
      </p>

      <p>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Email</span>
          {!! Form::text('email', null, ['class' => 'form-control', 'aria-describedby' => 'basic-addon1']) !!}
        </div>
      </p>
       
      {!! Form::submit('Apply', ['class' => 'btn btn-primary col-xs-12']) !!}
       
     {!! Form::close() !!}

    </div>
  </div>  

</div>

<br/>
@endsection
