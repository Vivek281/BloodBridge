<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //to show all the users
        $user = User::paginate(50);
        return view('controls.users.userView', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('controls.users.addUsers');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|confirmed|min:6 ',
                'phone' => 'required|digits:10', 
                'blood_group' => 'required|string|max:45',
                'location' => 'required|string',
                'role' => 'required|string|in:donor,recipient',
                'is_available' => 'required|boolean ',
            ]);

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'blood_group' => $request->blood_group,
                'location' => $request->location,
                'role' => $request->role,
                'is_available' => $request->is_available,
            ]);
            return redirect()->route('users.index')->with('success','New user created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('controls.users.editUsers', compact('user'));
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
    // Validate the incoming request data
    $validatedData = $request->validate([
        'name' => 'sometimes|string|max:255',
        'email' => 'sometimes|email|max:255|unique:users,email,' . $id,
        'password' => 'sometimes|confirmed|min:6',
        'phone' => 'sometimes|digits:10',
        'blood_group' => 'sometimes|string|max:45',
        'location' => 'sometimes|string',
        'role' => 'sometimes|string|in:donor,recipient',
        'is_available' => 'sometimes|boolean'
    ]);

    // Find the user
    $user = User::findOrFail($id);

    // Hash password if it's being updated
    if (isset($validatedData['password'])) {
        $validatedData['password'] = bcrypt($validatedData['password']);
    }

    // Update user
    $user->update($validatedData);

    return redirect()->route('users.index')->with('success', 'Data Updated');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('users.index')->with('success','Deleted!');
    }
}
