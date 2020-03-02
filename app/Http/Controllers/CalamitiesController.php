<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Calamity;
use App\Customize;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;

class CalamitiesController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function evacuationCenters()
    {
        //
        $customize = Customize::getuserData(1);
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
        $customize = Customize::getuserData(1);
        return view('welcome', ['customize' => $customize]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //primitive version of latest()->get();
        $calamities = Calamity::latest()->paginate(5);//orderBy('id', 'desc')->get();
        $customize = Customize::getuserData(1);

        return view('calamities.index', ['calamities' => $calamities , 'customize' => $customize]);
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
        return view('calamities.create', ['customize' => $customize]);
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

        $calamity = new Calamity();

        //$calamity->creatorID = ;
        $calamity->title = request('title');
        $calamity->goal = request('goal');
        $calamity->description = request('description');
        $calamity->image = request('image') === '' ? 'default' : request('image');

        $calamity->save();

        //Primitive version of $calamity->save();
        /*$calamity = \DB::table("calamities")->insert(
            ['title' => request('title'), 'excerpt' => request('excerpt'), 'body' => request('body')]
        );*/


        return redirect('/calamities');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Calamity  $calamity
     * @return \Illuminate\Http\Response
     */
    public function showDescription($id)
    {
        //return view('calamities.show');
        $calamity = Calamity::find($id);
        $customize = Customize::getuserData(1);

        return view('calamities.showDescription', ['calamity' => $calamity , 'customize' => $customize]);
    }
    public function showUpdates($id)
    {
        //return view('calamities.show');
        $calamity = Calamity::find($id);
        $customize = Customize::getuserData(1);

        return view('calamities.showUpdates', ['calamity' => $calamity , 'customize' => $customize]);
    }
    public function showComments($id)
    {
        //return view('calamities.show');
        $calamity = Calamity::find($id);
        $customize = Customize::getuserData(1);

        return view('calamities.showComments', ['calamity' => $calamity , 'customize' => $customize]);
    }
    public function showDonations($id)
    {
        //return view('calamities.show');
        $calamity = Calamity::find($id);
        $customize = Customize::getuserData(1);

        return view('calamities.showDonations', ['calamity' => $calamity , 'customize' => $customize]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Calamity  $calamity
     * @return \Illuminate\Http\Response
     */
    public function donate($id)
    {
        $calamity = Calamity::find($id);
        $customize = Customize::getuserData(1);
        return view('calamities.donate', ['calamity' => $calamity , 'customize' => $customize]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Calamity  $calamity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $calamity = Calamity::find($id);
        $customize = Customize::getuserData(1);

        return view('calamities.edit', compact('calamity') , ['customize' => $customize]); //['calamity' => $calamity]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Calamity  $calamity
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

        $calamity = Calamity::find($id);

        //$calamity->creatorID = ;
        $calamity->title = request('title');
        $calamity->goal = request('goal');
        $calamity->description = request('description');
        if(!empty(request('image'))) {
            $calamity->image = request('image');
        }

        $calamity->save();

        //Primitive version of $calamity->save();
        /*$calamity = \DB::table("calamities")->insert(
            ['title' => request('title'), 'excerpt' => request('excerpt'), 'body' => request('body')]
        );*/
        /*not as primitive ver
        Calamity::updateOrInsert(
                ['id' => $id],
                ['title' => request('title'), 'excerpt' => request('excerpt'), 'body' => request('body')]
            );*/
        //die($calamity);
        //die($id);


        return redirect('/calamities/' . $id);
    }

    public function search(Request $request)
    {
        $searchResults = (new Search())
            ->registerModel(Calamity::class, 'title')
            ->perform($request->input('query'));


        $query=$request->input('query');


        $calamities = DB::table('calamities')->where('title', 'LIKE','%'.$query.'%')->paginate(5);
        $customize = Customize::getuserData(1);

        //$calamities = Calamity::latest()->get();//orderBy('id', 'desc')->get();

        return view('search', compact('calamities'), ['customize' => $customize]);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Calamity  $calamity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calamity $calamity)
    {
        //
    }




    
}
