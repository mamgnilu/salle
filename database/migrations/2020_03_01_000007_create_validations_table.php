<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValidationsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'validations';

    /**
     * Run the migrations.
     * @table validations
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->boolean('valide')->nullable();
            $table->unsignedBigInteger('seances_id');

            $table->index(["seances_id"], 'fk_validations_seances1_idx');


            $table->foreign('seances_id', 'fk_validations_seances1_idx')
                ->references('id')->on('seances')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
