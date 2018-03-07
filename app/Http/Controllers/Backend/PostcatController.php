<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Alert;
use App\Postcat;
use Auth;

class PostcatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    private $uplouad_dir;

    public function __construct()
    {
        // $this->middleware('rule:admin');
        $this->uplouad_dir = base_path() . '/public/uploads';
    }

    public function index()
    {
        return \Control::index('postcat');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \Control::create('postcat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'translate' => [
                'title' => 'required',
            ],
            'stutes' => 'required',
        ]);

        // // Photo request
        // if($request->hasFile('photo')){
        //     // get photo name
        //     $photo_rand = $request->file('photo')->getClientOriginalName();
        //     $photo = rand(0, 10000) . '_' . $photo_rand; 
        //     // move photo to folder
        //     $destination = $this->uplouad_dir;
        //     $request->file('photo')->move($destination, $photo);
        // }else{
        //     $photo = 'unknown_image.png';
        // }

        return \Control::store($request,'postcat',[
            'translate' => ['title'],
            'stutes' => $request->stutes,
            'created_by' => Auth::user()->name,
            ],cp.'postcats');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return \Control::show('postcat',$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return \Control::edit('postcat',$id);
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
        $this->validate($request,[
            'translate' => [
                'title' => 'required',
            ],
            'stutes' => 'required',
        ]);

        // Photo request
        // if($request->hasFile('photo')){
        //     // get photo name
        //     $photo_rand = $request->file('photo')->getClientOriginalName();
        //     $photo = rand(0, 10000) . '_' . $photo_rand; 
        //     // move photo to folder
        //     $destination = $this->uplouad_dir;
        //     $request->file('photo')->move($destination, $photo);
        // }else{
        //     $photo = Postcat::find($id)->photo;
        // }

        return \Control::update($request,$id,'postcat',[
            'translate' => ['title'],
            'stutes' => $request->stutes,
            'updated_by' => Auth::user()->name,
            ],cp.'postcats');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id = null)
    {
        $postcats = Postcat::findOrFail($id);
        $postcats->delete();
        alert()->success(trans('lang.deleted'), trans('lang.postcat'));
        return back();

        //return \Control::destroy($request,$id,'postcat');
    }

    public function order(Request $request)
    {
        return \Control::order($request->data,'postcat',0);
    }

}
