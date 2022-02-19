<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Job;
use App\Models\JobType;
use App\Models\JobApply;
use Auth;
use DB;

class ApplicantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $data['applicant'] = JobApply::join('users', 'users.id', 'job_applies.user_id')
            ->join('jobs', 'jobs.id', 'job_applies.job_id')            
            ->join('job_types', 'job_types.id', 'jobs.job_types_id')
            ->select('job_applies.*', 'users.name', 'users.phone_number', 'jobs.tilte', 'job_types.tilte as job_type')
            ->get();
        return view('applicant.index',$data);

    }

    public function show($id){

        $data['single'] = JobApply::join('users', 'users.id', 'job_applies.user_id')
            ->join('jobs', 'jobs.id', 'job_applies.job_id')            
            ->join('job_types', 'job_types.id', 'jobs.job_types_id')
            ->select('job_applies.*', 'users.name', 'users.phone_number', 'users.email', 'jobs.tilte', 'jobs.description', 'jobs.thumbnail', 'job_types.tilte as job_type')
            ->where('job_applies.id', $id)
            ->first();
        return view('applicant.show',$data);
    }
}
