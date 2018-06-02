<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domains', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->date('expires');
	        $table->integer('client_id');
	        $table->integer('host_id');
	        $table->integer('host_plan_id');
	        $table->integer('dns_manager_id');
	        $table->integer('registrar_id');
	        $table->integer('platform_id');
	        $table->integer('ssl_provider_id');
	        $table->integer('version_control_id');
	        $table->integer('backup_provider_id');
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
        Schema::dropIfExists('domains');
    }
}
