<div class="info-sidebar info">
    <p class="domain">{{$project->category}}</p>
    <h1>{{$project->name}}</h1>

    <div class="long-text">
        @if (str_contains($project->description, '</p>'))
            {!! $project->description !!}
        @else
            <p>{{$project->description}}</p>
        @endif

    </div>

    {{-- <p class="short-description long-text">{{$project->description}}</p> --}}

    <div class="project-img">
        @foreach ($result_images as $result_img)
        @if (str_contains($result_img->img_path, '.mp4'))
            <div class="mySlides fade">
                <video controls>
                    <source src="{{asset($result_img->img_path)}}" type="video/mp4">
                </video>
            </div>
        @else
            <div class="mySlides fade">
                <img src="{{asset($result_img->img_path)}}" alt="{{$project->name}}" >
            </div>
        @endif

        @endforeach

        <i class="fa-solid fa-chevron-left prev"></i>
        <i class="fa-solid fa-chevron-right next"></i>

        <div class="technologies-tags">
            <ul>
                @foreach ($technologies as $tech)
                    <li>#{{$tech[0]->name}}</li>
                @endforeach
            </ul>
        </div>
    </div>


    <div class="project-btns">
        @if ($project->url_website != '')
            <a href="{{$project->url_website}}" target="_blank"><i class="fi fi-rr-browser"></i></a>
        @endif

        @if ($project->url_github != '')
            <a href="{{$project->url_github}}" target="_blank"><i class="fa-brands fa-github"></i></a>
        @endif

        @if ($project->url_design != '')
            <a href="{{$project->url_design}}" target="_blank"><i class="fi fi-brands-xd"></i></a>
        @endif

    </div>

    <div class="process long-text">
        <h3>Process</h3>

        @if (str_contains($project->process_description, '</p>'))
            {!! $project->process_description !!}
        @else
            <p>{{$project->process_description}}</p>
        @endif

    </div>

    <div class="process-img">
        @foreach ($process_images as $process_img)
            <div class="process-slides fade">
                <img src="{{asset($process_img->img_path)}}" alt="{{$project->name}}" >
            </div>
        @endforeach
        <i class="fa-solid fa-chevron-left prev-btn"></i>
        <i class="fa-solid fa-chevron-right next-btn"></i>
    </div>

    <h2>Vind je dit een interessant project?</h2>
    <div class="project-main-btns">
        <a class="secundary-btn" href="/#projects">Bekijk meer projecten</a>
        <a class="primary-btn" href="/#contact">Contacteer mij</a>
    </div>
</div>
