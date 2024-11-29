<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->string('package_description');
            $table->decimal('package_length');
            $table->decimal('package_height');
            $table->decimal('package_width');
            $table->decimal('package_weight');
            $table->string('pickup_address');
            $table->string('pickup_name');
            $table->string('pickup_telephone');
            $table->string('pickup_email')->unique();
            $table->string('delivery_address');
            $table->string('delivery_name');
            $table->string('delivery_telephone');
            $table->string('delivery_email')->unique();
            $table->integer('type_of_good');
            $table->integer('delivery_provider');
            $table->integer('delivery_priority');
            $table->string('shipment_pickup_date');
            $table->string('shipment_pickup_time');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery');
    }
};
