<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Doctor;

use App\Models\Contact;

use App\Models\Appointment;

use App\Models\prescription;

use App\Models\News;

use App\Models\Pharmacy;

class HomeController extends Controller
{
      public function redirect()
    {

        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $doctor = doctor::all();

                return view('user.home',compact('doctor'));
            }
            else
            {
                return view('admin.home');
            }

        }
        else
        {
            return redirect()->back();
        }
    }
    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {
            $doctor = doctor::all();

            return view('user.home',compact('doctor'));
        }
    }

    
public function appointment(Request $request)
{
    // Check if the user is authenticated
    if (!Auth::check()) {
        return redirect()->route('login'); // Redirect to the login page
    }

    // Create a new appointment
    $data = new Appointment;

    // Set appointment details
    $data->name = $request->name;
    $data->nic = $request->nic;
    $data->email = $request->email;
    $data->date = $request->date;
    $data->phone = $request->number;
    $data->doctor = $request->doctor;
    $data->message = $request->message;
    $data->status = 'In progress';

    // Associate the appointment with the logged-in user
    $data->user_id = Auth::user()->id;

    // Save the appointment
    $data->save();

    return redirect()->back()->with('message', 'Appointment Request Successful. We will contact you soon.');
}


   public function myappointment()
   {

        if(Auth::id())
        { 
            if(Auth::user()->usertype==0)
            {

            $userid=Auth::user()->id;

        $appoint=appointment::where('user_id',$userid)->get();

         return view('user.my_appointment',compact('appoint'));   

            }
            else
            {
                return redirect()->back();
            }

        }
         else
          {

            return redirect('login');
          }
           
   }




  public function mypriscription()
   {

        if(Auth::id())
        { 
            if(Auth::user()->usertype==0)
            {

            $userid=Auth::user()->nic;

            $prescription=prescription::where('nic',$userid)->get();

            return view('user.my_prescription',compact('prescription'));   

            }
            else
            {
                return redirect()->back();
            }

        }
         else
          {

            return redirect('login');
          }
           
   }





      public function cancel_appoint($id)
      {
        $data=appointment::find($id);

        $data->delete();

        return redirect()->back();
      }




      public function index1()
      {
        $pharmacy = pharmacy::all();

            return view('user.about',compact('pharmacy'));
        
      }
      



 public function doctor_details()
      {
        $doctor = doctor::all();

            return view('user.doctor_details',compact('doctor'));
        
      }

      
 public function news_details()
 {
    $news_details = news::all();

            return view('user.news_details',compact('news_details'));
   
 }

     public function index3()
      {
        if(Auth::id())
        {
            $news = news::all();

            return view('user.news',compact('news'));
        }
        else
        {
             $news = news::all();

            return view('user.news',compact('news'));   
        }
      }


    public function prescription()
    {
        $prescription = prescription::all();

        return view('user.prescription',compact('prescription'));

    }


    public function contact(Request $request)
{
    $data = new Contact;

    $data->name = $request->name;
    $data->email = $request->email;
    $data->subject = $request->subject;
    $data->message = $request->message;

    $data->save();

 
        return view('user.contact')->with('message','contact Successfull ... we contact you soon..');

    }
    
   

      
}
  