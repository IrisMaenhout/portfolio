<?php
  $dateOfBirth = "25-06-2001";
  $today = date("Y-m-d");
  $age = date_diff(date_create($dateOfBirth), date_create($today));
?>

<div id="personal-info" class="personal-info-container">
    <div class="img-coding">
        <img class="coding" src="{{asset('/images/coding.svg')}}" alt="coding">
        <img class="skills" src="{{asset('/images/skils-circle.png')}}" alt="skills">


    </div>

    <div class="personal-info">

        <h1 class="introduction">Hallo, ik ben <span class="name">Iris Maenhout</span>.</h1>

        <div class="job-position flex">
            <p>UX/UI DESIGNER</p>
            <hr>
            <p>FRONT END DEVELOPER</p>
        </div>

        <p class="info">Ik ben {{$age->format('%y')}} jaar en ik ben een student die de opleiding grafische en digitale media (bachelor) volgt met als keuzetraject New media development aan de Artevelde hogeschool in Gent. Ik heb een passie voor het creëren van webapplicaties die een mooie en gebruiksvriendelijke interfase hebben.</p>

        <div class="btns">
            <a class="secundary-btn" href="cv">Cv downloaden</a>
            <a class="primary-btn" href="#contact">Contact</a>
        </div>

    </div>

</div>
