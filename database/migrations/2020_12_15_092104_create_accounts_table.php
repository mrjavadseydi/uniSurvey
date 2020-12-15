<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->text('PersonID')->nullable();
            $table->text('UserID')->nullable();
            $table->text('FacultyCode')->nullable();
            $table->text('EduGrpCode')->nullable();
            $table->text('UnitCode')->nullable();
            $table->text('PProFName')->nullable();
            $table->text('PProLName')->nullable();
            $table->text('FullName')->nullable();
            $table->text('EProFName')->nullable();
            $table->text('EProLName')->nullable();
            $table->text('ProCode')->nullable();
            $table->text('DutyUnit')->nullable();
            $table->text('sex')->nullable();
            $table->text('EProTitle')->nullable();
            $table->text('PProTitle')->nullable();
            $table->text('person_type')->nullable();
            $table->text('ProType')->nullable();
            $table->text('account_no')->nullable();
            $table->text('BankName')->nullable();
            $table->text('science_level')->nullable();
            $table->text('emp_mode')->nullable();
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
        Schema::dropIfExists('accounts');
    }
}
