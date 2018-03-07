<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Move;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Portfolio;
use App\Portcat;
use Auth;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    private $uplouad_dir;

    public function __construct()
    {
        $this->middleware('rule:admin');
        $this->uplouad_dir = base_path() . '/public/uploads/portfolio';
    }

    public function index()
    {
        $port = Portfolio::where('stutes','active')->orderBy('id', 'desc')->paginate(2);
        return \Control::index('portfolio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \Control::create('portfolio');
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
            'stutes' => 'required',
            'portcats_id' => 'required',
            'image' => 'required',
        ]);


        $picture = '';

        if (Input::hasFile('image')) {
        $files = Input::file('image');

            foreach($files as $file){

            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $picture = rand(0, 10000) . '_' . $filename;
            $destinationPath = public_path().'/uploads/portfolio';

            $file->move($destinationPath, $picture);

            DB::table('portfolios')->insert([
                'stutes' => $request->stutes,
                'portcats_id' => $request->portcats_id,
                'created_by' => Auth::user()->name,
                'image' => $picture,
            ]);

            }
        }

        alert()->success(trans('lang.added'), trans('lang.image'));
        return redirect('admin/portfolios');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return \Control::show('portfolio',$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return \Control::edit('portfolio',$id);
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
            'stutes' => 'required',
            'portcats_id' => 'required',
            'image' => 'required',
        ]);

        // Photo request
        if($request->hasFile('image')){
            // get photo name
            $photo_rand = $request->file('image')->getClientOriginalName();
            $photo = rand(0, 10000) . '_' . $photo_rand; 
            // move photo to folder
            $destination = $this->uplouad_dir;
            $request->file('image')->move($destination, $photo);
        }else{
            $photo = Portfolio::find($id)->photo;
        }

        return \Control::update($request,$id,'portfolio',[
            'stutes' => $request->stutes,
            'updated_by' => Auth::user()->name,
            'image' => $photo,
        ],cp.'portfolios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id = null)
    {
        $portfolios = Portfolio::findOrFail($id);
        $portfolios->delete();
        alert()->success(trans('lang.deleted'), trans('lang.portfolio'));
        return back();

        //return \Control::destroy($request,$id,'portfolio');
    }

    public function order(Request $request)
    {
        return \Control::order($request->data,'portfolio',0);
    }

}
