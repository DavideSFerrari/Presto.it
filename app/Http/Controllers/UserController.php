<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Announcement;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
        public function index(){
           
            $categories = Category::all();
            if(Auth::user()){
                $announcements = Announcement::where('user_id', Auth::user()->id)->get();
            }
            return view('user_profile.index', compact('categories', 'announcements'));
        }
    
        public function edit(User $user){

            $announcements = Announcement::all();
            $categories = Category::all();
            
            return view('user_profile.edit', compact('announcements', 'categories', 'user'));
        }

        public function update(User $user, UserRequest $request) {


            $path_image = $user->path;
                    
                    if ($request->hasFile('image') && $request->file('image')->isValid()) {
                        $path_name = $request->file('image')->getClientOriginalName();
                       
                        $path_image = $request->file('image')->storeAs('public/images/profiloUtente', $path_name);
                    }
            
            $user->update([
            
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'path' => $path_image,
               // dd($user)
            
            ]);
            return redirect ()->route('user_profile.index')->with('success' , 'Modifica avvenuta con successo');
            
            }
    
        public function destroy(User $user){
            $user = Auth::user();
            $user->delete();

            $message = '';

            switch (session('locale')) {
                case 'en':
                $message = "Account successfully deleted!";
                    break;
                case 'fr':
                $message = "Profil eliminé avec succès!";
                    break;
                case 'es':
                $message = "Perfil eliminado satifactoriamente";
                    break;
                
                default:
                $message = 'Cancellazione account avvenuta';
                    break;
            }
            return redirect()->route('homepage')->with('success', $message);
        }
}
