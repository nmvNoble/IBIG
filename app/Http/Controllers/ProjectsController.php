<?php



namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //primitive version of latest()
        $projects = Project::orderBy('id', 'desc')->get();

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
    public function store()
    {
        //dump(request()->all());

        request()->validate([
            'title' => 'required',
            'body' => 'required',
            'excerpt' => 'required'
        ]);

        $project = new Project();

        $project->title = request('title');
        $project->body = request('body');
        $project->excerpt = request('excerpt');

        //Primitive version of $project->save();
        $project = \DB::table("projects")->insert(
            ['title' => request('title'), 'excerpt' => request('excerpt'), 'body' => request('body')]
        );


        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show()//($id)
    {
        return view('projects.show');
        //$project = Project::find($id);

        //return view('projects.show', ['project' => $project]);
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
            'body' => 'required',
            'excerpt' => 'required'
        ]);

        $project = Project::find($id);

        $project->title = request('title');
        $project->body = request('body');
        $project->excerpt = request('excerpt');

        //Primitive version of $project->save();
        /*$project = \DB::table("projects")->insert(
            ['title' => request('title'), 'excerpt' => request('excerpt'), 'body' => request('body')]
        );*/
        Project::updateOrInsert(
                ['id' => $id],
                ['title' => request('title'), 'excerpt' => request('excerpt'), 'body' => request('body')]
            );
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
