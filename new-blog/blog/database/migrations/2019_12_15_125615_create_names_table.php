<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('names', function (Blueprint $table) {
            $table->bigIncrements('id');
        // создаем таблицу. выбираем длинну и тип.Первый аргумент название колонки, а второй длинна.
            $table->string('name', '255');
            $table->string('surname', '255');
            $table->year('birth_year');
            $table->text('aboutMyself')->nullable(); // вызов метода у объекта nullable() == текс может быть пустым.

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
        Schema::dropIfExists('names');
    }
}
