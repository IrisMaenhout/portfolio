<?php

namespace Database\Seeders;

use App\Models\project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects_info = [

            // ____________________ Samen uit, Samen thuis ______________________
            [
                'name' => 'Samen uit samen thuis',

                'short_description' => 'Applicatie om evenementen te plannen en zorgt er voor dat gebruikers zich veilig voelen tijdens hun verplaatsing naar het evenement.',

                'description' => 'Dit is een applicatie om evenementen te plannen en het zorgt er voor dat gebruikers zich veilig voelen tijdens hun verplaatsing naar het evenement. Gebruikers worden op hoogte gesteld als een van hun vrienden zich onveilig voelt en de locatie is ook zichtbaar tijdens de verplaatsing, men kan ook een routebeschrijving zien tot de locatie waar het evenement plaats vindt en als men zich onveilig voelt kan men meteen ook bellen naar de politie of hun vrienden zonder de app/website te verlaten en/of het nummer dat men wilt bellen opgeslagen te hebben.',

                'process_description' => 'Ik begon met de brieving te lezen en inspiratie op te zoeken op dribble voor mijn interface, daarna maakte ik een kanban bord waar ik de opdracht in kleinere deel taken verdeelde.',

                'category' => 'Design & development',

                'url_website' => 'https://samen-uit-samen-thuis.onrender.com',

                'url_github' => 'https://github.com/gdmgent-mobdev1/werkstuk-ek1-samen-uit-samen-thuis-IrisMaenhout',

                'url_design' => 'https://xd.adobe.com/view/bde427c0-1888-4d2f-8f33-a1aa32d21849-e8b7/?fullscreen&hints=off',

                'visible' => 1

            ],

            // _________________________ Babylist ________________________________
            [
                'name' => 'Babylist',

                'short_description' => 'Applicatie om een lijst te maken van de nogige babyspulletjes, deze lijst kan men dan delen met familie en vrienden.',

                'description' => 'Dit is een applicatie voor ouder om een babylijst aan te maken waarbij men poducten uit verschillende winkels kan opslaan in hun lijst en vervolgens kan men deze lijst delen met vrienden en familie. Zij kunnen dan bepaalde producten kiezen die ze willen kopen.',

                'process_description' => 'Ik begon met de brieving te lezen en inspiratie op te zoeken op dribble voor mijn interface, daarna maakte ik een kanban bord waar ik de opdracht in kleinere deel taken verdeelde.',

                'category' => 'Design & development',

                'url_website' => 'https://www.babylist.site',

                'url_github' => 'https://github.com/gdmgent-webdev2/werkstuk---geboortelijst-IrisMaenhout',

                'url_design' => 'https://xd.adobe.com/view/84e2247d-c835-45e8-bc56-6146c269810c-d1b1/?fullscreen',

                'visible' => 1

            ],


            // [
            //     'name' => 'Smile!!',

            //     'short_description' => 'Applicatie om een foto te maken aan de hand van een handbeweging, dit word vervolgens geupload op instagram.',

            //     'description' => 'Dit is een applicatie om een foto te maken aan de hand van een handbeweging (OpenCv), dit word vervolgens geupload op instagram (selenium)',

            //     'process_description' => 'Ik begon met de brieving te lezen en inspiratie op te zoeken op dribble voor mijn interface, daarna maakte ik een kanban bord waar ik de opdracht in kleinere deel taken verdeelde.',

            //     'category' => 'Design & development',

            //     'url_website' => '',

            //     'url_github' => 'https://github.com/gdmgent-webdev2/werkstuk---geboortelijst-IrisMaenhout',

            //     'url_design' => '',

            //     'visible' => 1

            // ]
        ];


        foreach($projects_info as $project){
            project::create($project);
        }

    }
}
