<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

//use App\Http\Requests;

class IndexController extends Controller
{
    protected $message;
    protected $header;

    public function __construct()
    {
        $this->header = 'Hello World!';
        $this->message = 'Quickly get a project started with any of our examples ranging from using parts of the framework to custom components and layouts.';
    }

    public function index() {
        $products = Product::select(['id','name','description'])->get();

        return view('page')->with(['message' => $this->message,
                                         'header' => $this->header,
                                         'products' => $products
                                        ]);
    }

    public function show($id)
    {
        //$product = Product::find($id);
        $product = Product::select(['id','name','description'])->where('id',$id)->first();
        //dump($product);

        return view('product-content')->with(['message' => $this->message,
                                                    'header' => $this->header,
                                                    'product' => $product
                                                    ]);
    }

    public function add()
    {
        return view('add-product')->with(['message' => $this->message,
            'header' => $this->header,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
                'name' => 'required|max:255',
        ]);

        $data = $request->all();

        $product = new Product();

        $product->fill($data);

        $product->save();

        return redirect('/');
    }
}
