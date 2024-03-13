<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    public function getAllProducts()
    {
        $products = Product::paginate(4); // Lấy 4 sản phẩm mỗi trang
        return view('admin.product', ['products' => $products]);
    }

    public function detail($id)
    {
       
        $product = Product::findOrFail($id);
        $categories = Category::all();
       
        return view('users.detail', ['product'=>$product,'categories' => $categories]);
    }

    public function getAllProductsByCategory($category_id){  
        $categories = Category::all();
        $category = Category::findOrFail($category_id);
        $products = $category->products()->paginate(4);
        return view('users.category',['products'=>$products,'categories' => $categories]);
    }

    public function search(Request $request) {
        $query = $request->input('query');
        $categories = Category::all();
        $products = Product::query();
        
        if ($query) {
            $products = $products->where('name', 'like', "%$query%");
        }
        
        $products = $products->paginate(4);
        
        return view('users.home', ['products' => $products, 'categories' => $categories]);
    }
    

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|image|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();  
     
        $request->image->move(public_path('images'), $imageName);

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect()->route('admin.products')->with('success', 'Product created successfully.');
    }

    function destroy(Request $request){
        $id = $request->input('product_id');
    }
}
