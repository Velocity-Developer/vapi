<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\License;

class VerifyLicense
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // Ambil License Key dari header Authorization atau parameter query
        $licenseKey = $request->header('license_key') ?? $request->query('license_key');

        // Cek apakah lisensi valid
        $license = License::where('license_key', $licenseKey)->first();

        //jika lisensi tidak valid
        if (!$license) {
            return response()->json(['error' => 'Invalid license key'], 403);
        }

        return $next($request);
    }
}
