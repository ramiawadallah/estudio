<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\News;
use App\Lang;
use App\Product;
use App\Pcat;
use App\Image;
use App\Management;

class FrontEndController extends Controller
{

    public function showNews(News $news, Lang $lang, array $parmaeters){
        return view('frontend.news', compact('news','lang'));
    }


    public function showManagement(Management $manage, Lang $lang, array $parmaeters){
        return view('frontend.management', compact('manage','lang'));
    }


    public function showproduct($id){

      $product = Product::findOrFail($id);
      $product->where('pcats_id', $id)->get();
      return view('frontend.productinfo',compact('product' ,$product));

    }

    public function findProductName($id){


      return Product::where("pcats_id",$id)->get();
    	// $data = Product::all()->where("pcats_id",$id)->pluck('title','id');
      // return  json_encode($data);
    	
    }

   public function findproductInfo(Request $request, $id){

   		$data = Image::all()->where("products_id",$id)->pluck('title','id','photo','desc');

    	return json_encode($data);

   }

}
