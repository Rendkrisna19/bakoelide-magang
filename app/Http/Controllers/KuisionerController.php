<?php

// app/Http/Controllers/KuisionerController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KuisionerDigitalMarketer;
use Illuminate\Support\Facades\Auth;

class KuisionerController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'tujuan' => 'required|string',
            'tantangan' => 'required|array|min:1',
            'social_commerce' => 'required|string',
        ]);

        KuisionerDigitalMarketer::create([
            'user_name' => Auth::user()->name,
            'user_email' => Auth::user()->email,
            'tujuan' => $request->tujuan,
            'tantangan' => $request->tantangan,
            'social_commerce' => $request->social_commerce,
        ]);

        return redirect('/digital-marketer')->with('success', 'Kuisioner berhasil dikirim!');
    }
}