<?php
namespace jazmy\FormBuilder\Controllers;   

namespace App\Http\Controllers;

use jazmy\FormBuilder\Models\Submission;
use Illuminate\Http\Request;

class VerifierController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $submissions = Submission::orderBy('id', 'desc')->paginate(10);

        

        return view('verifier.index')->with('submissions', $submissions);
        
    }
}
