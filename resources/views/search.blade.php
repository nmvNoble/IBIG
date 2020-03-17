@extends ('layout_main')

<!-- Banner -->
@section('banner')
    <section id="banner" style="padding: 10em 0 3em 0;">
        <h2>{{ $projects->count() }} results found for "{{ request('query') }}"</h2>
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
        <div class="projects-grid">
            <ul style="list-style: none;">
                @foreach($projects as $project)
                <li>
                        <div class="project">
                            <div class="image rounded" style="margin-left: -2%;"><img src="images/{{$project->image}}.jpg" alt="" /></div>
                            <div class="content">
                                <header>
                                    <h2><a href="/projects/{{$project->id}}/description">{{$project->title}}</a></h2>
                                    <p>Project by: User #{{$project->creatorID}}</p>
                                </header>
                                <p>{{$project->description}}</p>
                            </div>
                            <div class="fund">
                                <div>
                                    <header>
                                        <h3>Php {{$project->goal - $project->current}}</h3>
                                        <p>left to go!</p>
                                        <progress id="progressBar" max={{$project->goal}} value={{$project->current}}></progress>
                                    </header>
                                    <ul class="actions">
                                        <li><a href="/projects/{{$project->id}}/donate" class="button special" >Get in Touch</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                        <!--<ul>
                            <li>{{ $project->title }}</li>
                        </ul>-->
                @endforeach
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
