<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Project;
use App\Customize;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;

class MainController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function evacuationCenters()
    {
        //
        $user=Auth::user();
        $userID= $user->id;
        $customize = Customize::getuserData($userID);
        return view('evac_centers', ['customize' => $customize]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        //
        $user=Auth::user();
        $userID= $user->id;
        $customize = Customize::getuserData($userID);
        return view('welcome', ['customize' => $customize]);
    }

    public function search(Request $request)
    {
        $searchResults = (new Search())
            ->registerModel(Project::class, 'title')
            ->perform($request->input('query'));


        $query=$request->input('query');


        $projects = DB::table('projects')->where('title', 'LIKE','%'.$query.'%')->paginate(5);
        $user=Auth::user();
        $userID= $user->id;
        $customize = Customize::getuserData($userID);

        //$projects = Project::latest()->get();//orderBy('id', 'desc')->get();

        return view('search', compact('projects'), ['customize' => $customize]);
    }

    
}
