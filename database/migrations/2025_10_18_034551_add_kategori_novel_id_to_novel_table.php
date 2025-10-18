<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('novel', function (Blueprint $table) {
            $table->unsignedBigInteger('kategori_novel_id')->nullable()->after('id');
            $table->foreign('kategori_novel_id')->references('id')->on('kategori_novel')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::table('novel', function (Blueprint $table) {
            $table->dropForeign(['kategori_novel_id']);
            $table->dropColumn('kategori_novel_id');
        });
    }
};