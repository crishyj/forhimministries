<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Hash;
use App\Models\Blog;
use App\Models\Vlog;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function blogIndex(){
        $blogs = Blog::all();
        return view('admin.blogIndex', compact('blogs'));
    }

    public function blogCreate(){
        return view('admin.blogCreate');
    }

    public function blogStore(Request $request){
        $request->validate([
            'title' => ['required', 'string', 'max:255'],           
            'description' => ['required', 'string'],          
        ]);   
        $options = new Blog([
            'title' => $request['title'],
            'description' => $request['description'],
        ]);
        $options->save();
        return redirect('/admin_blog')->with('success', 'Successfully added');  
    }

    public function blogUpdate(Request $request){
        $options = Blog::find($request->get('id'));
        $options->title = $request->get('title');
        $options->description = $request->get('description');
        $options->save();
        return response()->json('success');
    }

    public function blogDelete($id){
        $options = Blog::find($id);
        if (!$options) {
            return back()->withErrors(['delete' => 'Something went wrong.']);
        }
        $options->delete();        
        return back()->with('success', 'Deleted Successfully');
    }

    public function vlogIndex(){
        $vlogs = Vlog::all();
        return view('admin.vlogIndex', compact('vlogs'));
    }

    public function vlogCreate(){
        return view('admin.vlogCreate');
    }

    public function vlogStore(Request $request){
        $link = time().'.'.$request->link->getClientOriginalExtension();  
        $request->link->move(public_path('assets/video/'), $link);
        $link = 'assets/video/'.$link;
        $request->validate([
            'title' => ['required', 'string', 'max:255'],                      
        ]); 
        $options = new Vlog([
            'title' => $request['title'],
            'link' => $link,           
        ]);
        
        $options->save();

        return redirect('/admin_vlog')->with('success', 'Successfully added');  
    }

    public function vlogUpdate(Request $request){
        $options = Vlog::find($request->get('id'));
        $options->title = $request->get('title');
        if($request->link != 'undefined'){
            unlink($options['link']);
            $link = time().'.'.$request->link->getClientOriginalExtension();  
            $request->link->move(public_path('assets/video/'), $link);
            $link = 'assets/video/'.$link;
            $options->link = $link;            
        }
        $options->save();
        return response()->json('success');
    }

    public function vlogDelete($id){
        $options = Vlog::find($id);
        if (!$options) {
            return back()->withErrors(['delete' => 'Something went wrong.']);
        }
        unlink($options['link']);
        $options->delete();        
        return back()->with('success', 'Deleted Successfully');
    }

    public function changepassword(){
        $userId = Auth::id();    
        $users = User::find($userId);
        return view('admin.changepassowrd', compact( 'users'));
    }

    public function resetpassword(Request $request){
        $userId = Auth::id();

        $request->validate([
            'old_password' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $options = User::find($userId);
        $password = Hash::make($request['password']);
        
        if(Hash::check($request['old_password'], $options->password)){      
            $options->password = Hash::make($request['password']);
            $options->save();

            $receiver_email = $options->email;

            $sender = User::find(1);
            $sender_email = $sender->email;     
            
            $emailFrom = $sender_email;
            $reply = $sender_email;
            $to = $receiver_email;
            $subject = "You Password Changed";
            
            $message = '<body >
                <div style="width:500px; margin:10px auto; background:#f1f1f1; border:1px solid #ccc">
                    <table  width="100%" border="0" cellspacing="5" cellpadding="10">
                        <tr>
                            <td style="font-size:14px; color:#323232">Name</td>
                        </tr>
                        <tr>
                            <td style="font-size:16px; font-weight:bold"><strong>' . $options->name .'</strong></td>
                        </tr>
                        <tr>
                            <td style="font-size:14px; color:#323232">Email :</td>
                        </tr>
                        <tr>
                            <td style="font-size:16px;  font-weight:bold"><strong>'. $options->email  .'</strong></td>
                        </tr>
                        <tr>
                            <td style="font-size:14px; color:#323232">New Password :</td>
                        </tr>
                        <tr>
                            <td style="font-size:16px;  font-weight:bold"><strong>'.$request['password'] .'</strong></td>
                        </tr>                                                        
                    </table>
                </div>
            </body>
            ';
            
            $headers = "From:" . $emailFrom . "\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
            
            mail($to,$subject,$message,$headers);

            return redirect()->back()->with('success', 'Successfully Changed');    
        }else{
           return redirect()->back()->withErrors(['old_password' => 'Old password is not matched.']);
        }
    }

}
