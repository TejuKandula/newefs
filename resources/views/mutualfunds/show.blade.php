@extends('app')
@section('content')
    <h1>Mutualfund </h1>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Type</td>
                <td><?php echo ($mutualfund['type']); ?></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><?php echo ($mutualfund['name']); ?></td>
            </tr>
            <tr>
                <td>Asset Value</td>
                <td><?php echo ($mutualfund['asset_value']); ?></td>
            </tr>
            <tr>
                <td>Settle Date</td>
                <td><?php echo ($mutualfund['settle_date']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
@stop

