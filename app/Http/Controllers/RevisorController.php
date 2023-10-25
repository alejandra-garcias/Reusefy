<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\AdController;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{

    public function index()
    {

        $ad = Ad::where('is_accepted', null)
            ->orderBy('created_at', 'desc')
            ->first();
        return view('revisor.home', compact('ad'));
    }

    public function acceptAd(Ad $ad)
    {
        $ad->setAccepted(true);
        return redirect()->back()->withMessage(['type' => 'success', 'text' => 'Anuncio aceptado']);
    }
    public function rejectAd(Ad $ad)
    {
        $ad->setAccepted(false);
        return redirect()->back()->withMessage(['type' => 'danger', 'text' => 'Anuncio rechazado']);
    }




    public function becomeRevisor()
    {
        Mail::to('algasa-97@hotmail.com')->send(new BecomeRevisor(Auth::user()));
        return redirect()->route('home')->withMessage(['type' => 'success', 'text' => 'Solicitud enviada con éxito, pronto sabrás algo, gracias!']);
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('reusefy:makeUserRevisor', ['email' => $user->email]);
        return redirect()->route('home')->withMessage(['type' => 'success', 'text' => 'Ya tenemos un compañero más']);
    }
}
