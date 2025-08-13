<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("idoso", function (Blueprint $table) {
            $table->id();
            $table->string("nome", 100);
            $table->string("rg", 20)->unique("uk_idoso_rg");
            $table->string("cpf", 11)->unique("uk_idoso_cpf");
            $table->string("estado_civil", 15);
            $table->string("apelido", 100)->nullable();
            $table->string("nacionalidade", 100);
            $table->string("naturalidade", 100);
            $table->string("tipo_sanguineo", 3);

            $table->date("data_de_nascimento");

            $table->char("sexo", 1);

            $table->decimal("peso_inicial", 5, 2);

            $table->boolean("ativo")->default(true);

            $table->timestamp('criado_em')->nullable();
            $table->timestamp('atualizado_em')->nullable();
            
            //$table->unsignedBigInteger('coordenador_id');
            //$table->unsignedBigInteger('responsavel_id')->unique("uk_idoso_responsavel");


            //$table->foreign('coordenador_id')
                //->references('id')
                //->on('coordenador');
                //->onDelete('restrict');

            // $table->foreign('responsavel_id')
                //->references('id')
                //->on('responsavel');
                //->onDelete('restrict');
            // verificar se responsavel vai estar na tabela idoso, se tiver remove responsavel manual, se não remove via on cascade
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
