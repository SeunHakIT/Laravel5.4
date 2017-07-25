<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_Status;

class StatusMainController extends Controller
{

    private  $status,$date,$author,$limite = 5;

    public function __construct(Tbl_Status $status)
    {
        $this->status=$status;
       // date_default_timezone_set('America/Los_Angeles');
      // $this->date=date("Y-m-d H:i:s");
        date_default_timezone_set ( 'Asia/Phnom_Penh' );
        $this->date = date ( "Y-m-d H:i:s" );


        return view('admin/status/status', compact('status'));



    }

    /**
     * Display a listing of the resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $status=$this->status->orderBy('status_id','desc')->paginate($this->limite);
    }

    /**sta\
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
