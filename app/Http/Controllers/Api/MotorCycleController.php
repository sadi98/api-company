<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MotorCycle;
use Illuminate\Http\Request;

class MotorCycleController extends Controller
{
    public function index()
    {
        $motorcycles = MotorCycle::with('merk')->get();

        $transformed = $motorcycles->map(function ($motorcycle) {
            return [
                'id' => $motorcycle->id,
                'merk' => $motorcycle->merk->name,
                'name' => $motorcycle->name,
                'status' => $motorcycle->status,
                'price' => $motorcycle->price,
                'color' => $motorcycle->color,
                'cc' => $motorcycle->cc,
                'km' => $motorcycle->km,
                'body' => $motorcycle->body,
            ];
        });

        return response()->json($transformed);
    }

    public function show($id)
    {
        $motorcycle = MotorCycle::with('merk')->findOrFail($id);

        $transformed =
            [
                'id' => $motorcycle->id,
                'merk' => $motorcycle->merk->name,
                'name' => $motorcycle->name,
                'status' => $motorcycle->status,
                'price' => $motorcycle->price,
                'color' => $motorcycle->color,
                'cc' => $motorcycle->cc,
                'km' => $motorcycle->km,
                'body' => $motorcycle->body,
            ];

        return response()->json($transformed);
    }
}