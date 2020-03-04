<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Project;
use App\Calamity;
use App\Customize;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //primitive version of latest()->get();
        $projects = Project::latest()->paginate(5);//orderBy('id', 'desc')->get();
        $customize = Customize::getuserData(1);

        return view('projects.index', ['projects' => $projects , 'customize' => $customize]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function showDescription($id)
    {
        //return view('projects.show');
        $project = Project::find($id);
        $customize = Customize::getuserData(1);

        return view('projects.showDescription', ['project' => $project , 'customize' => $customize]);
    }
    public function showUpdates($id)
    {
        //return view('projects.show');
        $project = Project::find($id);
        $customize = Customize::getuserData(1);

        return view('projects.showUpdates', ['project' => $project , 'customize' => $customize]);
    }
    public function showComments($id)
    {
        //return view('projects.show');
        $project = Project::find($id);
        $customize = Customize::getuserData(1);

        return view('projects.showComments', ['project' => $project , 'customize' => $customize]);
    }
    public function showDonations($id)
    {
        //return view('projects.show');
        $project = Project::find($id);
        $customize = Customize::getuserData(1);

        return view('projects.showDonations', ['project' => $project , 'customize' => $customize]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function donate($id)
    {
        $project = Project::find($id);
        $customize = Customize::getuserData(1);
        return view('projects.donate', ['project' => $project , 'customize' => $customize]);
    }


    /**=====================CALAMITY============================================================================
     * Display a listing of Calamity projects.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexCalamities()
    {
        //primitive version of latest()->get();
        $projects = Project::latest()->where('calamity', 1)->paginate(5);//orderBy('id', 'desc')->get();
        $customize = Customize::getuserData(1);

        return view('projects.index', ['projects' => $projects , 'customize' => $customize]);
    }
    /**
     * Display the specified Calamity project.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function showDescriptionCalamity($id)
    {
        //return view('projects.show');
        $project = Project::find($id);
        $customize = Customize::getuserData(1);

        return view('projects.showDescription', ['project' => $project , 'customize' => $customize]);
    }
    public function showUpdatesCalamity($id)
    {
        //return view('projects.show');
        $project = Project::find($id);
        $customize = Customize::getuserData(1);

        return view('projects.showUpdates', ['project' => $project , 'customize' => $customize]);
    }
    public function showCommentsCalamity($id)
    {
        //return view('projects.show');
        $project = Project::find($id);
        $customize = Customize::getuserData(1);

        return view('projects.showComments', ['project' => $project , 'customize' => $customize]);
    }
    public function showDonationsCalamity($id)
    {
        //return view('projects.show');
        $project = Project::find($id);
        $customize = Customize::getuserData(1);

        return view('projects.showDonations', ['project' => $project , 'customize' => $customize]);
    }

    /**
     * Display the specified Calamity project's donation page.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function donateCalamity($id)
    {
        $project = Project::find($id);
        $customize = Customize::getuserData(1);
        return view('projects.donate', ['project' => $project , 'customize' => $customize]);
    }

    /*================================================================================================*/



    public function search(Request $request)
    {
        $searchResults = (new Search())
            ->registerModel(Project::class, 'title')
            ->perform($request->input('query'));


        $query=$request->input('query');


        $projects = DB::table('projects')->where('title', 'LIKE','%'.$query.'%')->paginate(5);
        $customize = Customize::getuserData(1);

        //$projects = Project::latest()->get();//orderBy('id', 'desc')->get();

        return view('search', compact('projects'), ['customize' => $customize]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $customize = Customize::getuserData(1);
        return view('projects.create', ['customize' => $customize]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dump(request()->all());

        request()->validate([
            'title' => 'required',
            'goal' => 'required',
            'description' => 'required'
        ]);

        $project = new Project();

        //$project->creatorID = ;
        $project->title = request('title');
        $project->goal = request('goal');
        $project->description = request('description');
        $project->image = request('image') === '' ? 'default' : request('image');

        $project->save();

        //Primitive version of $project->save();
        /*$project = \DB::table("projects")->insert(
            ['title' => request('title'), 'excerpt' => request('excerpt'), 'body' => request('body')]
        );*/


        return redirect('/projects');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $project = Project::find($id);
        $customize = Customize::getuserData(1);

        return view('projects.edit', compact('project') , ['customize' => $customize]); //['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        request()->validate([
            'title' => 'required',
            'goal' => 'required',
            'description' => 'required'
        ]);

        $project = Project::find($id);

        //$project->creatorID = ;
        $project->title = request('title');
        $project->goal = request('goal');
        $project->description = request('description');
        if(!empty(request('image'))) {
            $project->image = request('image');
        }

        $project->save();

        //Primitive version of $project->save();
        /*$project = \DB::table("projects")->insert(
            ['title' => request('title'), 'excerpt' => request('excerpt'), 'body' => request('body')]
        );*/
        /*not as primitive ver
        Project::updateOrInsert(
                ['id' => $id],
                ['title' => request('title'), 'excerpt' => request('excerpt'), 'body' => request('body')]
            );*/
        //die($project);
        //die($id);


        return redirect('/projects/' . $id);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }




    
}
