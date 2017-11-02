<?php

use Illuminate\Database\Seeder;

class SchoolboardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('schoolboards')->delete();
        
        \DB::table('schoolboards')->insert(array (
            0 => 
            array (
                'id' => 1,
                'schoolboard_name' => 'C. S. des Affluents',
                'schoolboard_region' => 'Lanaudière',
                'schoolboard_adress' => '80, rue Jean-Baptiste-Meilleur',
            'schoolboard_city' => 'Repentigny (Qc) J6A 6C5',
                'schoolboard_phone' => '450 492-9400',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            1 => 
            array (
                'id' => 2,
                'schoolboard_name' => 'C. S. des Appalaches',
                'schoolboard_region' => 'Chaudière-Appalaches',
                'schoolboard_adress' => '650, rue Lapierre',
            'schoolboard_city' => 'Thetford Mines (Qc) G6G 7P1',
                'schoolboard_phone' => '418 338-7800',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            2 => 
            array (
                'id' => 3,
                'schoolboard_name' => 'C.S. de la Baie-James',
                'schoolboard_region' => 'Nord-du-Québec',
                'schoolboard_adress' => '596, 4e Rue',
            'schoolboard_city' => 'Chibougamau (Qc) G8P 1S3',
                'schoolboard_phone' => '418 748-7621',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            3 => 
            array (
                'id' => 4,
                'schoolboard_name' => 'C. S. de la Beauce-Etchemin',
                'schoolboard_region' => 'Chaudière-Appalaches',
                'schoolboard_adress' => '1925, 118e Rue',
            'schoolboard_city' => 'Saint-Georges (Qc) G5Y 7R7',
                'schoolboard_phone' => '418 228-5541',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            4 => 
            array (
                'id' => 5,
                'schoolboard_name' => 'C. S. des Bois-Francs',
                'schoolboard_region' => 'Centre-du-Québec',
                'schoolboard_adress' => '40, boulevard Bois-Francs Nord',
            'schoolboard_city' => 'Victoriaville (Qc) G6P 6S5',
                'schoolboard_phone' => '819 758-6453',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            5 => 
            array (
                'id' => 6,
                'schoolboard_name' => 'C. S. de la Capitale',
                'schoolboard_region' => 'Capitale-Nationale',
                'schoolboard_adress' => '1900, rue Côté',
            'schoolboard_city' => 'Québec (Qc) G1N 3Y5',
                'schoolboard_phone' => '418 686-4040',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            6 => 
            array (
                'id' => 7,
                'schoolboard_name' => 'Central Québec School Board',
                'schoolboard_region' => 'Capitale-Nationale',
                'schoolboard_adress' => '2046, chemin Saint-Louis',
            'schoolboard_city' => 'Québec (Qc) G1T 1P4',
                'schoolboard_phone' => '418 688-8730',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            7 => 
            array (
                'id' => 8,
                'schoolboard_name' => 'C. S. de Charlevoix',
                'schoolboard_region' => 'Capitale-Nationale',
                'schoolboard_adress' => '575, boul. de Comporté',
            'schoolboard_city' => 'La Malbaie (Qc) G5A 1T5',
                'schoolboard_phone' => '418 665-3765',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            8 => 
            array (
                'id' => 9,
                'schoolboard_name' => 'C. S. du Chemin-du-Roy',
                'schoolboard_region' => 'Mauricie',
                'schoolboard_adress' => '1515, rue Sainte-Marguerite',
            'schoolboard_city' => 'Trois-Rivières (Qc) G9A 5E7',
                'schoolboard_phone' => '819 379-5989',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            9 => 
            array (
                'id' => 10,
                'schoolboard_name' => 'C. S. des Chênes',
                'schoolboard_region' => 'Centre-du-Québec',
                'schoolboard_adress' => '457, rue des Écoles',
            'schoolboard_city' => 'Drummondville (Qc) J2B 1J3',
                'schoolboard_phone' => '819 478-6700',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            10 => 
            array (
                'id' => 11,
                'schoolboard_name' => 'C. S. des Chic-Chocs',
                'schoolboard_region' => 'Gaspésie–Îles-de-la-Madeleine',
                'schoolboard_adress' => '102, rue Jacques-Cartier',
            'schoolboard_city' => 'Gaspé (Qc) G4X 2S9',
                'schoolboard_phone' => '418 368-3499',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            11 => 
            array (
                'id' => 12,
                'schoolboard_name' => 'C. S. au Cœur-des-Vallées',
                'schoolboard_region' => 'Outaouais',
                'schoolboard_adress' => '582, rue Maclaren Est',
            'schoolboard_city' => 'Gatineau (Qc) J8L 2W2',
                'schoolboard_phone' => '819 986-8511',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            12 => 
            array (
                'id' => 13,
                'schoolboard_name' => 'C. S. de la Côte-du-Sud',
                'schoolboard_region' => 'Chaudière-Appalaches',
                'schoolboard_adress' => '157, rue Saint-Louis',
            'schoolboard_city' => 'Montmagny (Qc) G5V 4N3',
                'schoolboard_phone' => '418 248-2016',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            13 => 
            array (
                'id' => 14,
                'schoolboard_name' => 'C. S. Crie',
                'schoolboard_region' => 'Nord-du-Québec',
                'schoolboard_adress' => '203, rue Main',
            'schoolboard_city' => 'Mistissini (Qc) G0W 1C0',
                'schoolboard_phone' => '418 923-2764',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            14 => 
            array (
                'id' => 15,
                'schoolboard_name' => 'C. S. des Découvreurs',
                'schoolboard_region' => 'Capitale-Nationale',
                'schoolboard_adress' => '100-945, avenue Wolfe',
            'schoolboard_city' => 'Québec (Qc) G1V 4E2',
                'schoolboard_phone' => '418 652-2121',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            15 => 
            array (
                'id' => 16,
                'schoolboard_name' => 'C. S. des Draveurs',
                'schoolboard_region' => 'Outaouais',
                'schoolboard_adress' => '200, boulevard Maloney Est',
            'schoolboard_city' => 'Gatineau (Qc) J8P 1K3',
                'schoolboard_phone' => '819 663-9221',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            16 => 
            array (
                'id' => 17,
                'schoolboard_name' => 'Eastern Shores School Board',
                'schoolboard_region' => 'Gaspésie–Îles-de-la-Madeleine',
                'schoolboard_adress' => '40, rue Mountsorrel',
            'schoolboard_city' => 'New Carlisle (Qc) G0C 1Z0',
                'schoolboard_phone' => '418 752-2247',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            17 => 
            array (
                'id' => 18,
                'schoolboard_name' => 'Eastern Townships School Board',
                'schoolboard_region' => 'Estrie',
                'schoolboard_adress' => '340 rue Saint-Jean-Bosco',
            'schoolboard_city' => 'Magog (Qc) J1X 1K9',
                'schoolboard_phone' => '819 868-3100',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            18 => 
            array (
                'id' => 19,
                'schoolboard_name' => 'C. S. de l\'Énergie',
                'schoolboard_region' => 'Mauricie',
                'schoolboard_adress' => '2072, rue Gignac, case postale 580',
            'schoolboard_city' => 'Shawinigan, (Qc) G9N 6V7',
                'schoolboard_phone' => '819 539-6971',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            19 => 
            array (
                'id' => 20,
                'schoolboard_name' => 'English-Montréal School Board',
                'schoolboard_region' => 'Montréal',
                'schoolboard_adress' => '6000, avenue Fielding',
            'schoolboard_city' => 'Montréal (Qc) H3X 1T4',
                'schoolboard_phone' => '514 483-7200',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            20 => 
            array (
                'id' => 21,
                'schoolboard_name' => 'C. S. de l\'Estuaire',
                'schoolboard_region' => 'Côte-Nord',
                'schoolboard_adress' => '771, boulevard Jolliet',
            'schoolboard_city' => 'Baie-Comeau (Qc) G5C 1P3',
                'schoolboard_phone' => '418 589-0806',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            21 => 
            array (
                'id' => 22,
                'schoolboard_name' => 'C. S. du Fer',
                'schoolboard_region' => 'Côte-Nord',
                'schoolboard_adress' => '30, rue Comeau',
            'schoolboard_city' => 'Sept-Îles (Qc) G4R 4N2',
                'schoolboard_phone' => '418 968-9901',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            22 => 
            array (
                'id' => 23,
                'schoolboard_name' => 'C. S. du Fleuve-et-des-Lacs',
                'schoolboard_region' => 'Bas-Saint-Laurent',
                'schoolboard_adress' => '14, rue du Vieux-Chemin',
            'schoolboard_city' => 'Témiscouata-sur-le-Lac (Qc) G0L 1E0',
                'schoolboard_phone' => '418 854-2370',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            23 => 
            array (
                'id' => 24,
                'schoolboard_name' => 'C. S. des Grandes-Seigneuries',
                'schoolboard_region' => 'Montérégie',
                'schoolboard_adress' => '50, boulevard Taschereau',
            'schoolboard_city' => 'La Prairie (Qc) J5R 4V3',
                'schoolboard_phone' => '514 380-8899',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            24 => 
            array (
                'id' => 25,
                'schoolboard_name' => 'C. S. Harricana',
                'schoolboard_region' => 'Abitibi-Témiscamingue',
                'schoolboard_adress' => '341, rue Principale Nord',
            'schoolboard_city' => 'Amos (Qc) J9T 2L8',
                'schoolboard_phone' => '819 732-6561',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            25 => 
            array (
                'id' => 26,
                'schoolboard_name' => 'C. S. des Hautes-Rivières',
                'schoolboard_region' => 'Montérégie',
                'schoolboard_adress' => '210, rue Notre-Dame',
            'schoolboard_city' => 'Saint-Jean-sur-Richelieu (Qc) J3B 6N3',
                'schoolboard_phone' => '450 359-6411',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            26 => 
            array (
                'id' => 27,
                'schoolboard_name' => 'C. S. des Hauts-Bois-de-l\'Outaouais',
                'schoolboard_region' => 'Outaouais',
                'schoolboard_adress' => '331, rue du Couvent',
            'schoolboard_city' => 'Maniwaki (Qc) J9E 1H5',
                'schoolboard_phone' => '819 449-7866',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            27 => 
            array (
                'id' => 28,
                'schoolboard_name' => 'C. S. des Hauts-Cantons',
                'schoolboard_region' => 'Estrie',
                'schoolboard_adress' => '308, rue Palmer',
            'schoolboard_city' => 'East Angus (Qc) J0B 1R0',
                'schoolboard_phone' => '819 832-4953',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            28 => 
            array (
                'id' => 29,
                'schoolboard_name' => 'C. S. des Îles',
                'schoolboard_region' => 'Gaspésie–Îles-de-la-Madeleine',
                'schoolboard_adress' => '1419, chemin de l\'Étang-du-Nord',
            'schoolboard_city' => 'Les Îles-de-la-Madeleine (Qc) G4T 3B9',
                'schoolboard_phone' => '418 986-5511',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            29 => 
            array (
                'id' => 30,
                'schoolboard_name' => 'C. S. de la Jonquière',
                'schoolboard_region' => 'Saguenay–Lac-St-Jean',
                'schoolboard_adress' => '3644, rue Saint-Jules',
            'schoolboard_city' => 'Jonquière, Saguenay (Qc) G7X 7X4',
                'schoolboard_phone' => '418 542-7551',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            30 => 
            array (
                'id' => 31,
                'schoolboard_name' => 'C. S. de Kamouraska-Rivière-du-Loup',
                'schoolboard_region' => 'Bas-Saint-Laurent',
                'schoolboard_adress' => '464, rue Lafontaine',
            'schoolboard_city' => 'Rivière-du-Loup (Qc) G5R 3Z5',
                'schoolboard_phone' => '418 862-8201',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            31 => 
            array (
                'id' => 32,
                'schoolboard_name' => 'C. S. Kativik',
                'schoolboard_region' => 'Montréal',
                'schoolboard_adress' => '9800, boul. Cavendish, suite 400',
            'schoolboard_city' => 'Montréal (Qc) H4M 2V9',
                'schoolboard_phone' => '514 482-8220',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            32 => 
            array (
                'id' => 33,
                'schoolboard_name' => 'C. S. du Lac-Abitibi',
                'schoolboard_region' => 'Abitibi-Témiscamingue',
                'schoolboard_adress' => '500, rue Principale',
            'schoolboard_city' => 'La Sarre (Qc) J9Z 2A2',
                'schoolboard_phone' => '819 333-5411',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            33 => 
            array (
                'id' => 34,
                'schoolboard_name' => 'C. S. du Lac-Saint-Jean',
                'schoolboard_region' => 'Saguenay–Lac-St-Jean',
                'schoolboard_adress' => '350, boulevard Champlain Sud',
            'schoolboard_city' => 'Alma (Qc) G8B 3N8',
                'schoolboard_phone' => '418 669-6000',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            34 => 
            array (
                'id' => 35,
                'schoolboard_name' => 'C. S. du Lac-Témiscamingue',
                'schoolboard_region' => 'Abitibi-Témiscamingue',
                'schoolboard_adress' => '2, rue Maisonneuve',
            'schoolboard_city' => 'Ville-Marie (Qc) J9V 1V4',
                'schoolboard_phone' => '819 629-2472',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            35 => 
            array (
                'id' => 36,
                'schoolboard_name' => 'C. S. des Laurentides',
                'schoolboard_region' => 'Laurentides',
                'schoolboard_adress' => '13, rue Saint-Antoine',
            'schoolboard_city' => 'Sainte-Agathe-des-Monts (Qc) J8C 2C3',
                'schoolboard_phone' => '819 326-0333',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            36 => 
            array (
                'id' => 37,
                'schoolboard_name' => 'C. S. de Laval',
                'schoolboard_region' => 'Laval',
                'schoolboard_adress' => '955, boul. Saint-Martin Ouest',
            'schoolboard_city' => 'Laval (Qc) H7S 1M5',
                'schoolboard_phone' => '450 662-7000',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            37 => 
            array (
                'id' => 38,
                'schoolboard_name' => 'Lester-B.-Pearson School Board',
                'schoolboard_region' => 'Montréal',
                'schoolboard_adress' => '1925, avenue Brookdale',
            'schoolboard_city' => 'Dorval (Qc) H9P 2Y7',
                'schoolboard_phone' => '514 422-3000',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            38 => 
            array (
                'id' => 39,
                'schoolboard_name' => 'C. S. du Littoral',
                'schoolboard_region' => 'Côte-Nord',
                'schoolboard_adress' => '789, rue Beaulieu',
            'schoolboard_city' => 'Sept-Îles (Qc) G4R 1P8',
                'schoolboard_phone' => '418 962-5558',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            39 => 
            array (
                'id' => 40,
                'schoolboard_name' => 'C. S. Marguerite-Bourgeoys',
                'schoolboard_region' => 'Montréal',
                'schoolboard_adress' => '1100, boul. de la Côte-Vertu',
            'schoolboard_city' => 'Montréal (Qc) H4L 4V1',
                'schoolboard_phone' => '514 855-4500',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            40 => 
            array (
                'id' => 41,
                'schoolboard_name' => 'C. S. Marie-Victorin',
                'schoolboard_region' => 'Montérégie',
                'schoolboard_adress' => '13, rue Saint-Laurent Est',
            'schoolboard_city' => 'Longueuil (Qc) J4H 4B7',
                'schoolboard_phone' => '450 670-0730',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            41 => 
            array (
                'id' => 42,
                'schoolboard_name' => 'C. S. des Monts-et-Marées',
                'schoolboard_region' => 'Bas-Saint-Laurent',
                'schoolboard_adress' => '93, avenue du Parc',
            'schoolboard_city' => 'Amqui (Qc) G5J 2L8',
                'schoolboard_phone' => '418 629-6200',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            42 => 
            array (
                'id' => 43,
                'schoolboard_name' => 'C. S. de Montréal',
                'schoolboard_region' => 'Montréal',
                'schoolboard_adress' => '3737, rue Sherbrooke Est',
            'schoolboard_city' => 'Montréal (Qc) H1X 3B3',
                'schoolboard_phone' => '514 596-6000',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            43 => 
            array (
                'id' => 44,
                'schoolboard_name' => 'C. S. de la Moyenne-Côte-Nord',
                'schoolboard_region' => 'Côte-Nord',
                'schoolboard_adress' => '1235, rue de la Digue',
            'schoolboard_city' => 'Havre-Saint-Pierre (Qc) G0G 1P0',
                'schoolboard_phone' => '418 538-3044',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            44 => 
            array (
                'id' => 45,
                'schoolboard_name' => 'C. S. des Navigateurs',
                'schoolboard_region' => 'Chaudière-Appalaches',
                'schoolboard_adress' => '1860, 1re Rue',
            'schoolboard_city' => 'Lévis (Qc) G6W 5M6',
                'schoolboard_phone' => '418 839-0500',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            45 => 
            array (
                'id' => 46,
                'schoolboard_name' => 'C. S. New Frontiers',
                'schoolboard_region' => 'Montérégie',
                'schoolboard_adress' => '214, rue McLeod',
            'schoolboard_city' => 'Châteauguay (Qc) J6J 2H4',
                'schoolboard_phone' => '450 691-1440',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            46 => 
            array (
                'id' => 47,
                'schoolboard_name' => 'C. S. de l\'Or-et-des-Bois',
                'schoolboard_region' => 'Abitibi-Témiscamingue',
                'schoolboard_adress' => '799, boulevard Forest',
            'schoolboard_city' => 'Val-d\'Or (Qc) J9P 2L4',
                'schoolboard_phone' => '819 825-4220',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            47 => 
            array (
                'id' => 48,
                'schoolboard_name' => 'C. S. des Patriotes',
                'schoolboard_region' => 'Montérégie',
                'schoolboard_adress' => '1740, rue Roberval',
            'schoolboard_city' => 'Saint-Bruno-de-Montarville (Qc) J3V 3R3',
                'schoolboard_phone' => '450 441-2919',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            48 => 
            array (
                'id' => 49,
                'schoolboard_name' => 'C. S. du Pays-des-Bleuets',
                'schoolboard_region' => 'Saguenay–Lac-St-Jean',
                'schoolboard_adress' => '828, boulevard Saint-Joseph',
            'schoolboard_city' => 'Roberval (Qc) G8H 2L5',
                'schoolboard_phone' => '418 275-2332',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            49 => 
            array (
                'id' => 50,
                'schoolboard_name' => '',
                'schoolboard_region' => 'Bas-Saint-Laurent',
                'schoolboard_adress' => '435, avenue Rouleau',
            'schoolboard_city' => 'Rimouski (Qc) G5L 8V4',
                'schoolboard_phone' => '418 723-5927',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            50 => 
            array (
                'id' => 51,
                'schoolboard_name' => 'C. S. Pierre-Neveu',
                'schoolboard_region' => 'Laurentides',
                'schoolboard_adress' => '525, rue de la Madone',
            'schoolboard_city' => 'Mont-Laurier (Qc) J9L 1S4',
                'schoolboard_phone' => '819 623-4310',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            51 => 
            array (
                'id' => 52,
                'schoolboard_name' => 'C. S. de la Pointe-de-l\'Île',
                'schoolboard_region' => 'Montréal',
                'schoolboard_adress' => '550, 53e Avenue',
            'schoolboard_city' => 'Montréal (Qc) H1A 2T7',
                'schoolboard_phone' => '514 642-9520',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            52 => 
            array (
                'id' => 53,
                'schoolboard_name' => 'C. S. des Portages-de-l\'Outaouais',
                'schoolboard_region' => 'Outaouais',
                'schoolboard_adress' => '225, rue Saint-Rédempteur',
            'schoolboard_city' => 'Gatineau (Qc) J8X 2T3',
                'schoolboard_phone' => '819 771-4548',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            53 => 
            array (
                'id' => 54,
                'schoolboard_name' => 'C. S. de Portneuf',
                'schoolboard_region' => 'Capitale-Nationale',
                'schoolboard_adress' => '310, rue de l\'Église',
            'schoolboard_city' => 'Donnacona (Qc) G3M 1Z8',
                'schoolboard_phone' => '418 285-2600',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            54 => 
            array (
                'id' => 55,
                'schoolboard_name' => 'C. S. des Premières-Seigneuries',
                'schoolboard_region' => 'Capitale-Nationale',
                'schoolboard_adress' => '643, avenue du Cénacle',
            'schoolboard_city' => 'Québec (Qc) G1E 1B3',
                'schoolboard_phone' => '418 666-4666',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            55 => 
            array (
                'id' => 56,
                'schoolboard_name' => 'C. S. de la Région-de-Sherbrooke',
                'schoolboard_region' => 'Estrie',
                'schoolboard_adress' => '2955, boul. de l\'Université',
            'schoolboard_city' => 'Sherbrooke (Qc) J1K 2Y3',
                'schoolboard_phone' => '819 822-5540',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            56 => 
            array (
                'id' => 57,
                'schoolboard_name' => 'C. S. René-Lévesque',
                'schoolboard_region' => 'Gaspésie–Îles-de-la-Madeleine',
                'schoolboard_adress' => '145, avenue Louisbourg',
            'schoolboard_city' => 'Bonaventure (Qc) G0C 1E0',
                'schoolboard_phone' => '418 534-3003',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            57 => 
            array (
                'id' => 58,
                'schoolboard_name' => 'C. S. de la Riveraine',
                'schoolboard_region' => 'Centre-du-Québec',
                'schoolboard_adress' => '375, rue de Monseigneur-Brunault',
            'schoolboard_city' => 'Nicolet (Qc) J3T 1Y6',
                'schoolboard_phone' => '819 293-5821',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            58 => 
            array (
                'id' => 59,
                'schoolboard_name' => 'C. S. des Rives-du-Saguenay',
                'schoolboard_region' => 'Saguenay–Lac-St-Jean',
                'schoolboard_adress' => '36, rue Jacques-Cartier Est',
            'schoolboard_city' => 'Saguenay (Qc) G7H 1W2',
                'schoolboard_phone' => '418 698-5000',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            59 => 
            array (
                'id' => 60,
                'schoolboard_name' => 'Riverside School Board',
                'schoolboard_region' => 'Montérégie',
                'schoolboard_adress' => '7525, chemin de Chambly',
            'schoolboard_city' => 'Longueuil (Qc) J3Y 0N7',
                'schoolboard_phone' => '450 672-4010',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            60 => 
            array (
                'id' => 61,
                'schoolboard_name' => 'C. S. de la Rivière-du-Nord',
                'schoolboard_region' => 'Laurentides',
                'schoolboard_adress' => '995, rue Labelle',
            'schoolboard_city' => 'Saint-Jérôme (Qc) J7Z 5N7',
                'schoolboard_phone' => '450 438-3131',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            61 => 
            array (
                'id' => 62,
                'schoolboard_name' => 'C. S. de Rouyn-Noranda',
                'schoolboard_region' => 'Abitibi-Témiscamingue',
                'schoolboard_adress' => '70, rue des Oblats Est C.P. 908',
            'schoolboard_city' => 'Rouyn-Noranda (Qc) J9X 5C9',
                'schoolboard_phone' => '819 762-8161',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            62 => 
            array (
                'id' => 63,
                'schoolboard_name' => 'C. S. de Saint-Hyacinthe',
                'schoolboard_region' => 'Montérégie',
                'schoolboard_adress' => '2255, avenue Sainte-Anne',
            'schoolboard_city' => 'Saint-Hyacinthe (Qc) J2S 5H7',
                'schoolboard_phone' => '450 773-8401',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            63 => 
            array (
                'id' => 64,
                'schoolboard_name' => 'C. S. des Samares',
                'schoolboard_region' => 'Lanaudière',
                'schoolboard_adress' => '4671, rue Principale',
            'schoolboard_city' => 'Saint-Félix-de-Valois (Qc) J0K 2M0',
                'schoolboard_phone' => '450 758-3500',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            64 => 
            array (
                'id' => 65,
                'schoolboard_name' => 'C. S. de la Seigneurie-des-Mille-Îles',
                'schoolboard_region' => 'Laurentides',
                'schoolboard_adress' => '430, boulevard Arthur-Sauvé',
            'schoolboard_city' => 'Saint-Eustache (Qc) J7R 6V6',
                'schoolboard_phone' => '450 974-7000',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            65 => 
            array (
                'id' => 66,
                'schoolboard_name' => 'Sir-Wilfrid-Laurier School Board',
                'schoolboard_region' => 'Laurentides',
                'schoolboard_adress' => '235 Montée Lesage',
            'schoolboard_city' => 'Rosemère (Qc) J7A 4Y6',
                'schoolboard_phone' => '450 621-5600',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            66 => 
            array (
                'id' => 67,
                'schoolboard_name' => 'C. S. des Sommets',
                'schoolboard_region' => 'Estrie',
                'schoolboard_adress' => '449, rue Percy',
            'schoolboard_city' => 'Magog (Qc) J1X 1B5',
                'schoolboard_phone' => '819 847-1610',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            67 => 
            array (
                'id' => 68,
                'schoolboard_name' => 'C. S. de Sorel-Tracy',
                'schoolboard_region' => 'Montérégie',
                'schoolboard_adress' => '41, avenue de l\'Hôtel-Dieu',
            'schoolboard_city' => 'Sorel-Tracy (Qc) J3P 1L1',
                'schoolboard_phone' => '450 746-3990',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            68 => 
            array (
                'id' => 69,
                'schoolboard_name' => 'C. S. des Trois-Lacs',
                'schoolboard_region' => 'Montérégie',
                'schoolboard_adress' => '400, avenue Saint-Charles',
            'schoolboard_city' => 'Vaudreuil-Dorion (Qc) J7V 6B1',
                'schoolboard_phone' => '514 477-7000',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            69 => 
            array (
                'id' => 70,
                'schoolboard_name' => 'C. S. du Val-des-Cerfs',
                'schoolboard_region' => 'Montérégie',
                'schoolboard_adress' => '55, rue Court C.P. 9000',
            'schoolboard_city' => 'Granby (Qc) J2G 9H7',
                'schoolboard_phone' => '450 372-0221',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            70 => 
            array (
                'id' => 71,
                'schoolboard_name' => 'C. S. de la Vallée-des-Tisserands',
                'schoolboard_region' => 'Montérégie',
                'schoolboard_adress' => '630, rue Ellice',
            'schoolboard_city' => 'Beauharnois (Qc) J6N 3S1',
                'schoolboard_phone' => '450 225-2788',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
            71 => 
            array (
                'id' => 72,
                'schoolboard_name' => 'Western Québec School Board',
                'schoolboard_region' => 'Outaouais',
                'schoolboard_adress' => '15, rue Katimavik',
            'schoolboard_city' => 'Gatineau (Qc) J9J 0E9',
                'schoolboard_phone' => '819 684-2336',
                'schoolboard_email' => 'cs@cs.cs',
                'schoolboard_url' => 'http://cs.cs',
            ),
        ));
        
        
    }
}