<?php

use Illuminate\Database\Seeder;

class BreweriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('breweries')->insert([
            'name' => 'Duvel Moortgat',
            'address' => 'Breendonk-Dorp 58, 2870 Puurs',
            'year_of_foundation' => '1871',
            'founder' => 'Jan-Leonard Moortgat',
            'CEO' => 'Michiel Moortgat',
            'website' => 'http://www.duvelmoortgat.be/nl',
            'description' => 'Albert Moortgat nam in 1914 op vierentwintigjarige leeftijd de brouwerij over van zijn overleden broer Jozef Moortgat (1872-1914). Hij lanceerde Victory Ale in 1917. In 1926 werd Victory Ale tot Duvel omgedoopt omdat er een duvel in zit. Na de Tweede Wereldoorlog werd Vedett ontwikkeld, een bier dat in 2003 opnieuw werd gelanceerd. In 1963 begon Duvel Moortgat een lijn abdijbieren onder licentie van de Benedictijnermonniken van Maredsous.',
            'image_path' => 'moortgat.jpeg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('breweries')->insert([
            'name' => 'Van Steenberge',
            'address' => 'Lindenlaan 25, 9940 Ertvelde',
            'year_of_foundation' => '1784',
            'founder' => 'Jean Baptiste De Bruin',
            'CEO' => 'Jef Versele',
            'website' => 'http://www.vansteenberge.com/nl',
            'description' => 'De brouwerij werd gesticht door Jean Baptiste De Bruin, die gehuwd was met Angelina Petronella Schelfaut. Na hun beider overlijden kwam de brouwerij in handen van de neef Jozef Schelfaut. Diens dochter Margriet huwde met Paul Van Steenberge, die naast brouwer ook politicus en professor was. In 1919 werd de naam Brouwerij Bios aangenomen. Later kwam de vestiging in handen van diens zoon Jozef Van Steenberge (1962), kleinzoon Paul Van Steenberge (1990) en achterkleinzoon Jef Versele (sinds 1998).',
            'image_path' => 'van_steenberge.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('breweries')->insert([
            'name' => 'De Koningshoeve',
            'address' => 'Eindhovenseweg 3, 5056 Berkel-Enschot',
            'year_of_foundation' => '1884',
            'founder' => 'Koning Willem II',
            'CEO' => 'Trappistenmonniken',
            'website' => 'https://www.latrappetrappist.com/nl/',
            'description' => 'De naam La Trappe is afkomstig van de Franse abdij ‘Notre-Dame de la Grande Trappe’ in het Normandische Soligny-la-Trappe, ook wel ‘La Trappe’ genoemd.',
            'image_path' => 'de_koningshoeve.jpeg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('breweries')->insert([
            'name' => 'Brouwerij St. Bernardus',
            'address' => 'Trappistenweg 23, 8978 Watou',
            'year_of_foundation' => '1946',
            'founder' => 'Evarist Deconinck',
            'CEO' => 'Hans Depypere',
            'website' => 'https://www.sintbernardus.be/',
            'description' => 'De brouwerij werd in 1946 opgericht door Evarist Deconinck die sinds de jaren dertig de kaasmakerij in Watou van de paters Trappisten van de abdij op de Katsberg (Noord-Frankrijk) overgenomen had. Hij had een contract afgesloten met de paters Trappisten van de Sint-Sixtusabdij van Westvleteren, die besloten hadden hun bier niet meer zelf verder te commercialiseren. De Poolse meesterbrouwer van de abdij van Westvleteren stapte mee over naar de nieuwe brouwerij waar voortaan het bier Sint-Sixtus gebrouwen werd.',
            'image_path' => 'st_bernardus.jpeg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('breweries')->insert([
            'name' => 'Calsberg Group',
            'address' => 'Kopenhagen, Denemarken',
            'year_of_foundation' => '1847',
            'founder' => 'Jacob Christian Jacobsen',
            'CEO' => 'Cees \'t Hart',
            'website' => 'https://carlsberggroup.com/',
            'description' => 'Carlsberg is een grote internationale bierbrouwer. In 2018 verkocht het wereldwijd ruim 112 miljoen hectoliter (hl) bier en 21 miljoen hl andere dranken.[2] De twee belangrijkste biermerken zijn Tuborg en Carlsberg. West-Europa is de grootste afzetmarkt, hier werd in 2018 circa 60% van de omzet gerealiseerd, het aandeel van Rusland en de overige landen die deel uitmaakten van de voormalige Sovjet-Unie was minder dan 20%.[2] De rest wordt afgezet in Zuidoost-Azië.',
            'image_path' => 'calsberg.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
