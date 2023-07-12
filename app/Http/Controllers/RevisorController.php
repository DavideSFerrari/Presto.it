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
        Auth::user()->last_announcement_revised = $announcement->id;
        Auth::user()->save();
        return redirect()->back()->with('message', 'Hai accettato l\'annuncio');
            }

    public function rejectAnnouncement(Announcement $announcement){

    $announcement->setAccepted(false);
    Auth::user()->last_announcement_revised = $announcement->id;
    Auth::user()->save();
    return redirect()->back()->with('message', 'Hai rifiutato l\'annuncio');
            }

            public function restoreAd (Announcement $announcement) {
                $announcement->setAccepted(null);
                Auth::user()->last_announcement_revised = null;
                Auth::user()->save();
                return redirect()->back()->with('message', 'Azione annullata!');
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
