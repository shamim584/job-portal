<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\JobType;
use App\Models\Job;
use App\Models\JobApply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class JWTController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth:api', ['except' => ['login', 'register', 'job-list']]);
    }

    /**
     * Register user.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
       
        $user = User::create([
                'name' => $request->name,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'is_admin' => '0',                
                'password' => Hash::make($request->password)
            ]);

        return response()->json([
            'message' => 'User successfully registered',
            'user' => $user
        ], 201);
    }

    /**
     * login user
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $user = User::where('phone_number', $request->phone_number)->first();

        if($user !=''){
            return response()->json([
                'message' => 'User successfully login',
                'user' => $user
            ], 201);
        }else{
            return response()->json(['error' => 'Unauthorized'], 401);
        }

    }

    public function jobList(){
        
        $job_list = Job::join('job_types', 'job_types.id', 'jobs.job_types_id')
            ->where('status', '1')
            ->select('jobs.id', 'jobs.tilte as job_title', 'job_types.tilte as job_type', 'jobs.thumbnail',)
            ->get();

        if($job_list !=''){
            return response()->json([
                $job_list
            ], 201);
        }else{
            return response()->json(['error' => 'Something is wrong'], 401);
        }


    }

    public function singleJob(Request $request){
        
        $job_details = Job::join('job_types', 'job_types.id', 'jobs.job_types_id')
            ->where('jobs.id', $request->id)
            ->where('jobs.status', '1')
            ->select('jobs.id', 'jobs.tilte as job_title', 'job_types.tilte as job_type', 'jobs.thumbnail', 'jobs.description')
            ->get();

        if($job_details !=''){
            return response()->json([
                $job_details
            ], 201);
        }else{
            return response()->json(['error' => 'Something is wrong'], 401);
        }

    }

    public function apply(Request $request){

        $user = User::where('phone_number', $request->phone_number)->first();

        if($user !=''){

            $apply = JobApply::create([
                'user_id' => $user->id,
                'job_id' => $request->job_id                
            ]);

            return response()->json([
                'message' => 'Successfully Apply for this job'
            ], 201);

        }else{
            
            return response()->json([
                'message' => 'Your are not our registered user!!'
            ], 201);
        }

    }

    

    /**
     * Get user profile.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function profile()
    {
        return response()->json(auth()->user());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}