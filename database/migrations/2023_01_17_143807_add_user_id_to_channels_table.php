<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints(); // для миграции при создании внешнего ключа чтобы учесть пучтые ячейки

        Schema::table('channels', function (Blueprint $table) {
            $table->foreignIdFor(User::class)->after('name')->constrained(); // чтобы была связь
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('channels', function (Blueprint $table) {

            $table->dropForeign(['user_id']); // сначала надо удалить внешний ключ
            
            $table->dropColumn('user_id');
        });
    }
};
