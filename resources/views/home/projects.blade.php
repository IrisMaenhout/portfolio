<div id="projects" class="projects-container">
    <h2>Projects</h2>

    <div class="projects">
        @foreach ($projects as $project)

            @php
                $url = str_replace(" ","_", strtolower($project->name));
            @endphp

            <a href="project/{{$url}}" class="project">
                <h3>{{$project->name}}</h3>
                <img src="{{asset('/images/mockups/' . $url . '.png')}}" alt="">
            </a>
        @endforeach

    </div>
</div>
