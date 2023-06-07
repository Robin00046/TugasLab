<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use App\Models\Jenis_Tes;
use App\Models\Laboratory;
use App\Models\Pasien;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class Dashboard extends Controller
{
    //
    public function admin()
    {
        $user = User::count();
        // $pasien = User::where('role_id', 3)->count();
        $lab = User::join('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')
            ->where('model_has_roles.role_id', 2)
            ->count();

        $pasien = Pasien::count();
        $jenis = Jenis_Tes::count();
        $diagnosa = Diagnosa::count();
        return view('sb2_admin.dashboard.dashboard_admin', compact('user', 'pasien', 'lab', 'jenis', 'diagnosa'));
        // return view('nice_admin.dashboard.dashboard_admin', compact('user', 'pasien', 'lab', 'jenis', 'diagnosa'));
    }
    public function lab()
    {
        $pasien = Pasien::count();
        $daftar = Laboratory::where('status', 1)->count();
        $selesai = Laboratory::where('status', 2)->count();
        if (Laboratory::where('status', 2)->count() == 0) {
            // $now = Carbon::now();
            $pendapatan = (object) array('total' => 0, 'year' => now()->year, 'month' => now()->format('F'));
        } else {
            if (Laboratory::where('status', 2)->count() == 0) {
                // $now = Carbon::now();
                $pendapatan = (object) array('total' => 0, 'year' => now()->year, 'month' => now()->format('F'));
            } else {
                $pendapatan = Laboratory::selectRaw('sum(harga) as total, year(tanggal) as year, monthname(tanggal) as month,month(tanggal) as months')->join('diagnosas', 'diagnosas.id', '=', 'laboratories.diagnosa_id')->groupBy('year', 'month','months')->orderBy('year', 'desc')->orderBy('months', 'desc')->where('status', 2)->first();
                
            }
        }
        return view('sb2_admin.dashboard.dashboard_lab', compact('pasien', 'daftar', 'selesai', 'pendapatan'));
        // return view('nice_admin.dashboard.dashboard_lab', compact('pasien', 'daftar', 'selesai', 'pendapatan'));
    }
}
