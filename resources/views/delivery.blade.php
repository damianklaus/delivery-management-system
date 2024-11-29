<!doctype html>
<html>

<head>
    <style>
        table,
        th,
        td {
            text-align: center;
            border: 1px solid black;
            border-collapse: collapse;
        }

        a:link,
        a:visited {
            background-color: #24a0ed;
            color: white;
            padding: 2px 2px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        a:hover,
        a:active {
            background-color: #24a0ed;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="row">
        </header>
        <div id="main" class="row">
            <div class="container">
                <div class="row">
                    <h1>ALL Deliveries</h1>
                    <a href="{{ route('create') }}">Create Request</a>
                </div>
            </div>

            <table>
                <tr>
                    <th>Delivery ID</th>
                    <th>Package Description</th>
                    <th>Package Length</th>
                    <th>Package Height</th>
                    <th>Package Width</th>
                    <th>Package Weight</th>
                    <th>Pickup Address</th>
                    <th>Pickup Name</th>
                    <th>Pickup Telephone</th>
                    <th>Pickup Email</th>
                    <th>Delivery Address</th>
                    <th>Delivery Name</th>
                    <th>Delivery Telephone</th>
                    <th>Delivery Email</th>
                    <th>Type of Good</th>
                    <th>Delivery Provider</th>
                    <th>Delivery Priority</th>
                    <th>Shipment Pickup Date</th>
                    <th>Shipment Pickup Time</th>
                    <th>Status</th>
                    <!-- <th>Actions</th> -->
                </tr>
                @foreach ($delivery as $deliverys)
                <tr>
                    <td>{{ $deliverys->id }}</td>
                    <td>{{ $deliverys->package_description }}</td>
                    <td>{{ $deliverys->package_length }}cm</td>
                    <td>{{ $deliverys->package_height }}cm</td>
                    <td>{{ $deliverys->package_width }}cm</td>
                    <td>{{ $deliverys->package_weight }}Kg</td>
                    <td>{{ $deliverys->pickup_address }}</td>
                    <td>{{ $deliverys->pickup_name }}</td>
                    <td>{{ $deliverys->pickup_telephone }}</td>
                    <td>{{ $deliverys->pickup_email }}</td>
                    <td>{{ $deliverys->delivery_address }}</td>
                    <td>{{ $deliverys->delivery_name }}</td>
                    <td>{{ $deliverys->delivery_telephone }}</td>
                    <td>{{ $deliverys->delivery_email }}</td>
                    <!-- check what type of goods  -->
                    @if ($deliverys->type_of_good == 1)
                    <td>Document</td>
                    @elseif($deliverys->type_of_good == 2)
                    <td>Parcel</td>
                    @endif
                    <!-- check who is delivery provider -->
                    @if ($deliverys->delivery_provider == 1)
                    <td>DHL</td>
                    @elseif($deliverys->delivery_provider == 2)
                    <td>STARTRACK</td>
                    @elseif($deliverys->delivery_provider == 3)
                    <td>ZOOM2U</td>
                    @elseif($deliverys->delivery_provider == 4)
                    <td>TGE</td>
                    @endif
                    <!-- check what is delivery priority -->
                    @if ($deliverys->delivery_priority == 1)
                    <td>Standard</td>
                    @elseif($deliverys->delivery_priority == 2)
                    <td>Express</td>
                    @elseif($deliverys->delivery_priority == 3)
                    <td>Immediate</td>
                    @endif
                    <td>{{ $deliverys->shipment_pickup_date }}</td>
                    <td>{{ $deliverys->shipment_pickup_time	 }}</td>
                    @if ($deliverys->status == 1)
                    <td>Pending</td>
                    @elseif($deliverys->status == 2)
                    <td>Processed</td>
                    @elseif($deliverys->status == 3)
                    <td>Shipped</td>
                    @elseif($deliverys->status == 4)
                    <td>Cancel</td>
                    @endif
                    <!-- <td><a href="{{ route('cancelDelivery') }}">Cancel Request</td> -->
                </tr>
                @endforeach

            </table>
            {{ $delivery->links() }}
        </div>
        <footer class="row">
        </footer>
    </div>
</body>

</html>