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
        Schema::create('projects', function (Blueprint $table) {
            $table->unsignedBigInteger('type-id')->nullable()->after('id');
            $table->foreign('type_id')->references('id')->on('types')->onDelete('set null')->onUpdate('cascade');

            $table->id();
            $table->timestamps();
            $table->string('type');
            $table->string('name');
            $table->string('admin');
            $table->text('bio');
            $table->string('thumb');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table)
        {
            $table->dropForeign(['type_id']);
            
            $table->dropColumn('type_id');
        });
    }
};
