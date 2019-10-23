<?php
namespace App\Http\Controllers;

use App\Organization;
use App\User;
use App\Project;
use Illuminate\Http\Request;

class OrganizationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //primitive version of latest()->get();
        $organizations = Organization::latest()->get();//orderBy('id', 'desc')->get();

        return view('organizations.index', ['organizations' => $organizations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('organizations.create');
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

        $organization = new Organization();

        //$organization->creatorID = ;
        $organization->title = request('title');
        $organization->goal = request('goal');
        $organization->description = request('description');
        $organization->image = request('image') === '' ? 'default' : request('image');

        $organization->save();

        //Primitive version of $organization->save();
        /*$organization = \DB::table("organizations")->insert(
            ['title' => request('title'), 'excerpt' => request('excerpt'), 'body' => request('body')]
        );*/


        return redirect('/organizations');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function showAboutUs()
    {
        return view('users.organizations.showAboutUs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function showAffiliates()
    {
        $users = User::latest()->get();

        return view('users.organizations.showAffiliates', ['users' => $users]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function showOwned()
    {
        //return view('organizations.show');
        //$organization = Organization::find($id);
        //return view('organizations.show', ['organization' => $organization]);

        $projects = Project::latest()->get();//to be changed to orderBy('id', 'desc')->get();

        return view('users.organizations.showOrgProjects', ['projects' => $projects]);
    }

    public function showDonatedTo()
    {
        //return view('organizations.showDonatedTo');
        //$organization = Organization::find($id);
        //return view('organizations.show', ['organization' => $organization]);
        $projects = Project::where('current', '>', 0)->get();

        return view('users.organizations.showOrgProjects', ['projects' => $projects]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $organization = Organization::find($id);

        return view('organizations.edit', compact('organization')); //['organization' => $organization]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organization  $organization
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

        $organization = Organization::find($id);

        //$organization->creatorID = ;
        $organization->title = request('title');
        $organization->goal = request('goal');
        $organization->description = request('description');
        if(!empty(request('image'))) {
            $organization->image = request('image');
        }

        $organization->save();

        //Primitive version of $organization->save();
        /*$organization = \DB::table("organizations")->insert(
            ['title' => request('title'), 'excerpt' => request('excerpt'), 'body' => request('body')]
        );*/
        /*not as primitive ver
        Organization::updateOrInsert(
                ['id' => $id],
                ['title' => request('title'), 'excerpt' => request('excerpt'), 'body' => request('body')]
            );*/
        //die($organization);
        //die($id);


        return redirect('/organizations/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        //
    }
}
