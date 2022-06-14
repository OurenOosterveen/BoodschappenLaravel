<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Grocery;

class GroceriesController extends Controller
{
    public function index() {
        return view('groceries.index', 
        [
            'groceries' => Grocery::all()
        ]);
    }

    public function create() {
        return view('groceries.create', [
            'categories' => Category::all()
        ]);
    }

    public function store() {
        $attr = request()->validate([
            'name' => 'required|min:2',
            'number' => 'required|numeric|integer|gt:0',
            'price' => 'required|numeric|gt:0',
            'category_id' => 'exists:categories,id'
        ]);

        Grocery::create($attr);

        return redirect(route("groceries.index"));
    }

    public function edit(Grocery $grocery) {
        return view('groceries.edit', [
            'grocery' => $grocery,
            'categories' => Category::all()
        ]);
    }

    public function update(Grocery $grocery) {
        $attr = request()->validate([
            'name' => 'required|min:2',
            'number' => 'required|numeric|integer|gt:0',
            'price' => 'required|numeric|gt:0',
            'category_id' => 'exists:categories,id'
        ]);

        $grocery->update($attr);

        return redirect(route("groceries.index"));
    }

    public function delete(Grocery $grocery) {
        $grocery->delete();

        return redirect(route("groceries.index"));
    }
}
