<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Information;
use App\Models\Message;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function home()
    {
        $information = Information::find(1);
        return view('front.home.index',compact('information'));
    }
    public function blog()
    {
        $blogs = Blog::paginate(15);
        $information = Information::find(1);
        return view('front.blog.index',compact('blogs','information'));
    }
    public function showBlognext($title)
    {
        $blog=Blog::where('title',str_replace('_', ' ',$title))->first();
        $id = $blog->id;
        $blog->update([
            'views' => $blog->views + 1
        ]);

        $blog=Blog::find($id);
       
        $comments = Comment::where('blog_id',$id)->get();
        $information = Information::find(1);
        return view('front.blog.show',compact('blog','comments','information'));
    }  
    public function category()
    {
        $categories = Category::paginate(15);
        $information = Information::find(1);
        return view('front.category.index',compact('categories','information'));
    }
    public function showCategorynext($name)
    {
        $category=Category::where('name',str_replace('_', ' ',$name))->first();
        $id = $category->id;
        $category=Category::find($id);
        $blogs=Blog::where('category_id',$id)->paginate(9);
        $information = Information::find(1);
        return view('front.category.show',compact('category','blogs','information'));
    }
    public function products()
    {
        $products = Product::paginate(20);
        $information = Information::find(1);
        return view('front.product.index',compact('products','information'));
    }
    public function showProductNext($name)
    {
        $products = Product::where('name',str_replace('_', ' ',$name))->first();
        $id = $products->id;
        $product = Product::find($id);
        $information = Information::find(1);
        return view('front.product.show',compact('product','information'));
    }  
    public function productcategory()
    {
        $product_categories = ProductCategory::paginate(15);
        $information = Information::find(1);
        return view('front.product_categories.index',compact('product_categories','information'));
    }
    public function showproductCategorynext($name)
    {
        $category=ProductCategory::where('name',str_replace('_', ' ',$name))->first();
        $id = $category->id;
        $category=ProductCategory::find($id);
        $products = Product::where('category_id',$id)->paginate(9);
        $information = Information::find(1);
        return view('front.product_categories.show',compact('category','products','information'));
    }
    public function about()
    {
        $information = Information::find(1);
        return view('front.about.index',compact('information'));
    }
    public function contact()
    {
        $information = Information::find(1);
        return view('front.contact.index',compact('information'));
    }
    public function login()
    {
        $information = Information::find(1);
        return view('user.auth.login',compact('information'));
    }
    public function privacy()
    {
        $information = Information::find(1);
        return view('front.privacy.index',compact('information'));
    }
    public function register()
    {
        $information = Information::find(1);
        return view('user.auth.register',compact('information'));
    }
    public function message(Request $request)
    {
        Message::create($request->all());
        toastr()->success('Message is Send Successfully');
        return redirect()->back();
    }

    public function checkout(){
        $information = Information::find(1);
        return view('front.checkout.index')->with('information',$information);
    }

    public function searchBlog(Request $request){
        $blogs = Blog::where('title','LIKE','%'.$request->keyword.'%')->get();
        $information = Information::find(1);
        return view('front.blog.search')->with('blogs',$blogs)->with('information',$information)->with('Keyword',$request->keyword);
    }
}
