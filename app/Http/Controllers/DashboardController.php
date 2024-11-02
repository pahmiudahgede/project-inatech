<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Dashboard',
            'paragraph' => 'Berikut ini merupakan visualisasi data yang terinput ke dalam sistem',
            'list' => [
                ['label' => 'Home'],
            ]
        ];

        $activeMenu = 'dashboard';
        $userRole = Auth::user()->id_role; // Mendapatkan role pengguna yang login

        return view('dashboard.index', [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu,
            'userRole' => $userRole
        ]);
    }
}