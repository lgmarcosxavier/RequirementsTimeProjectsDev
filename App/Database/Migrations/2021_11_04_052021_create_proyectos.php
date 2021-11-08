<?php 
namespace App\Database\Migrations;

use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreateProyectos extends Database {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()  {
        if(!static::$capsule::schema()->hasTable("proyectos")):
            static::$capsule::schema()->create("proyectos", function (Blueprint $table) {
                $table->increments("id");
                $table->string('nombre', 100);
                $table->string('empresa', 100)->nullable();
                $table->string('contacto_correo', 200)->nullable();
                $table->string('contacto_telefono', 200)->nullable();
                $table->integer('estado')->default(1);
                $table->timestamps();
                $table->softDeletes();
            });
        endif;

        // you can now build your migrations with schemas
        // Schema::build(static::$capsule, dirname(__DIR__) . "/Schema/proyectos.json");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        static::$capsule::schema()->dropIfExists("proyectos");
    }
}
