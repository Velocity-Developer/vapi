<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class PluginActivationController extends Controller
{
    public function activate(Request $request)
    {
        // $request->validate([
        //     'domain' => 'required|string',
        //     'license_key' => 'required|string',
        // ]);

        // // Mencari website berdasarkan domain
        // $website = Website::where('domain', $request->domain)->first();

        // if ($website) {
        //     // Simpan license key
        //     $website->license_key = $request->license_key;
        //     $website->status = 1;
        //     $website->save();

        //     return response()->json([
        //         'message' => 'Plugin activated successfully!',
        //         'request' => $request
        //     ], 200);
        // }

        return response()->json([
            'message' => 'Website not found!',
            'request' => $request
        ], 404);
    }
}
