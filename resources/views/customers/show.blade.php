@extends('app')
@section('content')
    <h1>Customer </h1>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Name</td>
                <td><?php echo ($customer['name']); ?></td>
            </tr>
            <tr>
                <td>Cust Number</td>
                <td><?php echo ($customer['cust_number']); ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo ($customer['address']); ?></td>
            </tr>
            <tr>
                <td>City </td>
                <td><?php echo ($customer['city']); ?></td>
            </tr>
            <tr>
                <td>State</td>
                <td><?php echo ($customer['state']); ?></td>
            </tr>
            <tr>
                <td>Zip </td>
                <td><?php echo ($customer['zip']); ?></td>
            </tr>
            <tr>
                <td>Home Phone</td>
                <td><?php echo ($customer['home_phone']); ?></td>
            </tr>
            <tr>
                <td>Cell Phone</td>
                <td><?php echo ($customer['cell_phone']); ?></td>
            </tr>


            </tbody>
        </table>
    </div>

    <div class="container">
        <h1>Stocks</h1>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="bg-info">
                        <th>Symbol</th>
                        <th>Name</th>
                        <th>Shares</th>
                        <th>Purchase price</th>
                        <th>Purchase Date</th>
                        <th>Original Value</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customer->stocks as $stock)
                        <tr>
                            <td>{{ $stock->symbol }}</td>
                            <td>{{ $stock->name }}</td>
                            <td>{{ $stock->shares }}</td>
                            <td>{{ $stock->purchase_price }}</td>
                            <td>{{ $stock->purchased }}</td>
                             <td> <?php echo "$" ?> {{ $stock->shares * $stock->purchase_price}}</td>

                        </tr>
                    @endforeach
                 </tbody>
             </table>
            <?php $total = 0; ?>
            @foreach ($customer->stocks as $stock)
            <?php $total = $total + ($stock->shares * $stock->purchase_price) ?>
            @endforeach
            <p style="font-size:25px;">Total of Initial Stock Portfoilo : <?php echo "$" . $total ?></p>
            <br></br>


        <h1>Investments</h1>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="bg-info">
                        <th>Category</th>
                        <th>Description</th>
                        <th>Acquired Value</th>
                        <th>Acquired Date</th>
                        <th>Recent Value</th>
                        <th>Recent Date</th>
                     </tr>
                 </thead>


                <tbody>

                    @foreach ($customer->investments as $investment)
                     <tr>
                         <td>{{ $investment->category }}</td>
                         <td>{{ $investment->description }}</td>
                        <td>{{ $investment->acquired_value }}</td>
                        <td>{{ $investment->acquired_date }}</td>
                        <td>{{ $investment->recent_value }}</td>
                        <td>{{ $investment->recent_date }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <?php $total_1 = 0; ?>
            @foreach ($customer->investments as $investment)
            <?php $total_1 = $total_1 + $investment->acquired_value ?>
            @endforeach
            <p style="font-size:25px;"> Total of Initial Investment Portfoilo : <?php echo "$" . $total_1 ?> </p>
            <?php $total_2=0; ?>
            @foreach ($customer->investments as $investment)
            <?php $total_2 = $total_2 + $investment->recent_value ?>
            @endforeach
            <p style="font-size:25px;"> Total of Current Investment Portfoilo : <?php echo "$" . $total_2 ?></p>
            <br></br>


        <h1>Mutual Funds</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr class="bg-info">
                <th>Asset Type</th>
                <th>Asset Name</th>
                <th>Asset Value</th>
                <th>Settle Date</th>
            </tr>
            </thead>


            <tbody>

            @foreach ($customer->mutualfunds as $mutualfund)
                <tr>
                    <td>{{ $mutualfund->type }}</td>
                    <td>{{ $mutualfund->name }}</td>
                    <td>{{ $mutualfund->asset_value }}</td>
                    <td>{{ $mutualfund->settle_date }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <?php $total_3=0; ?>
        @foreach ($customer->mutualfunds as $mutualfund)
            <?php $total_3 = $total_3 + $mutualfund->asset_value ?>
        @endforeach
        <p style="font-size:25px;"> Total of Current Mutualfund Assets : <?php echo "$" . $total_3 ?></p>
        <br></br>

        <h2 style="font-size:40px"> Summary Portfoilo</h2>
        <p style="font-size:25px;"> Total of Initial Portfoilo Value : <?php $sumtot1 = $total + $total_1;echo "$".$sumtot1 ?></p>
        <p style="font-size:25px;"> Total of Current Portfoilo : <?php $sumtot2 = $total + $total_2;echo "$".$sumtot2 ?></p>
        <p style="font-size:25px;"> Total of Current Mutualfund Assets : <?php echo "$" . $total_3 ?></p>


    </div>

@stop

