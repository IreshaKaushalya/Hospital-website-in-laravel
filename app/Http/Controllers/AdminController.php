<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;

use App\Models\News;

use Illuminate\Support\Facades\Auth;

use App\Models\Appointment;

use App\Models\prescription;

use App\Models\Pharmacy;

use Notification;

use App\Notifications\SendEmailNotification;

class AdminController extends Controller
{
  
  public function addview()
  {

    if(Auth::id())

    {
      if(Auth::user()->usertype==1)

      {

        return view('admin.add_doctor'); 

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



  public function upload(Request $request)
    {
      $doctor=new doctor;

      $image=$request->file;

      $imagename=time().'.'.$image->getClientoriginalExtension();

      $request->file->move('doctorimage',$imagename);

      $doctor->image=$imagename;

      $doctor->name=$request->name;


      $doctor->number=$request->number;

       $doctor->room=$request->room;

       $doctor->speciality=$request->speciality ;

       $doctor->save();

       return redirect()->back()->with('message','Doctor Added Successfully');

    }


    
  public function showappointment()
    {

    if(Auth::id())
      {
      
      if(Auth::user()->usertype==1)
      { 
       $data=appointment::all();

        return view('admin.showappointment',compact('data'));
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


  public function approved($id)
    {
      $data=appointment::find($id);

      $data->status='approved';

      $data->save();

      return redirect()->back();
    }


    

  public function canceled($id)
    {
      $data=appointment::find($id);

      $data->status='canceled';

      $data->save();

      return redirect()->back();
    }






    public function showdoctor()
    {
    
     $data = doctor::all();

    return view('admin.showdoctor',compact('data'));
    }




    public function deletedoctor($id)
    {

      $data=doctor::find($id);

      $data->delete();

      return redirect()->back();

    }



    public function updatedoctor($id)
    {
      $data=doctor::find($id);

      return view('admin.update_doctor',compact('data'));

    }



    public function editdoctor(Request $request,$id)
    {
      $doctor = doctor::find($id);

      $doctor->name=$request->name;

      $doctor->number=$request->number;

      $doctor->speciality=$request->speciality;

      $doctor->room=$request->room;


      $image=$request->file;

      if($image)
      {

      $imagename=time().'.'.$image->getClientoriginalExtension();

      $request->file->move('doctorimage',$imagename);

      $doctor->image=$imagename;

      }

      $doctor->save();

      return redirect()->back()->with('message','Doctor Details Updated Successfully');
    }








    public function emailview($id)
    {

      $data=appointment::find($id);
      return view('admin.email_view',compact('data'));
    }




    public function sendemail(Request $request,$id)
    {

      $data = appointment::find($id);

      $details=[

        'greeting' =>$request->greeting,

        'body' => $request->body,

        'actiontext' => $request->actiontext,

        'actionurl' => $request->actionurl,

        'endpart' => $request->endpart


      ];

      Notification::send($data,new SendEmailNotification($details));

      return redirect()->back()->with('message',' Email Send is Successfully..');

    }









     public function addnews()
     {

      return view('admin.add_news');
     }





     public function upload1(Request $request)
     {

      $news = new news;

      $Himage=$request->Hfile;

       $imagename=time().'.'.$Himage->getClientoriginalExtension();

      $request->Hfile->move('newsimage',$imagename);

      $news->Himage=$imagename;


      $Aimage=$request->file;
       $Aimagename=time().'.'.$Aimage->getClientoriginalExtension();
       $request->file->move('Anewsimage',$imagename);
       $news->Aimage=$imagename;


      $news->category=$request->category;

      $news->title=$request->title;

      $news->adder=$request->adder;

      $news->date=$request->date ;

      $news->save();

       return redirect()->back()->with('message','News  Updated Successfully');
     }





     public function shownews()
     {

    $Ndata = news::all();

    return view('admin.shownews',compact('Ndata'));
    }




       
  
   public function deletenews($id)
        {
        $Ndata = news::find($id); 

         $Ndata->delete();

      return redirect()->back();

        }






 public function updatenews($id)
    {
      $Ndata=news::find($id);

      return view('admin.update_news',compact('Ndata'));

    }






  public function editnews(Request $request,$id)
    {
       $news = news::find($id); 

      $news->category=$request->category;

      $news->title=$request->title;

      $news->adder=$request->adder;

      $news->date=$request->date ;

      $Himage=$request->Hfile;

       $Aimage=$request->file;

    if($Himage)
    {
      $imagename=time().'.'.$Himage->getClientoriginalExtension();   
      $request->Hfile->move('newsimage',$imagename);
      $news->Himage=$imagename;
    }
    elseif ($Aimage) {

       $Aimagename=time().'.'.$Aimage->getClientoriginalExtension();
       $request->file->move('Anewsimage',$Aimagename);
       $news->Aimage=$Aimagename;
      
    }    
      
      $news->save();

      return redirect()->back()->with('message','News Details Updated Successfully');
    }







 public function addprescription()
    {

     return view('admin.add_prescription');
    }






  public function uploadPrescription(Request $request)
    {
      $prescription = new prescription;

      // Get today's date
      $today = date('Y-m-d'); // Format: YYYY-MM-DD

      // Validate the input date
      if ($request->date !== $today) {
          return redirect()->back()->with('error', 'This date cannot be added. It is not today\'s date.');
    }

      // Set the date to today's date
      $prescription->date = $today;

      // Other fields (nic, name, age, disease, medicine)
      $prescription->nic = $request->nic;
      $prescription->name = $request->name;
      $prescription->Age = $request->Age;
      $prescription->disease = $request->disease;
      $prescription->medicine = $request->medicine;

      $prescription->save();

      return redirect()->back()->with('message', 'News Details Updated Successfully');

    }






  public function showPrescription()
    {

      $data=prescription::all();

      return view('admin.showPrescription',compact('data'));
    }






   public function updatePrescription($id)
    {
      $data=prescription::find($id);

      return view('admin.update_prescription',compact('data'));

    }





     public function editprescription(Request $request,$id)
      {
        $prescription = prescription::find($id);

        $prescription->date=$request->date;

        $prescription->nic=$request->nic;

        $prescription->name=$request->name;

        $prescription->Age=$request->Age;

        $prescription->disease=$request->disease;

        $prescription->medicine=$request->medicine;

      
      $prescription->save();

      return redirect()->back()->with('message', ' Details Updated Successfully');

      }







      public function addpharmacy()
      {

        return view('admin.add_pharmacy');
      }





       public function uploadPharmacy(Request $request)
        {

           $pharmacy=new pharmacy;

          $image=$request->file;

          $imagename=time().'.'.$image->getClientoriginalExtension();

          $request->file->move('pharmacyimage',$imagename);

          $pharmacy->image=$imagename;

          $pharmacy->name=$request->name;


          $pharmacy->phone=$request->phone;      

           $pharmacy->address=$request->address ;

           $pharmacy->save();

           return redirect()->back()->with('message','pharmacy Added Successfully');

        }




    public function showpharmacy()
      {
        $data = pharmacy::all();
        return view('admin.showpharmacy',compact('data'));
      }




    public function deletePharmacy($id)
      {
         $data = pharmacy::find($id);

          $data->delete();

          return redirect()->back();

      }




   public function updatePharmacy($id)
    {
      $data=pharmacy::find($id);

      return view('admin.update_pharmacy',compact('data'));

    }


    

    public function editPharmacy(Request $request,$id)
    {
      $pharmacy = pharmacy::find($id);

      $pharmacy->name=$request->name;

      $pharmacy->phone=$request->phone;

      $pharmacy->address=$request->address;
    
      $image=$request->file;

      if($image)
      {

      $imagename=time().'.'.$image->getClientoriginalExtension();

      $request->file->move('pharmacyimage',$imagename);

      $pharmacy->image=$imagename;

      }

      $pharmacy->save();

      return redirect()->back()->with('message','Doctor Details Updated Successfully');
    }




}




  

