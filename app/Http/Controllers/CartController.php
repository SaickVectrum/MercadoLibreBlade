<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Cart;



class CartController extends Controller
{
	public function add(Request $request)
	{
		$product = Product::find($request->id);
		if (empty($product))
			return redirect('/products/product/1');
		// dd($product);
		Cart::add(
			$product->id,
			$product->title,
			1,
			$product->price,
			["image" => $product->file]
		);

		return redirect()->back()->with("success", "Item agregado");
	}

	public function checkout()
	{
		return view('cart.checkout');
	}

	public function removeItem(Request $request)
	{
		Cart::remove($request->rowId);
		return redirect()->back()->with("success", "Item eliminado");
	}

	public function clear()
	{
		Cart::destroy();
		return redirect()->back()->with("success", "Carrito vacio");
	}
}
