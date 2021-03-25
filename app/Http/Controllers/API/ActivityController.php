<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    public function all(Request $request)
    {   //nama, dan jobs
        $id = $request->input('id');
        $user_id = $request->input('user_id');
        $status = $request->input('status');
        $date = $request->input('date');
        $information = $request->input('date');

        // Relasi

        if($id)
        {
            $activity = Activity::with(['user'])->find($id);

            if($activity)
                return ResponseFormatter::success(
                    $activity,
                    'Data transaksi berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data transaksi tidak ada',
                    404
                );
        }
        $activity = Activity::with(['user'])->where('user_id', Auth::user()->id);

        if($user_id)
            $activity->where('name','jobs', $user_id);

        return ResponseFormatter::success(
        'Data list Activity berhasil diambil'
        );
    }

}
