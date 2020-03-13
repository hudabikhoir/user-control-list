<?php


namespace App\Http\Controllers;

use App\Chronology;
use Illuminate\Http\Request;

class ChronologyController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:chronologies-list');
         $this->middleware('permission:chronologies-create', ['only' => ['create','store']]);
         $this->middleware('permission:chronologies-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:chronologies-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $chronologies = Chronology::latest()->paginate(5);
        return view('chronologies.index',compact('chronologies'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('chronologies.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        request()->validate([
            'status_id' => 'required',
            'cronology' => 'required',
        ]);

        Chronology::create($request->all());

        return redirect()->route('chronologies.index')
                        ->with('success','cronology created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Chronology  $cronology
     * @return \Illuminate\Http\Response
     */

    public function show(Chronology $chronology)
    {
        return view('chronologies.show',compact('chronology'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chronology  $cronology
     * @return \Illuminate\Http\Response
     */

    public function edit(Chronology $chronology)
    {
        return view('chronologies.edit',compact('chronology'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chronology  $cronology
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Chronology $chronology)
    {
        $chronology->update($request->all());

        return redirect()->route('chronologies.index')
                        ->with('success','Chronology updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chronology  $cronology
     * @return \Illuminate\Http\Response
     */

    public function destroy(Chronology $chronology)
    {
        $chronology->delete();
        return redirect()->route('chronologies.index')
                        ->with('success','Chronology deleted successfully');
    }

}