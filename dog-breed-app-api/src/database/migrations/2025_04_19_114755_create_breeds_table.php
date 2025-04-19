<?

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('breeds', function (Blueprint $table) {
            $table->id();
            $table->string('name_ja', 100)->nullable()->comment('犬種名（日本語）');
            $table->string('name_en', 100)->nullable()->comment('犬種名（英語）');
            $table->tinyInteger('size_class')->nullable()->comment('サイズ');
            $table->foreignId('origin_country_id')->constrained('countries')->commert('原産国ID');
            $table->text('description')->nullable()->comment('犬種説明');
            $table->string('image_path', 255)->nullable()->comment('画像ファイルパス');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('breeds');
    }
};
