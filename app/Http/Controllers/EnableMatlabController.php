<?php

namespace App\Http\Controllers;

use App\ResultFromMatlab;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

class EnableMatlabController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function enableMatlabForUpdate(Request $request)
    {
        $checkalg = $request->algorithm2;
        if ($checkalg == 2){  //TODO statikos tropos gia na pernw to KNN . na allaksei
            Artisan::call('Enable:Knn', array(
                    'dataset' => $request->dataset2,
                    'from'=> $request->from,
                    'to'=> $request->to,
                    'algorithm' => $request->algorithm2,
                    'k' => $request->k2,
                    'trainingset' => $request->trainingset,
                    'userId' => $request->userId)
            );
        }else{
            Artisan::call('Enable:Bayes', array(
                    'dataset' => $request->dataset2,
                    'from'=> $request->from,
                    'to'=> $request->to,
                    'algorithm' => $request->algorithm2,
                    'trainingset' => $request->trainingset,
                     'userId' => $request->userId)
            );
        }

        $countData = ResultFromMatlab::all()->count();
        return redirect()->route('progressBar' , $countData);
    }
}