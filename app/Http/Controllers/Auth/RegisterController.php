<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\District; // Tambahkan ini
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        $districts = District::all(); // Ambil semua data distrik
        return view('register_client', compact('districts')); // Kirimkan data distrik ke view
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:users',
            'phone_number' => 'required|integer|digits_between:10,12',
            'address' => 'required|string|max:255',
            'district_id' => 'required|integer|exists:districts,id',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            foreach ($errors as $error) {
                Alert::toast($error, 'error')->autoClose(5000);
            }
            return redirect()->back()->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'district_id' => $request->district_id,
            'password' => Hash::make($request->password),
        ]);

        Alert::toast('Registration Successful', 'success')->autoClose(5000);
        Auth::login($user);

        return redirect()->route('beranda.index');
    }
}
