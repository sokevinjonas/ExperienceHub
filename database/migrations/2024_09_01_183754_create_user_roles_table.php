<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        DB::table('user_roles')->insert([
            [
                'name' => 'utilisateur',
                'description' => 'Un utilisateur standard avec des droits limités sur la plateforme.'
            ],
            [
                'name' => 'modérateur',
                'description' => 'Un utilisateur responsable de la modération du contenu et des interactions sur la plateforme.'
            ],
            [
                'name' => 'administrateur',
                'description' => 'Un utilisateur avec des droits étendus pour gérer les aspects techniques et fonctionnels de la plateforme.'
            ],
            [
                'name' => 'super-administrateur',
                'description' => 'Un utilisateur ayant tous les droits sur la plateforme, y compris la gestion des autres administrateurs.'
            ]
        ]);
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_roles');
    }
};
