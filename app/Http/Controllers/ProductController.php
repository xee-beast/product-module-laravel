<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Mail\NewProductEmail;
use App\Models\Product;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{

    /**
     * Returns data table list for countries index.
     * @return JsonResponse
     * @throws Exception
     */
    public function getDataTableList(){
        return Product::getDataTable();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $data = $request->validated();

        $product = Product::create($data);

//        $user = User::find($request->get('created_by'));
//        Mail::to($user->email)->send(new NewProductEmail($user));

        return json_encode(['data' => $product]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return json_encode(['data' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->validated();

        $product->fill($data);
        $product->save();

        return json_encode(['data' => $product]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return false|string
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return json_encode(['data' => true]);
    }
}
