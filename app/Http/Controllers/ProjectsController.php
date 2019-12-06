<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Project;
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
        $projects = Project::latest()->get();//orderBy('id', 'desc')->get();

        return view('projects.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('projects.create');
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
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function showDescription($id)
    {
        //return view('projects.show');
        $project = Project::find($id);

        return view('projects.showDescription', ['project' => $project]);
    }
    public function showUpdates($id)
    {
        //return view('projects.show');
        $project = Project::find($id);

        return view('projects.showUpdates', ['project' => $project]);
    }
    public function showComments($id)
    {
        //return view('projects.show');
        $project = Project::find($id);

        return view('projects.showComments', ['project' => $project]);
    }
    public function showDonations($id)
    {
        //return view('projects.show');
        $project = Project::find($id);

        return view('projects.showDonations', ['project' => $project]);
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

        return view('projects.edit', compact('project')); //['project' => $project]);
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

    public function search(Request $request)
    {
        $searchResults = (new Search())
            ->registerModel(Project::class, 'title')
            ->perform($request->input('query'));


        $query=$request->input('query');


        $projects = DB::table('projects')->where('title', 'LIKE','%'.$query.'%')->get();

        //$projects = Project::latest()->get();//orderBy('id', 'desc')->get();

        return view('search', compact('projects'));
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
