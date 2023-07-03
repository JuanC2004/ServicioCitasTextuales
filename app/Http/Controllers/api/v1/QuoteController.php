<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quotes = Quote::orderBy('name','asc')->get();
        return response()->json(['data' => $quotes],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $quote = Quote::create($request->all());
        return response()->(['data' => $quote],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Quote $quote)
    {
        return response()->json(['data' => $quote],200)
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quote $quote)
    {
        $quote->update($request->all());
        return response()->json(['data' => $quote],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quote $quote)
    {
        $quote->delete();
        return response()->json([],204);
    }
}
