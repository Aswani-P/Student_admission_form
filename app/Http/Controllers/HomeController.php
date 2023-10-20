<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Mark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function showDetails(){
        $details = Detail::all();

        return view('viewDetails',compact('details'));
    }

    public function store(Request $request){


       

        $request ->validate([
            'image'=>'required',
            'name'=>'required',
            'gender'=>'required',
            'date'=>'required',
            'caste'=>'required',
            'nationality'=>'required',
            'parent'=>'required',
            'address'=>'required',
            'phone'=>'required|unique:details,conatct',
            'email'=>'required|unique:details,email',
            'exm'=>'required',
            'yearofpassing'=>'required',
            'insti'=>'required',
            'state'=>'required',
            'register'=>'required',
            'certificate'=>'required|mimes:pdf',
            'adhar'=>'required|mimes:pdf'

        ]);



        $name =request('name');
        $gender = request('gender');
        $dob = request('date');
        $caste = request('caste');
        $nation = request('nationality');
        $parent = request('parent');
        $address = request('address');
        $contact = request('phone');
        $email = request('email');
        $exm = request('exm');
        $pass = request('yearofpassing');
        $insti =request('insti');
        $state = request('state');
        $register = request('register');
        $photo = request('image');
        $certificate = request('certificate');
        $adhar = request('adhar');


        $image = request('image');
        if(request()->hasFile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $imageFileName = time().'.'.$extention;
           
            request('image')->storeAs('public/images',$imageFileName);
            
        }

        if(request()->hasFile('certificate')){
            $file = $request->file('certificate');
            $extention = $file->getClientOriginalExtension();
            $certificateFileName = time().'.'.$extention;
            request('certificate')->storeAs('public/certificates',$certificateFileName);
           
        }
        if(request()->hasFile('adhar')){
            $file = $request->file('adhar');
            $extention = $file->getClientOriginalExtension();
            $aadharFileName = time().'.'.$extention;
            request('adhar')->storeAs('public/documents',$aadharFileName);
            
        }

        $details= Detail::create([
                'name'=>$name ,
                'gender'=>$gender,
                'dob'=> $dob ,
                'nationality'=>$nation,
                'parent'=> $parent,
                'address'=>$address,
                'conatct'=>$contact,
                'email'=>$email,
                'examination'=>$exm,
                'register'=>$register,
                'yearofpassing'=> $pass,
                'institution'=>$insti,
                'state'=> $state,
                'photo'=> $imageFileName,
                'certificate'=>$certificateFileName,
                'adhar'=>$aadharFileName,
                'caste'=> $caste

        ]);

        $chem_sec = request('tab1');
        $chem_max = request('tab2');
        $chem_pre=  request('tab3');
        $bio_sec = request('tab4');
        $bio_max = request('tab5');
        $bio_per =request('tab6');
        $eng_sec = request('tab7');
        $eng_max = request('tab8');
        $eng_per = request('tab9');
        $phy_sec = request('tab10');
        $phy_max= request('tab11');
        $phy_per = request('tab12');
        $tot_sec = request('tab13');
        $tot_max = request('tab14');
        $tot_per = request('tab15');
        $grd_sec = request('tab16');
        $grd_max = request('tab17');
        $grd_per = request('tab18');
        // return $grd_per;

        Mark::create([

            'chemestry_sec'=> $chem_sec,
            'chemestry_max'=>$chem_max ,
            'chemestry_per'=>$chem_pre,
            'physics_sec'=>$phy_sec,
            'physics_max'=>$phy_max,
            'physics_per'=>$phy_per,
            'biology_sec'=>$bio_sec,
            'biology_max'=> $bio_max,
            'biology_per'=>$bio_per,
            'english_sec'=>$eng_sec,
            'english_max'=> $eng_max,
            'english_per'=> $eng_per,
            'total_sec'=> $tot_sec,
            'tatal_max'=>$tot_max ,
            'total_per'=> $tot_per,
            'grand_sec'=> $grd_sec,
            'grand_max'=> $grd_max, 
            'details_id'=>$details->id,
            'grand_per'=> '23'

        ]);
       

        return redirect()->route('view');   
    }

    public function viewAllDetails($id){
        $result = Detail::where('details.id',$id)
            ->leftJoin('marks', 'details.id', '=', 'marks.details_id')
            ->select('details.*', 'marks.*')
            ->first();
 
        return view('viewAll', compact('result'));
       
    }






   
   
}
