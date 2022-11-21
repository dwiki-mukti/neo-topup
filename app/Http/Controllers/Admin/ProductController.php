<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GameTrending;
use App\Models\Item;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'category' => 'required|in:voucher,service',
            'thumbnail' => 'required|image|file|mimes:jpeg,png,jpg|max:2048',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->category = $request->category;

        // setup data fields
        if ($request->name_fields) {    
            $fields = [];
            foreach ($request->name_fields as $key => $name_fields) {
                $fields[] = [
                    'label' => $name_fields,
                    'type_data' => $request->type_data_fields[$key] ?? 'string'
                ];
            }

            $product->fields = json_encode($fields);
        }

        //save thumbnail
        $thumbnail = $request->file('thumbnail');
        $thumbnail_name = date('YmdHis') . '_' . $thumbnail->getClientOriginalName();
        $thumbnail->storeAs('/images/product', $thumbnail_name, 'public');
        $product->thumbnail = 'images/product/' . $thumbnail_name;

        $product->save();
        return redirect()->route('admin.product.index')->with('success', 'Data product berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product'));
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
        $product = Product::findOrfail($id);
        
        $request->validate([
            'name' => 'required|string',
            'category' => 'required|in:voucher,service',
            'thumbnail' => 'image|file|mimes:jpeg,png,jpg|max:2048',
        ]);

        $product->name =  $request->name;
        $product->category = $request->category;

        // setup data fields
        if ($request->name_fields) {    
            $fields = [];
            foreach ($request->name_fields as $key => $name_fields) {
                $fields[] = [
                    'label' => $name_fields,
                    'type_data' => $request->type_data_fields[$key] ?? 'string'
                ];
            }

            $product->fields = json_encode($fields);
        }

        if ($request->hasFile('thumbnail')) {

            // delete file
            Storage::delete('public/' . $product->thumbnail);

            // save thumbnail
            $thumbnail = $request->file('thumbnail');
            $thumbnail_name = date('YmdHis') . '_' . $thumbnail->getClientOriginalName();
            $thumbnail->storeAs('/images/product', $thumbnail_name, 'public');
            $product->thumbnail = 'images/product/' . $thumbnail_name;
        }

        $product->save();
        return redirect()->route('admin.product.index')->with('success', 'Data product berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->thumbnail != null) {
            Storage::delete('public/' . $product->thumbnail);
        }
        Item::where('product_id', $product->id)->delete();
        GameTrending::where('product_id', $product->id)->delete();
        $product->delete();
        return redirect()->route('admin.product.index')->with('success', 'Data product berhasil dihapus!');
    }
}
