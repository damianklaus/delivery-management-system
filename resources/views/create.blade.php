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
    </style>
</head>

<body>
    <div class="container">
        <header class="row">
        </header>
        <div id="main" class="row">
            <h1>Create a New Delivery</h1>
            <form method="POST" action="{{ route('saveDelivery') }}">
                @csrf
                <div class="form-group">
                    <label for="package_description">Package Description =</label>
                    <input type="text" name="package_description" class="form-control" id="package_description" placeholder="Enter Package Description">
                </div>
                <div class="form-group">
                    <label for="package_length">Package Length =</label>
                    <input type="number" name="package_length" class="form-control" id="package_length" placeholder="Enter Package length"> CM
                </div>
                <div class="form-group">
                    <label for="package_height">Package Height =</label>
                    <input type="number" name="package_height" class="form-control" id="package_height" placeholder="Enter Package Height"> CM
                </div>
                <div class="form-group">
                    <label for="package_width">Package Width =</label>
                    <input type="number" name="package_width" class="form-control" id="package_width" placeholder="Enter Package Width"> CM
                </div>
                <div class="form-group">
                    <label for="package_weight">Package Weight =</label>
                    <input type="number" name="package_weight" class="form-control" id="package_weight" placeholder="Enter Package Weight"> KG
                </div>
                <div class="form-group">
                    <label for="pickup_address">Pickup Address =</label>
                    <input type="text" name="pickup_address" class="form-control" id="pickup_address" placeholder="Enter Pickup Address">
                </div>
                <div class="form-group">
                    <label for="pickup_name">Pickup Name =</label>
                    <input type="text" name="pickup_name" class="form-control" id="pickup_name" placeholder="Enter Pickup Name">
                </div>
                <div class="form-group">
                    <label for="pickup_telephone">Pickup telephone =</label>
                    <input type="text" name="pickup_telephone" class="form-control" id="pickup_telephone" placeholder="Enter Pickup telephone">
                </div>
                <div class="form-group">
                    <label for="pickup_email">Pickup email =</label>
                    <input type="text" name="pickup_email" class="form-control" id="pickup_email" placeholder="Enter Pickup email">
                </div>
                <div class="form-group">
                    <label for="delivery_address">Delivery Address =</label>
                    <input type="text" name="delivery_address" class="form-control" id="delivery_address" placeholder="Enter Delivery address">
                </div>
                <div class="form-group">
                    <label for="delivery_name">Delivery name =</label>
                    <input type="text" name="delivery_name" class="form-control" id="delivery_name" placeholder="Enter Delivery name">
                </div>
                <div class="form-group">
                    <label for="delivery_telephone">Delivery Telephone =</label>
                    <input type="text" name="delivery_telephone" class="form-control" id="delivery_telephone" placeholder="Enter Delivery Telephone">
                </div>
                <div class="form-group">
                    <label for="delivery_email">Delivery email =</label>
                    <input type="text" name="delivery_email" class="form-control" id="delivery_email" placeholder="Enter Delivery email">
                </div>
                <div class="form-group">
                    <label for="type_of_good">Delivery email =</label>
                    <select name="type_of_good" id="type_of_good">
                        <option value="1">Document</option>
                        <option value="2">Parcel</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="delivery_provider">Delivery provider =</label>
                    <select name="delivery_provider" id="delivery_provider">
                        <option value="1">DHL</option>
                        <option value="2">STARTRACK</option>
                        <option value="3">ZOOM2U</option>
                        <option value="4">TGE</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="delivery_priority">Delivery priority =</label>
                    <select name="delivery_priority" id="delivery_priority">
                        <option value="1">Standard</option>
                        <option value="2">Express</option>
                        <option value="2">Immediate</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="shipment_pickup_date">Shipment Pickup Date =</label>
                    <input type="date" name="shipment_pickup_date" class="form-control" id="shipment_pickup_date">
                </div>
                <div class="form-group">
                    <label for="shipment_pickup_time">Shipment Pickup Time =</label>
                    <input type="time" name="shipment_pickup_time" class="form-control" id="shipment_pickup_time">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <a href="{{ route('allDelivery') }}">Back to the list</a>
        </div>
        <footer class="row">
        </footer>
    </div>
</body>

</html>