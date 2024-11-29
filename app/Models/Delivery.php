<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Delivery extends Model
{
    use HasFactory;
    // Add fillable properties
    protected $fillable = ['id ', 'pickup_address', 'pickup_name', 'pickup_telephone', 'pickup_email', 'delivery_address', 'delivery_name', 'delivery_telephone', 'delivery_email', 'type_of_good', 'delivery_provider', 'delivery_priority', 'shipment_pickup_date', 'shipment_pickup_time'];
}
