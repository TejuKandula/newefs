@extends('app')
@section('content')
    <h1>Create New Mutualfund</h1>
    {!! Form::open(['url' => 'mutualfunds']) !!}

    <div class="form-group">
        {!! Form::select('customer_id', $customers) !!}
    </div>

    <div class="form-group">
        {!! Form::label('type', 'Asset Type:') !!}
        {!! Form::text('type',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Asset Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('asset_value', 'Asset Value:') !!}
        {!! Form::text('asset_value',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('settle_date', 'Settle Date:') !!}
        {!! Form::text('settle_date',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop
