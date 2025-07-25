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
            Schema::table('livros', function (Blueprint $table) {
                $table->string('descricao', 250)->nullable()->after('quantidade');
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::table('livros', function (Blueprint $table) {
                $table->dropColumn('descricao');
            });
        }
    };
