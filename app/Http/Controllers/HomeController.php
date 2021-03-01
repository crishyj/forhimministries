<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;
use App\Models\Salvation;
use App\Models\Prayer;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
   
    public function index()
    {
        return view('home');
    }

    public function salvation(){
        return view('salvation.index');
    }

    public function salvation_store(Request $request){           
        $request->validate([
            'First_Name' => ['required', 'string', 'max:20'],           
            'Last_Name' => ['required', 'string', 'max:20'],
            'email' => 'required|confirmed',
        ]);       

        $url = URL::to("/");

        if (Salvation::where('email', '=', $request->get('email'))->exists()) {
            echo "
            <script>
                alert('This email has already been used. Please enter a different email.');
                window.history.back(-1);
            </script>";
        }
        else{
        
            $_sfm_form_submision_time_ = date("Y-m-d").' '.date("h:i:s");
            $clientIP = request()->ip();
    
            $to = $request['email'];
            $sender_email = "no-reply-salvation@forhimministries.org";
            $subject = "Salvation";
                
            $message = '<body >
                <div style="width:500px; margin:10px auto; background:#f1f1f1; border:1px solid #ccc">
                    <table  width="100%" border="0" cellspacing="5" cellpadding="10">
                        <tr>
                            <td style="text-align:center">
                                <img src = "'.$url.'/assets/img/header/Email_Header.png" width="465px" height="100px">
                            </td>
                        </tr>
                        <tr>                               
                            <td>'.$_sfm_form_submision_time_.'</td>
                        </tr>
                        <tr>
                            <td style="font-size:14px; color:#323232"> Dear ' .  $request['First_Name'] .' '.$request['Last_Name'].',</td>
                        </tr>
                        <tr>
                            <td style="font-size:14px; color:#323232">
                                Save this date above. It is the day you gave your life to Jesus Christ. You have an exciting journey ahead of you.
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:14px; color:#323232">
                                Attached is your free book "First Things First; What Every Christian Should Know". We hope that it blesses your heart.
                            </td>
                        </tr>
    
                        <tr>
                            <td style="font-size:14px; color:#323232">
                            In His Hands,
                            </td>
                        </tr>
                    
                        <tr>
                            <td style="font-size:14px; color:#323232">
                                Pastor Steven Morgan
                                <br>
                                For Him Ministries
                                <br>
                                <a href="'.$url.'">  ForHimMinistries.org</a>
                            </td>
                        </tr>                           
                        
                        <tr>
                            <td>
                            </td>
                        </tr>
                            
                        <tr>
                            <td style="font-size:14px; color:#323232">
                            Attachement: <a href="'.$url.'/assets/pdf/FirstThingsFirst.pdf">  FirstThingsFirst.pdf </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </body>
            ';
        
            $headers = "From:" . $sender_email . "\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
        
            mail($to,$subject,$message,$headers);

            $to1 = "CustomerCare@ForHimMinistries.org";
            $message1 = '<body >
                <div style="width:500px; margin:10px auto; background:#f1f1f1; border:1px solid #ccc">
                    <table  width="100%" border="0" cellspacing="5" cellpadding="10">
                        <tr>
                            <td>'.$_sfm_form_submision_time_.'</td>
                        </tr>
                        <tr>
                            <td style="font-size:14px; color:#323232"> 
                                '. $request['First_Name'] .' '.$request['Last_Name'].' <br>at '.$to.' has <br> completed the salvation form.
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:14px; color:#323232">
                            For Him Ministries Website
                            </td>
                        </tr>
                    </table>
                </div>
            </body>
            ';

            $headers = "From:" . $sender_email . "\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
            
            mail($to1,$subject,$message1,$headers);
    
            $options = new Salvation([
                'FirstName' => $request['First_Name'],
                'LastName' => $request['Last_Name'],
                'Email' => $request['email'],
                'visitor_ip' => $clientIP,
            ]);
        
            $options->save();

            return redirect('/salvation_completed');  
        }   
    }

    public function salvation_completed(){
        return view('salvation.completed');
    }

    public function prayer(){
        return view('prayer.index');
    }

    public function prayer_store(Request $request){
        $request->validate([
            'FirstName' => 'required|string|max:20',           
            'LastName' => 'required|string|max:20',
            'email' => 'required',
            'prayer_request' => 'required|string|max:500',
        ]);     

        $_sfm_form_submision_time_ = date("Y-m-d").' '.date("h:i:s");
        $clientIP = request()->ip();
        
        $url = URL::to("/");

        $to = $request['email'];
        $sender_email = "no-reply-prayer@forhimministries.org";
        $subject = "Prayer";

        $message = '<body >
                    <div style="width:500px; margin:10px auto; background:#f1f1f1; border:1px solid #ccc">
                        <table  width="100%" border="0" cellspacing="5" cellpadding="10">
                            <tr>
                                <td style="text-align:center">
                                    <img src = "'.$url.'/assets/img/header/Email_Header.png" width="465px" height="100px">
                                </td>
                            </tr>

                            <tr>                               
                                <td>'.$_sfm_form_submision_time_.'</td>
                            </tr>

                            <tr>
                                <td style="font-size:14px; color:#323232"> Dear ' .  $request['FirstName'] .' '.$request['LastName'].',</td>
                            </tr>

                            <tr>
                                <td style="font-size:14px; color:#323232">
                                    We count it an honor that you would allow us to pray for your concerns.
                                </td>
                            </tr>

                            <tr>
                                <td style="font-size:14px; color:#323232">
                                    All times, we get a word from the Lord concerning a prayer request.
                                    <br>
                                    If that should happen, we will notify you via your email address.
                                </td>
                            </tr>

                            <tr>
                                <td style="font-size:14px; color:#323232">
                                    Below is your Prayer Request:
                                </td>
                            </tr>
                            
                            <tr>
                                <td style="font-size:14px; color:#323232">
                                    '. $request['prayer_request'] .'
                                </td>
                            </tr>

                            <tr>
                                <td style="font-size:14px; color:#323232">
                                In His Hands,
                                </td>
                            </tr>
                        
                            <tr>
                                <td style="font-size:14px; color:#323232">
                                    Pastor Steven Morgan
                                    <br>
                                    For Him Ministries
                                    <br>
                                    <a href="'.$url.'">  ForHimMinistries.org</a>
                                </td>
                            </tr>                                                          
                            
                        </table>
                    </div>
                </body>
            ';
                
        $headers = "From:" . $sender_email . "\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
        
        mail($to,$subject,$message,$headers);

        $to1 = "CustomerCare@ForHimMinistries.org";
        $message1 = '<body >
                <div style="width:500px; margin:10px auto; background:#f1f1f1; border:1px solid #ccc">
                    <table  width="100%" border="0" cellspacing="5" cellpadding="10">
                        <tr>
                            <td>'.$_sfm_form_submision_time_.'</td>
                        </tr>

                        <tr>
                            <td style="font-size:14px; color:#323232"> 
                                '. $request['FirstName'] .' '.$request['LastName'].' <br>at '.$to.' has <br> completed a Prayer Request.
                            </td>
                        </tr>

                        <tr>
                            <td style="font-size:14px; color:#323232">
                                The following is their prayer request:
                            </td>
                        </tr>

                        <tr>
                            <td style="font-size:14px; color:#323232">
                                '. $request['prayer_request']. '
                            </td>
                        </tr>

                        <tr>
                            <td style="font-size:14px; color:#323232">
                                Please pass this on to the prayer group.
                            </td>
                        </tr>

                        <tr>
                            <td style="font-size:14px; color:#323232">
                            In His Hands,
                            </td>
                        </tr>
                    
                        <tr>
                            <td style="font-size:14px; color:#323232">
                                Pastor Steven Morgan
                                <br>
                                For Him Ministries
                                <br>
                                <a href="'.$url.'">  ForHimMinistries.org</a>
                            </td>
                        </tr>         

                    </table>
                </div>
            </body>
        ';

        $headers = "From:" . $sender_email . "\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
        
        mail($to1,$subject,$message1,$headers);

        $options = new Prayer([
            'visitor_ip' => $clientIP,
            'FirstName' => $request['FirstName'],
            'LastName' => $request['LastName'],
            'Email' => $request['email'],           
            'PrayerRequest' => $request['prayer_request'],
        ]);
    
        $options->save();

        return redirect('/prayer_completed');  
    }

    public function prayer_completed(){
        return view('prayer.completed');
    }
    

    public function about_vision(){
        return view('about_vision');
    }

    public function pastor_steve(){
        return view('pastor_steve');
    }

    public function pending(){
        return view('pending');
    }
}
