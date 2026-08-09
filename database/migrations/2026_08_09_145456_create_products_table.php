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
   Schema::create('products', function (Blueprint $table) {
    $table->id();

    $table->foreignId('subcategory_id')
        ->constrained('subcategories')
        ->cascadeOnDelete();

    $table->foreignId('store_id')
        ->constrained('stores')
        ->cascadeOnDelete();

    $table->string('name');
    $table->string('slug')->unique();

    $table->text('description')->nullable();

    // أكثر من صورة للمنتج
    $table->json('images')->nullable();

    $table->decimal('price', 12, 2)->nullable();
    $table->decimal('old_price', 12, 2)->nullable();

    // رابط الأفلييت للمتجر الخارجي
    $table->text('affiliate_url');

    $table->boolean('is_active')->default(true);
    $table->boolean('is_featured')->default(false);

    $table->unsignedInteger('sort_order')->default(0);

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
