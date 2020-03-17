<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Users;
use App\Project;
use App\Customize;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //primitive version of latest()->get();
        $users = User::latest()->get();//orderBy('id', 'desc')->get();
        $user=Auth::user();
        $userID= $user->id;
        $customize = Customize::getuserData($userID);

        return view('users.index', ['users' => $users , 'customize' => $customize]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create' , ['customize' => $customize]);
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

        $user = new User();

        //$user->creatorID = ;
        $user->title = request('title');
        $user->goal = request('goal');
        $user->description = request('description');
        $user->image = request('image') === '' ? 'default' : request('image');

        $user->save();

        //Primitive version of $user->save();
        /*$user = \DB::table("users")->insert(
            ['title' => request('title'), 'excerpt' => request('excerpt'), 'body' => request('body')]
        );*/


        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function showOwned()
    {
        //return view('users.show');
        //$user = User::find($id);
        //return view('users.show', ['user' => $user]);

        $projects = Project::latest()->get();//to be changed to orderBy('id', 'desc')->get();
        $user=Auth::id();
        if( Auth::id()!=null){
            
            $userID=  Auth::id() ;
            $customize = Customize::getuserData($userID);
            return view('users.showProjects', ['projects' => $projects , 'customize' => $customize]);
        }
        else {
            $customize = Customize::getuserData(1);
            return view('users.showProjects', ['projects' => $projects , 'customize' => $customize]);
        }
    }

    public function showDonatedTo()
    {
        //return view('users.showDonatedTo');
        //$user = User::find($id);
        //return view('users.show', ['user' => $user]);
        $projects = Project::where('current', '>', 0)->get();
       
        $user=Auth::id();
        if( Auth::id()!=null){
            
            $userID=  Auth::id() ;
            $customize = Customize::getuserData($userID);
            return view('users.showProjectsDonatedTo', ['projects' => $projects , 'customize' => $customize]);
        }
        else {
            $customize = Customize::getuserData(1);
            return view('users.showProjectsDonatedTo', ['projects' => $projects , 'customize' => $customize]);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function showAboutUs()
    {
        $user=Auth::user();
        $userID= $user->id;
        $customize = Customize::getuserData($userID);
        return view('users.showAboutUs' , ['customize' => $customize]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $user=Auth::id();
        if( Auth::id()!=null){
            
            $userID=  Auth::id() ;
            $customize = Customize::getuserData($userID);
            return view('users.edit', compact('user') , ['customize' => $customize]); //['user' => $user]);

        }
        else {
            $customize = Customize::getuserData(1);
            return view('users.edit', compact('user') , ['customize' => $customize]); //['user' => $user]);

        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
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

        $user = User::find($id);

        //$user->creatorID = ;
        $user->title = request('title');
        $user->goal = request('goal');
        $user->description = request('description');
        if(!empty(request('image'))) {
            $user->image = request('image');
        }

        $user->save();

        //Primitive version of $user->save();
        /*$user = \DB::table("users")->insert(
            ['title' => request('title'), 'excerpt' => request('excerpt'), 'body' => request('body')]
        );*/
        /*not as primitive ver
        User::updateOrInsert(
                ['id' => $id],
                ['title' => request('title'), 'excerpt' => request('excerpt'), 'body' => request('body')]
            );*/
        //die($user);
        //die($id);


        return redirect('/users/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
