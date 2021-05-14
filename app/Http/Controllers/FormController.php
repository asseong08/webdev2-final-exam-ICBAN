<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BS;

class FormController extends Controller
{
    public function requests (Request $request) {

        $tbs = BS::all();
        return view ('/requests', compact ('tbs'));
       }
    
       public function bssessions (Request $request) {
    
        $tbs = new BS();
        return view ('/bssessions', compact ('tbs'));
       }
       public function createform (Request $request) {
    
        $tbs = new BS();
        $tbs->name = $request-> name;
        $tbs->email = $request-> email;
        $tbs->contact = $request-> contact;
        $tbs->birthdate = $request-> birthdate;
        $tbs->religious_affiliation = $request-> religious_affiliation;
        $tbs->bible_study_date = $request-> bible_study_date;
        $tbs->bible_study_time= $request-> bible_study_time;
        $tbs->bible_study_location = $request-> bible_study_location;
        
       if ($tbs->save()) {
            return redirect ('/thank-you');
       }
            return redirect ('/thank-you');
       }
    
       public function thankyou (Request $request) {
    
        $tbs = new BS();
        return view ('/thankyou');
       }
    
}
