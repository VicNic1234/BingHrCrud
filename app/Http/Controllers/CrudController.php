<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Auth, Validator, File, Storage, Log, Session, Exception;


class CrudController extends Controller
{
    public function index(){

        $users = User::all();
       //dd($users);
        $data = [
            'users' => $users,
           // 'page' => 'list-users'
        ];

        return view('Admin.index',$data);
    }

    public function addUser(Request $request){
        //dd($request->all());
        // return Validator::make($data, [
        //     'first_name' => 'required|max:255',
        //     'last_name' => 'required|max:255',
        //     'email' => 'required|email|max:255|unique:users',
        //     'password' => 'required|confirmed|min:6',

        // ]);
        try {
            
            $user = new User;
            $user->employe_id = $request->employe_id;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->mobile_no = $request->mobile_no;
            $user->role_type = $request->role_type;
            $user->username = $request->username;
            $user->password = bcrypt($request->password);
            $user->save();
            //$this->userPermission($user);
            // return $user;//code...

            if($user){
                Session::put('successMessage', 'Users Created successfully');
                return redirect()->back();   
            }else{
                Session::put('errorMessage', 'Oppes! Unable to Create User');
                return redirect()->back(); 
            }
        }catch (Exception $error) {
            Log::info('CrudController@addUser error message: ' . $error->getMessage());
            $message = 'Unable to Create user. Encountered an error.';
            
            Session::put('errorMessage', $message);
            return redirect()->back();   
        }
        
    }

    public function userPermission($user){
        // $workspace = new WorkSpaceModel;
        // $workspace->name = $user->full_name;
        // $workspace->user_id = $user->id;
        // $workspace->slug = $user->role;
        // $workspace->is_default = true;
        // $workspace->save();

    }

    public function deleteUser(Request $request){
       
        try {

            $deleted=User::where('id',$request->id)->delete();

            if($deleted){
                Session::put('errorMessage', 'Users Deleted');
                return redirect()->back();   
            }else{
                Session::put('errorMessage', 'Oppes! Unable to delete User');
                return redirect()->back(); 
            }
        } catch (Exception $error) {
            Log::info('CrudController@deleteUser error message: ' . $error->getMessage());
            $message = 'Unable to Delete user. Encountered an error.';
            
            Session::put('errorMessage', $message);
            return redirect()->back(); 
        }
        
    }
}
