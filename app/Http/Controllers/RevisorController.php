<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Mail\BecomeRevisor;
use App\Models\Announcement;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{

   

    public function index (Announcement $announcement){

        $announcement_to_check= Announcement::where('is_accepted', null)->first();
        return view('revisor.index', compact('announcement_to_check'), compact('announcement'));
            }

    public function acceptAnnouncement(Announcement $announcement){

        $announcement->setAccepted(true);
        return redirect()->back()->with('message', 'Hai accettato l\'annuncio');
            }

    public function rejectAnnouncement(Announcement $announcement){

    $announcement->setAccepted(false);
    return redirect()->back()->with('message', 'Hai rifiutato l\'annuncio');
            }



    public function becomeRevisor(){
   
    $obj = new BecomeRevisor(Auth::user());
    Mail::to('admin@presto.it')->send($obj);
    return redirect()->back()->with('message','Complimenti! Richiesta effettuata correttamente');
            }

    public function makeRevisor(User $user){
    Artisan::call('presto:make_user_revisor', ["email"=>$user->email]);
    return redirect ('/')->with('message','Complimenti L\'utente è diventato revisore');
            }

    public function searchAnnouncements(Request $request){
    $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(10);
    return view('announcements.index', compact('announcements'));
            }
}
