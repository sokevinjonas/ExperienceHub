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
        Schema::create('activity_sectors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });

        DB::table('activity_sectors')->insert([
            [
                'name' => 'Technologie',
                'description' => 'Industrie de la technologie et de l\'informatique, comprenant le développement de logiciels, le matériel, et les services numériques.'
            ],
            [
                'name' => 'Santé',
                'description' => 'Secteur englobant les services médicaux, les hôpitaux, la recherche biomédicale, et les produits pharmaceutiques.'
            ],
            [
                'name' => 'Finance',
                'description' => 'Secteur financier, incluant les banques, les assurances, les investissements, et la gestion de patrimoine.'
            ],
            [
                'name' => 'Énergie',
                'description' => 'Industrie liée à la production et la distribution d\'énergie, comme le pétrole, le gaz, et les énergies renouvelables.'
            ],
            [
                'name' => 'Commerce de détail',
                'description' => 'Secteur de la vente au détail, y compris les supermarchés, les magasins spécialisés, et le commerce électronique.'
            ],
            [
                'name' => 'Éducation',
                'description' => 'Secteur englobant les institutions d\'enseignement, les écoles, les universités, et les services éducatifs.'
            ],
            [
                'name' => 'Tourisme et Hôtellerie',
                'description' => 'Industrie du tourisme, des voyages, de l\'hébergement, et des services connexes.'
            ],
            [
                'name' => 'Industrie manufacturière',
                'description' => 'Secteur de la production industrielle, couvrant la fabrication de biens de consommation, de machines, et d\'équipements.'
            ],
            [
                'name' => 'Construction',
                'description' => 'Secteur impliqué dans la construction de bâtiments, d\'infrastructures, et d\'ouvrages publics.'
            ],
            [
                'name' => 'Télécommunications',
                'description' => 'Industrie des communications, comprenant les services de téléphonie, internet, et les technologies de l\'information.'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_sectors');
    }
};
