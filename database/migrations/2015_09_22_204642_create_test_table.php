<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::statement("
            CREATE TABLE IF NOT EXISTS `product` (
              `Mfg` date NOT NULL,
              `ExpD` date NOT NULL,
              `Batch` varchar(10) NOT NULL,
              `Status` varchar(5) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::statement("DROP TABLE `product`");
    }
}
