<?php 

namespace App\Template;

use Illuminate\View\View;
// use App\Post;
// use App\Category;
use App\page;
use App\Post;
use Carbon\Carbon;
use DB;


class BlogTemplate extends AbstractTemplate{

	protected $view = 'blog';
	public 	  $title = 'Blog';

	// protected $posts;
	protected $pages;

	public function __construct( Page $pages){
		// $this->posts = $posts;
		$this->pages = $pages;
	}

	public function prepare(View $view, array $parameters){
		$posts = Post::where('stutes','active')->orderBy('id', 'desc')->paginate(6);
		$pages = $this->pages->where('title',$this->title)->get();
		$view->with(compact('pages', $pages, 'posts', $posts));
	}

}