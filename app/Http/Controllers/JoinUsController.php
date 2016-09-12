<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class JoinUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('joinus');
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
        // echo "fuck";
        if ($request->hasFile('myupload')) {
          // echo "fuck";
          // var_dump($request->myupload);
          $originalName = $request->myupload[0]->getClientOriginalName();
          $fileType = explode('.', $originalName)[1];
          $filePath = explode('-', explode('.', $originalName)[0]);
          // var_dump($filePath);
          // return;
          if (count($filePath) < 3) {
            // echo "yes";return;
            $path = $request->myupload[0]->storeAs("files", time() . ".{$fileType}");
          }else {

            $path = $request->myupload[0]->storeAs("files/{$filePath[0]}/{$filePath[1]}", "{$filePath[2]}.{$fileType}");
          }
          // var_dump($filePath);

          echo $originalName;
        }
        else {
          echo "shit";
        }
        // $file = $request->file('myupload');
        return;
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
