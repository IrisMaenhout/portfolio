<div class="short-info">
    <div class="img-container">
        <img class="mockup" src="{{asset('/images/mockups/' . str_replace(" ","_", strtolower($project->name)) . '.png')}}" alt="{{$project->name}}">
    </div>


    <div class="info">
        <p class="domain">{{$project->category}}</p>
        <h1>{{$project->name}}</h1>

        <p class="short-description">{{$project->short_description}}</p>
        <p class="scroll-text"><span>Scroll voor meer informatie</span><i class="fa-solid fa-arrow-down-long"></i></p>
    </div>

</div>
