<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhoneRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phones = DB::table('phones')
            ->orderBy('phones.brand')
            ->get();
        return view('phones.index', ['phones' => $phones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('phones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePhoneRequest $request)
    {
        $validated = $request->validated();
        if (DB::table('phones')->insert($validated)) {
            return redirect()->route('phones.index')->with('success', 'Phone created successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $phone = DB::table('phones')
            ->where('phones.id', '=', $id)
            ->first();

        if (!$phone) {
            abort(404);
        }

        return view('phones.show', ['phone' => $phone]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $phone = DB::table('phones')
            ->where('phones.id', '=', $id)
            ->first();
        return view('phones.edit', ['phone' => $phone]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePhoneRequest $request, string $id)
    {
        $validated = $request->validated();
        DB::table('phones')
            ->where('id', '=', $id)
            ->update($validated);
        return redirect()->route('phones.show', $id)->with('success', 'Phone updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('phones')->delete($id);
        return redirect()->route('phones.index')->with('success', 'Phone deleted successfully');
    }
}
