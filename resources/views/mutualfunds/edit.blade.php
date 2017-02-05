@extends('app')
@section('content')
    <h1>Update Mutualfund</h1>
    {!! Form::model($mutualfund,['method' => 'PATCH','route'=>['mutualfunds.update',$mutualfund->id]]) !!}
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
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop
