<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Product;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        $product = Product::all();
        return view('admin.items.index', compact('items', 'product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($slug = null)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('admin.items.create', compact('product'));
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
            'product_id' => 'required|exists:products,id',
            'name' => 'required',
            'code' => 'required|unique:items',
            'denom' => 'required',
            'price' => 'required'
        ]);

        $item = new Item();
        $item->product_id = $request->product_id;
        $item->name = $request->name;
        $item->code = $request->code;
        $item->denom = $request->denom;
        $item->price = $request->price;

        $item->save();
        return redirect()->route('admin.item.index')->with('success', 'Data item berhasil ditambahkan!');
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
        $item = Item::findOrFail($id);
        $product = Product::findOrFail($item->product_id);
        return view('admin.items.edit', compact('item', 'product'));
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
        $item = Item::findOrfail($id);

        $request->validate([
            'name' => 'required',
            'code' => 'required|unique:items',
            'denom' => 'required',
            'price' => 'required'
        ]);

        $item->name = $request->name;
        $item->code = $request->code;
        $item->denom = $request->denom;
        $item->price = $request->price;

        $item->save();
        return redirect()->route('admin.item.index')->with('success', 'Data item berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::findOrFail($id);

        $item->delete();
        return redirect()->route('admin.item.index')->with('success', 'Data item berhasil dihapus!');
    }
}
