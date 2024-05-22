<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Set the starting time
        $startTime = Carbon::parse('10:00:00');

        // Set the ending time
        $endTime = Carbon::parse('23:00:00');

        $times = [];
        // Iterate through the time range with an interval of 60 minutes
        for ($currentTime = $startTime; $currentTime->lte($endTime); $currentTime->addMinutes(60)) {
            // Process each time value within the loop
            $currentHour = $currentTime->format('H');
            $currentMinute = $currentTime->format('i');

            $times[] = "{$currentHour}:{$currentMinute}";

            // Perform any desired actions or calculations based on the current time value
        }

        $fields = Field::all();
        return view('admin.transaction.index', compact('fields', 'times'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
