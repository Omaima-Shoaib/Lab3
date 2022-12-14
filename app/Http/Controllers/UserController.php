<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(15);
       
        // return view('users.index',['users' =>$users]);
        foreach ($users as $user){
        // return $user->name;
        return view('users.index',['users'=>$users]);
    }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//         $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),
//         true);
      
//     // dd( $request -> all());
  
// array_push($users,['id'=>$request['id'],'name'=>$request['name'],'email'=>$request['email'],'email_verified_at'=>"2022-08-06 21:47:32"]);

$users = User::paginate(15);
User::create(['id'=>$request['id'],'name'=>$request['name'],'email'=>$request['email']]);
return redirect()->route('users.index');

}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        $users = User::paginate(15)->where('id','=',$id);
       
        // return view('users.index',['users' =>$users]);
        foreach ($users as $user){
        // return $user->name;
        return view('users.show',['users'=>$users]);
    

        
    }}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::paginate(15)->where('id','=',$id);
        return view('users.edit',['id'=>$id]);

    

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        User::where('id',$id)->update(
           ['id'=>$request['id'],'name'=>$request['name'],'email'=>$request['email']]
        );
return redirect()->route('users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    { 

        // User::where('id','=',$id)->delete();
       $id = User::find($id);
       $id->delete();
    //    User::withTrashed()->where('id',$id)->get();
        // User::withTrashed()->where('id',$id)->get;    
        return redirect()->route('users.index');
    }
}
