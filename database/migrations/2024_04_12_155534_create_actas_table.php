<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actas', function (Blueprint $table) {
            $table->id();
            $table->string('fechaDeMatrimonio');
            $table->string('idNovio');
            $table->string('idNovia');
            // Datos de los padres
            $table->string('nombrePadre_novia');
            $table->string('apellidoPaternoPadre_novia');
            $table->string('apellidoMaternoPadre_novia');
            $table->string('nacionalidadPadre_novia');
            $table->string('nombreMadre_novia');
            $table->string('apellidoPaternoMadre_novia');
            $table->string('apellidoMaternoMadre_novia');
            $table->string('nacionalidadMadre_novia');
            $table->string('nombrePadre_novio');
            $table->string('apellidoPaternoPadre_novio');
            $table->string('apellidoMaternoPadre_novio');
            $table->string('nacionalidadPadre_novio');
            $table->string('nombreMadre_novio');
            $table->string('apellidoPaternoMadre_novio');
            $table->string('apellidoMaternoMadre_novio');
            $table->string('nacionalidadMadre_novio');
            // Regimen patrimonial
            $table->string('regimenPratimonial');
            $table->text('rutas');
            $table->text('imgruta');
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
        Schema::dropIfExists('actas');
    }
}
