<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Alert;
use App\Post;
use App\Postcat;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $posts;
    private $postcats;
    private $uplouad_dir;

    public function __construct(post $posts,postcat $postcats)
    {
        $this->middleware('rule:admin');

        $this->posts = $posts;
        $this->postcat = $postcats;

        $this->uplouad_dir = base_path() . '/public/uploads';
    }

    public function index()
    {
        return \Control::index('post');
    }


    public function get_postcats(){            
            $postcats = Postcat::all();
            return $postcats;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $postcat = $this->get_postcats();
        return view(user('rule').'_rule.posts.create',compact('postcat'));
        // return \Control::create('post');
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
            $photo = 'unknown_image_blog.png';
        }

        return \Control::store($request,'post',[
            'translate' => ['title','content'],
            'stutes' => $request->stutes,
            'uri' => $request->uri,
            'created_by' => Auth::user()->name,
            'photo' => $photo,
            ],cp.'posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return \Control::show('post',$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $post = Post::find($id);
        $postcat = $this->get_postcats();
        return view(user('rule').'_rule.posts.edit',compact('post','postcat'));
        // return \Control::edit('post',$id);
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
            $photo = Post::find($id)->photo;
        }

        return \Control::update($request,$id,'post',[
            'translate' => ['title','content'],
            'stutes' => $request->stutes,
            'uri' => $request->uri,
            'updated_by' => Auth::user()->name,
            'photo' => $photo,
            'postcats_id'=>$request->postcats_id,
        ],cp.'posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id = null)
    {
        $posts = Post::findOrFail($id);
        $posts->delete();
        alert()->success(trans('lang.deleted'), trans('lang.post'));
        return back();

        //return \Control::destroy($request,$id,'post');
    }

    public function order(Request $request)
    {
        return \Control::order($request->data,'post',0);
    }

}
