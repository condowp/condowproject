<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('private_properties', function (Blueprint $table) {
            $table->id();
            $table->string('property_name')->nullable();
            $table->bigInteger('units_count')->nullable();
            $table->string('project_type')->nullable();
            $table->bigInteger('district_no')->nullable();
            $table->string('planning_area')->nullable();
            $table->integer('top_year')->unsigned()->nullable();
            $table->string('tenure')->nullable();
            $table->text('developer1_name')->nullable();
            $table->text('developer2_name')->nullable();
            $table->text('developer3_name')->nullable();
            $table->text('address')->nullable();
            $table->bigInteger('postal_code')->nullable();
            $table->string('foreigner_eligible')->nullable();
            $table->bigInteger('land_size_sqm')->nullable();
            $table->bigInteger('land_size_sqft')->nullable();
            $table->bigInteger('gfa_sqm')->nullable();
            $table->bigInteger('gfa_sqft')->nullable();
            $table->double('plotratio', 15, 8)->nullable();
            $table->bigInteger('building_footprint_sqft')->nullable();
            $table->double('rental_psf_pm_sgd', 15, 8)->nullable();
            $table->double('rental_yield_percentage', 15, 8)->nullable();
            $table->bigInteger('average_psf_sgd')->nullable();
            $table->string('monthly_maintenance_fees_sgd')->nullable();
            $table->string('floors_count')->nullable();
            $table->string('region')->nullable();
            $table->string('total_carpark_lots')->nullable();
            $table->string('buyer_sc_percentage')->nullable();
            $table->string('buyer_spr_percentage')->nullable();
            $table->string('buyer_fr_percentage')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('private_properties');
    }
}
