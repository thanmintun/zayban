<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
class FrontController extends Controller
{
    Public function index()
    {
        $items = Item::orderBy('id','DESC')->paginate(8);
        return view('front.index',compact('items'));
    }
    public function ShopItem($id)
    {
        $item=Item::find($id);
        $categoryID=$item->category_id;
        $related_items=Item::where('category_id',$categoryID)->where('id', '!=',$id)->orderBy('id','DESC')->limit(4)->get();
        // $feature_post = Post::->orderBy('id','DESC')->limit(4)->get();
        // $featureID = $feature_post->id
        // $posts = Post::where('id', '!=', $featureID)->orderBy('id','DESC')->limit(4)->get();

        return view('front.detail',compact('item','related_items'));
        


        
        // return view ('front.shopitem',compact('item','related_items'));
    }
    public function ItemsCategory($category_id)
    {
        $items=Item::where('category_id',$category_id)->orderBy('id','DESC')->paginate(8);
        return view('front.item-category',compact('items'));
    }
}
