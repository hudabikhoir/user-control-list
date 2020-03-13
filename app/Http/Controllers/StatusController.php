<?php


namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:status-list');
         $this->middleware('permission:status-create', ['only' => ['create','store']]);
         $this->middleware('permission:status-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:status-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $status = Status::latest()->paginate(5);
        return view('status.index',compact('status'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('status.create');
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
            'input_id' => 'required',
            'date_of_arrest' => 'required',
            'place_of_arrest' => 'required',
            'status' => 'required',
            'placement' => 'required',
        ]);
        
        Status::create($request->all());

        return redirect()->route('status.index')
                        ->with('success','status_data created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Status  $status_data
     * @return \Illuminate\Http\Response
     */

    public function show(Status $status)
    {
        return view('status.show',compact('status'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Status  $status_data
     * @return \Illuminate\Http\Response
     */

    public function edit(Status $status)
    {
        return view('status.edit',compact('status'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Status  $status_data
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Status $status)
    {
        request()->validate([
            'date_of_arrest' => 'required',
            'place_of_arrest' => 'required',
            'status' => 'required',
            'placement' => 'required',
        ]);

        $status->update($request->all());

        return redirect()->route('status.index')
                        ->with('success','Status Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Status  $status_data
     * @return \Illuminate\Http\Response
     */

    public function destroy(Status $status)
    {
        $status->delete();

        return redirect()->route('status.index')
                        ->with('success','Status Data deleted successfully');
    }

}