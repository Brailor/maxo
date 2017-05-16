<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Category;
use App\Subcategory;
class PageController extends BaseController
{
  /**
  * @return Response
  */
 public function index() {
     return view('akcio', ['page' => 'akcio']);
 }
 /**
 * @param string $page
 * @return Response
 */
 public function view($page){
   if(view()->exists($page)){
      return view($page, ['page' => $page]);
    } else{
      abort(404);
    }
 }
 /**
 * @param string $termek
 * @return Response
 */
 public function termekek($termek){
   if(view()->exists('termekek')){
     $subcategory = DB::table('categories_maxo')->where('name', '=', $termek)->first();
     $products = DB::table('subcategories')->where('category_id', '=', $subcategory->id)->get();
     $data= [];
     foreach ($products as $prod) {
       array_push($data, json_decode($prod->data, true));
       //array_push($ids, $prod->id);
     }
      return view('termekek', ['page' => 'termekek', 'subcategory' => $subcategory, 'datas' => $data, 'products' => $products]);
    } else{
      abort(404);
    }
 }


   /**
   * @param string $termek
   * @return Response
   */
   public function termek($termek, $id){
     $product = DB::table('products')->where('subcategory_id', '=', $id)->first();
     $data = json_decode($product->data, true);
     //print_r($data);

     return view('termek', ['page' => 'termekek', 'termek' => $termek , 'id' => $id, 'product' => $data]);
   }
}
