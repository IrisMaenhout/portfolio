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

                'description' => '
                <p>De applicatie draait rond het aanmaken van gebeurtenissen: een housewarming, een concert, een fysieke vergadering, ... Deze gebeurtenissen kunnen aangemaakt worden door een gebruiker van de applicatie, waarna andere users kunnen uitgenodigd worden om een gebeurtenis te vervoegen. Zo ontstaat een groepje users die samen een gebeurtenis bijwonen en daarmee toegang geven tot het delen van zijn/haar/hun locatie tijdens de heen en terugweg. De groep kan de locatie van de mensen binnen de groep realtime controleren. Elke gebruiker die naar een evenement gaat krijgt op een kaart te zien met een "help me"-button. door deze knop in te drukken krijgt iedereen in de groep een melding en wordt de locatie van de persoon in nood visueel zichtbaar. Gebruikers in de groep die het dichtst bij de gebruiker in nood zijn kunnen dan meteen ingrijpen en ter hulp schieten.</p>

                <p>
                Gebruikers kunnen tijdens hun verplaatsing ook een routebeschrijving zien tot de locatie waar het evenement plaats vindt en als men zich onveilig voelt kan men meteen ook bellen naar de politie of hun vrienden zonder de app/website te verlaten en/of het nummer dat men wilt bellen opgeslagen te hebben. De applicatie kan ook worden gedownload als progressive web app, dit kan het makkelijker maken voor de gebruiker om de applicatie te raadplegen.
                </p>',

                'process_description' => '<p>Dit project was voor een examen opdracht op school, we mochten in de les idee??n voorstellen dat we graag wouden maken en daarna stemden we op het idee dat we het interesanst vonden. Ik ben persoonlijk blij dat dit idee was gekozen want ik vond het een erg intersant project om aan te werken met een hoge maatschappelijke relevantie waarbij we de kans hebben om het onveilig gevoel bij mensen weg te nemen of op zijn minst te verminderen.</p>

                <p>Ik begon met de opdrachtomschrijving te lezen en een plan op te stellen aan de hand van een kanban bord want doordat dit moest ingedient worden in de examenperiode was het belangerijk om mijn examen opdrachten te verdelen over de tijd die ik tot beschikking had en het gebruiken van een kanban bord en to do lijstjes helpten me het overzicht te bewaren van dit project, het hielp ook om het project op te delen in kleinere stukken. Ik ben daarna begonnen met het brainstormen van extra features zoals de routebescrijving en de optie om je vrienden/ politie te bellen en het zoeken naar inspiratie op dribble voor mijn interface. Als volgt maakte ik een design in Adobe XD en toen ik daar tevreden over was ging ik over naar het development van de applicatie. Ik gebruikte hiervoor Javascript, HTML, CSS, Firebase en mapbox. De applicatie is deployed op render.com.</p>',

                'category' => 'Design & development',

                'url_website' => 'https://samen-uit-samen-thuis.onrender.com',

                'url_github' => 'https://github.com/gdmgent-mobdev1/werkstuk-ek1-samen-uit-samen-thuis-IrisMaenhout',

                'url_design' => 'https://xd.adobe.com/view/bde427c0-1888-4d2f-8f33-a1aa32d21849-e8b7/?fullscreen&hints=off',

                'visible' => 1

            ],

            // _________________________ Babylist ________________________________
            [
                'name' => 'Babylist',

                'short_description' => 'Applicatie om een lijst te maken van de nogige babyspulletjes, deze lijst kan men dan delen met familie en vrienden. Zij kunnen dan bepaalde producten kiezen die ze willen kopen.',

                'description' => '<p>Als kinderen geboren worden, is het vaak de gewoonte dat een babylijst opgesteld wordt met handige cadeau\'s waarmee je de ouders kan plezieren. Vaak bieden winkels (zoals Dreambaby) dit aan als service, maar je bent wel beperkt aan die ene winkel, je kan niet aangeven dat je bij de concurrent iets wil.</p>

                <p>Het doel van deze applicatie is dat ouders een verlanglijst van babyspullen kunnen opstellen onaffhankelijk van welke winkel de spullen afkomstig zijn. Deze lijst kan men dan delen met vrienden en familie die vervolgens kunnen bekijken wat er op de wishlist staat en het artikel aankopen met de mogelijkheid tot het toevoegen van persoonlijke boodschap.</p>',

                'process_description' => 'Deze aplicatie heb ik gemaakt voor een examenopdracht op school en bestaat uit een laravel project. Het werd gevuld met data die gescraped werd van webshops. Alle gegevens werden opgeslagen in een sql database en de afbeeldingen die ook zijn binnengetrokken werden bewaard in de server storage. Om de structuur van mijn database te bepalen heb ik eerst ook een database schema gemaakt. Ik heb ook op basis van de briefing en de nodige vereisten nagedacht over welke webpagina\'s ik nodig had voor deze applicatie, dit heb ik vervolgens gebouwd met behulp van blade binnen laravel. Het betalingsprocess is gemaakt met Molie en in ????n van de onderstaande screenshot kunt u zien dat de betalingen tijdens het betalingsproces werken. Voor de styling gebruikte ik Tailwind css en de website is deployed op Digital ocean. ',

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
