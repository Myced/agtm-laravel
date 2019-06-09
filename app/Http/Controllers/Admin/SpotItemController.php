<?php

namespace App\Http\Controllers\Admin;

use App\Models\SpotItem;
use Illuminate\Http\Request;

class SpotItemController extends Controller
{
    public function index()
    {
        $items = SpotItem::all();

        return view('admin.spot_items', compact('items'));
    }
    public function add()
    {
        return view('admin.spot_item_add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'unit' => 'required'
        ]);

        $item = new SpotItem;

        $item->name = $request->name;
        $item->price = $request->price;
        $item->quantity = $request->quantity;
        $item->unit = $request->unit;

        $item->save();

        session()->flash('success', 'Spot Item Saved successfully');

        return back();
    }

    public function edit($id)
    {
        $item = SpotItem::find($id);

        return view('admin.spot_item_edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'unit' => 'required'
        ]);

        $item = SpotItem::find($id);

        $item->name = $request->name;
        $item->price = $request->price;
        $item->quantity = $request->quantity;
        $item->unit = $request->unit;

        $item->save();

        session()->flash('success', 'Spot Item Updated successfully');

        return back();
    }

    public function destroy($id)
    {
        SpotItem::destroy($id);

        session()->flash('success', 'Spot Item deleted');

        return back();
    }

    public function activate($id)
    {
        $item = SpotItem::find($id);

        $item->status = true;
        $item->save();

        session()->flash('success', 'Spot Item Activated');

        return back();
    }

    public function deactivate($id)
    {
        $item = SpotItem::find($id);

        $item->status = false;
        $item->save();

        session()->flash('success', 'Spot Item Deactivated');

        return back();
    }

    public function prices()
    {
        $items = SpotItem::all();

        return view('admin.spot_item_prices', ['items' => $items]);
    }

    public function updatePrices(Request $request)
    {
        $i = 0;
        foreach($request->id as $id)
        {
            $item = SpotItem::find($id);

            $item->price = $request->prices[$i];

            $item->save();
            $i++;
        }

        session()->flash('success', 'Spot Item Prices Updated');

        return back();
    }
}
