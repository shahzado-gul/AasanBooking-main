<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::orderBy('id', 'DESC')->get();
        return view("admin.customer.index", compact("customers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.customer.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'firstName' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone1' => 'required',
        ]);
        $imageName = "";
        $userImagePath = public_path('images/UserImage');
        if (!File::exists($userImagePath)) {
            File::makeDirectory($userImagePath);
        }
        if ($request->hasFile('profile_picture')) {
            $image = $request->file('profile_picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move($userImagePath, $imageName);
        }
        $customer = Customer::create([
            'first_name' => $request->firstName,
            'last_name' => $request->last_name,
            'phone' => $request->phone1,
            'phone2' => $request->phone2,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'photo' => $imageName,
        ]);

        User::create([
            'name' => $request->first_name . " " . $request->last_name,
            'username' => $request->firstName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'photo' => $imageName,
            'phone' => $request->phone1,
            'address' => $request->address,
            'role' => 'user',
        ]);

        return redirect('admin/customer')->with("success", "Customer Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        $bookings = $customer->bookings;
        return view("admin.customer.show", compact('customer', 'bookings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view("admin.customer.edit", compact('customer'));
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
        $customer = Customer::find($id);

        $user = User::where('email', $customer->email)->first();

        $userImagePath = public_path('images/UserImage');
        if (!File::exists($userImagePath)) {
            File::makeDirectory($userImagePath);
        }
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move($userImagePath, $imageName);
            $customer->photo = $imageName;
            $user->photo = $imageName;
        }

        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->phone = $request->phone;
        $customer->phone2 = $request->phone2;
        // $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->update();

        $user->name = $request->first_name . " " . $request->last_name;
        $user->username = $request->first_name;
        $user->password = $customer->password;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->role = 'user';
        $user->update();

        return redirect('admin/customer')->with("success", "Customer Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $customer = Customer::find($id);
        User::where(['email' => $customer->email])->delete();
        $customer->delete();
        return redirect('admin/customer')->with("success", "Customer Deleted Successfully");
    }
}
