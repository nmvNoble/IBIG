@extends ('layout_main')

<!-- Banner -->
@section('banner')
    <section id="banner" style="padding: 10em 0 3em 0;">
        <h2>Projects</h2>
        <!--<p>Lorem ipsum dolor sit amet nullam consequat <br /> interdum vivamus donce sed libero.</p>
        <ul class="actions">
            <li><a href="#" class="button special big">Get Started</a></li>
        </ul>-->
    </section>
@endsection

@section('content')

<!-- Three -->
<section id="three" class="wrapper style1">
    <div class="container">
        <header class="major special">
            <h2>Projects</h2>
            <a href="\projects\create" class="button special big" style="display: inline; float: right;">Create a Project</a>
            <p>Viewing all Projects on IBIG</p>
        </header>
        <div class="projects-grid">
            <ul style="list-style: none;">
                @foreach ($projects as $project)
                     <!-- @if ($project->calamity === 0)
                        <p>calamity === 1</p> -->
                        <li>
                            <div class="project">
                                <div class="image rounded" style="margin-left: -2%;"><img src="images/{{$project->image}}.jpg" alt="" /></div>
                                <div class="content">
                                    <header>
                                        <h2>
                                            <span title="Project for Calamity Victim Support">
                                                <img class="image calamityIcon" src="\images\icons/AlertCalamity-512.png" style= @if ($project->calamity === 0)
                                                    display:none;
                                                @elseif ($project->calamity === 1)
                                                    display:block;
                                                @endif
                                                />
                                            </span>
                                            <a href="/projects/{{$project->id}}/description">{{$project->title}}</a>
                                        </h2>
                                        <p>Project by: User #{{$project->creatorID}}</p>
                                    </header>
                                    <p>{{$project->description}}</p>
                                </div>
                                <div class="fund">
                                    <div>
                                        <header>
                                            @if($project->type === "Php")
                                                <h3>{{$project->type}} {{$project->goal - $project->current}}</h3>
                                            @else
                                                <h3>{{$project->goal - $project->current}} {{$project->type}}</h3>
                                            @endif
                                            <p>left to go!</p>
                                            <span title="Progress">
                                                <img class="image customIcon projProgToggleOn" src="\images\icons/add-512.png"
                                                style="display: none;" />
                                            </span>
                                            <div id="projProg" class="hide">
                                                <!-- <img class="image customIcon projProgToggleOff" src="\images\icons/remove-512.png"  /> -->
                                                <progress id="progressBar" max={{$project->goal}} value={{$project->current}}></progress>
                                            </div>
                                        </header>
                                        <ul class="actions">
                                            <li><a href="/projects/{{$project->id}}/donate" class="button special" >Get in Touch</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <!-- @else
                        <p>calamity === 0</p>
                    @endif
                @endforeach -->

            </ul>
        </div>
        {{ $projects->links() }}
    </div>
</section>

<!-- Four -->
<section id="four" class="wrapper style3 special">
    <div class="container">
        <header class="major">
            <h2>Looking for something different?</h2>
            <p>View some of IBIG statistics in the Home Page!</p>
        </header>
        <ul class="actions">
            <li><a href="/welcome" class="button special big">Visit Home</a></li>
        </ul>
    </div>
</section>
@endsection

<!-- Footer -->
@section('footer')
@endsection

<!-- Additional Scripts -->
@section('script')
    <script src="\assets\js\customization\projects\index.js"></script>
@endsection
