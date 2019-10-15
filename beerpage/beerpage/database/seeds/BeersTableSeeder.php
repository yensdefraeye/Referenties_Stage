<?php

use Illuminate\Database\Seeder;

class BeersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beers')->insert([
            'brand' => 'Duvel',
            'name' => 'Origineel',
            'alcohol_content' => '8,5',
            'category_id' => 1,
            'origin_country' => 'België',
            'plato_scale' => '15,5',
            'brewery_id' => 1,
            'image_path' => 'duvel_origineel.png',
            'description' => 'Duvel is een natuurlijk bier met een subtiele bitterheid, een verfijnd aroma en een uitgesproken hopkarakter. Het unieke brouwproces, dat zo’n 90 dagen duurt, garandeert een pure stijl, een delicate pareling en een aangename alcoholzoete smaak.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('beers')->insert([
            'brand' => 'Duvel',
            'name' => 'Tripel Hop Citra',
            'alcohol_content' => '9,5',
            'category_id' => 1,
            'origin_country' => 'België',
            'plato_scale' => '15,5',
            'brewery_id' => 1,
            'image_path' => 'duvel_tripel_hop.png',
            'description' => 'In 2007 gingen de Duvel brouwers voor het eerst met een derde hopsoort aan de slag om Duvel een verrassende toets en extra bitterheid te schenken. Het resultaat was een unieke Duvel Tripel Hop die één keer per jaar het gamma van Duvel aanvulde. Zes Duvel Tripel Hop edities later, lanceerden we in april 2016 een zoektocht naar dé ultieme Duvel Tripel Hop en luisterden daarvoor in eerste instantie naar onze Duvel fans.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);


        DB::table('beers')->insert([
            'brand' => 'La trappe',
            'name' => 'Blond',
            'alcohol_content' => '8,5',
            'category_id' => 2,
            'origin_country' => 'Nederland',
            'plato_scale' => '13',
            'brewery_id' => 3,
            'image_path' => 'trappe_blond.png',
            'description' => 'La Trappe Blond is een toegankelijk, prikkelend bier met een licht zoete, zacht bittere, en moutige smaak. Samengevat een toegankelijk bier met een rijke smaakbeleving. De geur: fruitige en frisse aroma’s gaan mooi samen met zoete geuren van mout en aroma’s die doen denken aan specerijen.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('beers')->insert([
            'brand' => 'La trappe',
            'name' => 'Dubbel',
            'alcohol_content' => '7',
            'category_id' => 2,
            'origin_country' => 'Nederland',
            'plato_scale' => '11',
            'brewery_id' => 3,
            'image_path' => 'trappe_dubbel.png',
            'description' => 'La Trappe Dubbel is een klassiek donker trappistenbier met een vol moutige, karamelzoete smaak en een subtiele, zoete invloed van dadel, honing en gedroogd fruit. La Trappe Dubbel is een zoet en lichtbitter bier. De geur: fruitige geur met warme tonen van vanille, karamel en geroosterde chocolade.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('beers')->insert([
            'brand' => 'La trappe',
            'name' => 'Quadruppel',
            'alcohol_content' => '11',
            'category_id' => 2,
            'origin_country' => 'Nederland',
            'plato_scale' => '16',
            'brewery_id' => 3,
            'image_path' => 'trappe_quadruppel.png',
            'description' => 'Bierbrouwerij de Koningshoeven doopte in 1991 onder de goedkeurende blik van de monniken haar geliefde La Trappe Quadrupel. Een goed bewaard recept werd werkelijkheid en het allereerste Quadrupelbier ter wereld zag het levenslicht. La Trappe Quadrupel is het zwaarste bier van La Trappe Trappist en tevens de naamgever van deze bierstijl. Een volle, verwarmende en intense smaak. Moutig met zoete tonen van dadel en karamel.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('beers')->insert([
            'brand' => 'St. Bernardus',
            'name' => 'Abt 12',
            'alcohol_content' => '10,0',
            'category_id' => 3,
            'origin_country' => 'België',
            'plato_scale' => '15',
            'brewery_id' => 4,
            'image_path' => 'bernardus_12.png',
            'description' => 'Het paradepaardje van de brouwerij dat zich vlot laat drinken door zijn zachte volmondige smaak.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('beers')->insert([
            'brand' => 'St. Bernardus',
            'name' => 'Pater 6',
            'alcohol_content' => '6,7',
            'category_id' => 3,
            'origin_country' => 'België',
            'plato_scale' => '16',
            'brewery_id' => 4,
            'image_path' => 'bernardus_6.png',
            'description' => 'St.Bernardus Pater 6 is gebrouwen volgens de klassieke ‘dubbel’ stijl, naar het originele recept uit 1946. De naam van het bier is een referentie geworden en zo wordt het in de volksmond veelal vernoemd als ‘een Paterke.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('beers')->insert([
            'brand' => 'Calsberg',
            'name' => 'Blond',
            'alcohol_content' => '5,0',
            'category_id' => 5,
            'origin_country' => 'Deens',
            'plato_scale' => '9',
            'brewery_id' => 5,
            'image_path' => 'callsberg_blond.png',
            'description' => 'Carlsberg wordt overal ter wereld gebrouwen in brouwerijen van de Carlsberg-groep of onder licentie.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
