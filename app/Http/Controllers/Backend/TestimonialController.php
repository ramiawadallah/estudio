<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Alert;
use App\Testimonial;
use Auth;

class TestimonialController extends Controller
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
        return \Control::index('testimonial');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \Control::create('testimonial');
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
                'content' => 'required',
            ],
            'stutes' => 'required',
            'uri' => 'required',
            'photo' => 'required',
        ]);

        // Photo request
        if($request->hasFile('photo')){
            // get photo name
            $photo_rand = $request->file('photo')->getClientOriginalName();
            $photo = rand(0, 10000) . '_' . $photo_rand; 
            // move photo to folder
            $destination = $this->uplouad_dir;
            $request->file('photo')->move($destination, $photo);
        }else{
            $photo = 'unknown_image.png';
        }

        return \Control::store($request,'testimonial',[
            'translate' => ['title','content'],
            'stutes' => $request->stutes,
            'uri' => $request->uri,
            'created_by' => Auth::user()->name,
            'photo' => $photo,
            ],cp.'testimonials');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return \Control::show('testimonial',$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return \Control::edit('testimonial',$id);
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
                'content' => 'required',
            ],
            'stutes' => 'required',
            'uri' => 'required',
            'photo' => 'required',
        ]);

        // Photo request
        if($request->hasFile('photo')){
            // get photo name
            $photo_rand = $request->file('photo')->getClientOriginalName();
            $photo = rand(0, 10000) . '_' . $photo_rand; 
            // move photo to folder
            $destination = $this->uplouad_dir;
            $request->file('photo')->move($destination, $photo);
        }else{
            $photo = Testimonial::find($id)->photo;
        }

        return \Control::update($request,$id,'testimonial',[
            'translate' => ['title','content'],
            'stutes' => $request->stutes,
            'uri' => $request->uri,
            'updated_by' => Auth::user()->name,
            'photo' => $photo,
            ],cp.'testimonials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id = null)
    {
        $testimonials = Testimonial::findOrFail($id);
        $testimonials->delete();
        alert()->success(trans('lang.deleted'), trans('lang.testimonial'));
        return back();

        //return \Control::destroy($request,$id,'testimonial');
    }

    public function order(Request $request)
    {
        return \Control::order($request->data,'testimonial',0);
    }

}
