<?php

namespace App\Http\Controllers;

use App\AlgorithmChoice;
use App\dataset;
use App\DatasetChoice;
use App\ResultFromMatlab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Khill\Lavacharts\Laravel\LavachartsFacade as Lava;
//use Khill\Lavacharts\Lavacharts;

use App\Http\Requests;

class ResultFromMatlabController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $result = ResultFromMatlab::where('UserId', Auth::user()->id)->get();
        $algorithm = AlgorithmChoice::all();
        $dataset = DatasetChoice::all();

        return view('pages.resultfrommatlab.index')
            ->with('result' , $result)
            ->with('algorithm_id' , $algorithm)
            ->with('dataset_id' , $dataset);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {
        $population = Lava::DataTable();

        $population->addDateColumn('Year')
            ->addNumberColumn('Number of People')
            ->addRow(['2006', 623452])
            ->addRow(['2007', 685034])
            ->addRow(['2008', 716845])
            ->addRow(['2009', 757254])
            ->addRow(['2010', 778034])
            ->addRow(['2011', 792353])
            ->addRow(['2012', 839657])
            ->addRow(['2013', 842367])
            ->addRow(['2014', 873490]);

        Lava::AreaChart('Population', $population, [
            'title' => 'Population Growth',
            'legend' => [
                'position' => 'in'
            ]
        ]);

        $result = ResultFromMatlab::find($id);
        return view('pages.resultfrommatlab.show')
            ->with('result' , $result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = ResultFromMatlab::find($id);
        $result->delete();
        return redirect()->route('result.index');
    }
}
