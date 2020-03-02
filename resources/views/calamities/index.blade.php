@extends ('layout_main')

<!-- Banner -->
@section('banner')
    <section id="banner" style="padding: 10em 0 3em 0;">
        <h2>Calamity Projects</h2>
        <p>Return to IBIG Projects</p>
        <a href="\calamities\create" class="button special big">IBIG Projects</a>
    </section>
@endsection

@section('content')

<!-- Three -->
<section id="three" class="wrapper style1">
    <div class="container">
        <header class="major special">
            <h2><img class="image calamityIcon" src="\images\icons/AlertCalamity-512.png" />Calamity Projects</h2>
                
            <p>Viewing Calamity Projects on IBIG</p>
                
        </header>
        <div class="projects-grid">
            <ul style="list-style: none;">
                @foreach ($calamities as $calamity)
                        <li>
                            <div class="project">
                                <div class="image rounded" style="margin-left: -2%;"><img src="images/{{$calamity->image}}.jpg" alt="" /></div>
                                <div class="content">
                                    <header>
                                        <h2>
                                            <span title="Project for Calamity Victim Support">
                                                <img class="image calamityIcon" src="\images\icons/AlertCalamity-512.png" style= @if ($calamity->calamity === 0)
                                                    display:none;
                                                @elseif ($calamity->calamity === 1)
                                                    display:block;
                                                @endif
                                                />
                                            </span>
                                            <a href="/projects/calamities/{{$calamity->id}}/description">{{$calamity->title}}</a>
                                        </h2>
                                        <p>Project by: User #{{$calamity->creatorID}}</p>
                                    </header>
                                    <p>{{$calamity->description}}</p>
                                </div>
                                <div class="fund">
                                    <div>
                                        <header>
                                            @if($calamity->type === "Php")
                                                <h3>{{$calamity->type}} {{$calamity->goal - $calamity->current}}</h3>
                                            @else
                                                <h3>{{$calamity->goal - $calamity->current}} {{$calamity->type}}</h3>
                                            @endif
                                            <p>left to go!</p>
                                            <span title="Progress">
                                                <img class="image customIcon projProgToggleOn" src="\images\icons/add-512.png"
                                                style="display: none;" />
                                            </span>
                                            <div id="projProg" class="hide">
                                                <!-- <img class="image customIcon projProgToggleOff" src="\images\icons/remove-512.png"  /> -->
                                                <progress id="progressBar" max={{$calamity->goal}} value={{$calamity->current}}></progress>
                                            </div>
                                        </header>
                                        <ul class="actions">
                                            <li><a href="/projects/calamities/{{$calamity->id}}/donate" class="button special" >Get in Touch</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                @endforeach 

            </ul>
        </div>
        {{ $calamities->links() }}
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
