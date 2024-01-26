<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = [
            [
                'azienda' => 'Trenitalia',
                'stazione_di_partenza' => 'Milano Rogoredo',
                'stazione_di_arrivo' => 'Roma Tiburtina',
                'orario_di_partenza' => '2023-01-01 10:00:00',
                'orario_di_arrivo' => '2023-01-01 12:00:00',
                'codice_treno' => '56093',
                'numero_di_carrozze' => 8,
                'in_orario' => 1,
                'cancellato' => 0,
            ],
            [
                'azienda' => 'Trenitalia',
                'stazione_di_partenza' => 'Milano centrale',
                'stazione_di_arrivo' => 'Napoli Centrale',
                'orario_di_partenza' => '2023-01-01 10:00:00',
                'orario_di_arrivo' => '2023-01-01 12:00:00',
                'codice_treno' => '92304',
                'numero_di_carrozze' => 8,
                'in_orario' => 1,
                'cancellato' => 0,
            ]
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->azienda = $train['azienda'];
            $newTrain->stazione_di_partenza = $train['stazione_di_partenza'];
            $newTrain->stazione_di_arrivo = $train['stazione_di_arrivo'];
            $newTrain->orario_di_partenza = $train['orario_di_partenza'];
            $newTrain->orario_di_arrivo = $train['orario_di_arrivo'];
            $newTrain->codice_treno = $train['codice_treno'];
            $newTrain->numero_di_carrozze = $train['numero_di_carrozze'];
            $newTrain->in_orario = $train['in_orario'];
            $newTrain->cancellato = $train['cancellato'];
            $newTrain->save();
        }
    }
}
