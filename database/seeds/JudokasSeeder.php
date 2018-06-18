<?php

use Illuminate\Database\Seeder;

class JudokasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('judokas')->insert([
            'nom' => 'Candel',
            'prenom' => 'Sophie',
            'photo' => 'photo.png',
            'date_naissance' => '1997-01-10',
            'dojo' => 'A',
            'grade' => '1D',
            'licence' => 'CANDE10011997',
            'telephone' => '0388730024',
            'portable' => '0695548896',
            'email' => 'sophiee.candel@free.fr',
            'adresse_rue' => '27 rue de la chapelle de la croix',
            'adresse_cp' => '67500',
            'adresse_ville' => 'Haguenau'
        ]);
        DB::table('judokas')->insert([
            'nom' => 'Candel',
            'prenom' => 'Jacques',
            'photo' => 'photo.png',
            'date_naissance' => '1997-01-10',
            'dojo' => 'A',
            'grade' => '1D',
            'licence' => 'CANDE10011997',
            'telephone' => '0388730024',
            'portable' => '0695548896',
            'email' => 'jacques.candel@free.fr',
            'adresse_rue' => '27 rue de la chapelle de la croix',
            'adresse_cp' => '67500',
            'adresse_ville' => 'Haguenau'
        ]);
    }
}
