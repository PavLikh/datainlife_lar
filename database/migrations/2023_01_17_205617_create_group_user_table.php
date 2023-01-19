<?php

use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_user', function (Blueprint $table) {
            // $table->id();
            $table->primary(['user_id', 'group_id']);
            // $table->index(['user_id', 'group_id'])->unique();
            // $table->integer('user_id');
            // $table->integer('group_id');
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(Group::class)->constrained();
            // $table->unique(['user_id', 'group_id']);
            $table->timestamp('expired_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_user');
    }
};
