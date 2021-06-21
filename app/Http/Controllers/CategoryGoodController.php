<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Good;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CategoryGoodController extends Controller
{
    public function index(){
        $categories = Category::orderBy('title')->get();
        $goods = Good::all();
        return view('pages.index', [
            'goods' => $goods,
            'categories' => $categories,
        ]);
    }

    public function getGoodsByCategory($slug){
        $categories = Category::orderBy('title')->get();
        $current_category = Category::where('slug',$slug)->first();

        return view('pages.index', [
            'goods' => $current_category->goods()->paginate(4),
            'categories' => $categories,
        ]);
    }

    public function getGood($slug_category, $slug_good){
        $good = Good::where('slug', $slug_good)->first();
        $categories = Category::orderBy('title')->get();

        return view('pages.show-good',[
            'good' => $good,
            'categories' => $categories,
            'slug_categories' => $slug_category,
        ]);
    }

    public function RequestCategory(){
        return view('pages.requestcategory');
    }

    public function RequestGood(){
        return view('pages.requestgood');
    }

    public function RequestCategoryCheck(Request $request){
        $valid = $request->validate([
            'title' => 'required',
            'slug' => 'required',
        ]);
        $review = new category();
        $review->title = $request->input('title');
        $review->slug = $request->input('slug');

        $review->save();

        return redirect()->route('RequestCategory');
    }

    public function RequestGoodCheck(Request $request){
        $valid = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'category_id' => 'required',
            'full_description' => 'required',
            'short_description' => 'required',
        ]);
        $review = new good();
        $review->title = $request->input('title');
        $review->slug = $request->input('slug');
        $review->category_id = $request->input('category_id');
        $review->full_description = $request->input('full_description');
        $review->short_description = $request->input('short_description');

        $review->save();

        return redirect()->route('RequestGood');
    }
}
