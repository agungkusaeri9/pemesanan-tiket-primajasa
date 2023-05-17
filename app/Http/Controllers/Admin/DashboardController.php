<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JenisArmada;
use App\Models\Pesanan;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $count = [
            'users' => User::count(),
            'armada' => JenisArmada::count(),
            'pesanan' => Pesanan::count()
        ];

        $pesanan_terbaru = Pesanan::latest()->limit(10)->get();
        return view('admin.pages.dashboard', [
            'title' => 'Dashboard',
            'count' => $count,
            'pesanan_terbaru' => $pesanan_terbaru
        ]);
    }
}
