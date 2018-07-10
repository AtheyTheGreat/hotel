{!! Form::open(['route' => 'contact.store']) !!}

<div class="row form-group">
<div class="col-md-6">
    {!! Form::label('firstname', 'First Name') !!}
    {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-6">
    {!! Form::label('lastname', 'Last Name') !!}
    {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
</div>
</div>

<div class="row form-group">
<div class="col-md-12">
    {!! Form::label('email', 'E-mail Address') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>
</div>

<div class="row form-group">
<div class="col-md-12">
    {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
</div>
</div>

<div class="form-group text-center">
{!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}
</div>

{!! Form::close() !!}
