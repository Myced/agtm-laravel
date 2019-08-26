<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Models\UserData;
use App\Models\UserAccountType;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
            'company_name' => ['required'],
            'year_created' => ['required'],
            'position' => ['required'],
            'company_address' => ['required'],
            'tel_numbers' => ['required'],
            'fax' => ['required'],
            'company_name' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        //create the user Data
        $userData = new UserData;

        $userCode = $this->createUserCode();

        if(!empty($data['profile']))
        {
            $avatar = $this->uploadAvatar($data['profile']);
        }
        else {
            $avatar = User::DEFAULT_AVATAR;
        }

        $user = User::create([
            'code' => $userCode,
            'avatar' => $avatar,
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $userData->user_id = $user->id;
        $userData->name = $data['name'];
        $userData->prefix = $data['prefix'];
        $userData->country_id = $data['country'];
        $userData->company_name = $data['company_name'];
        $userData->year_created = $data['year_created'];
        $userData->position = $data['position'];
        $userData->company_address = $data['company_address'];
        $userData->tel_numbers = $data['tel_numbers'];
        $userData->fax = $data['fax'];
        $userData->email = $data['email'];

        $userData->save();

        //now save the user account types.
        if(isset($data['account_type']))
        {
            foreach ($data['account_type'] as $type)
            {
                $accType = new UserAccountType;

                $accType->user_id = $user->id;
                $accType->account_type_id = $type;

                $accType->save();
            }
        }

        session()->flash('success', 'User Registered');

        return $user;
    }

    private function createUserCode()
    {
        $user = User::latest()->first();
        $id = $user->id;

        $prefix = 'AGT-' . date("ym") . 'U';

        $idd = $id + 1;

        if($idd < 10)
            $value = '000' . $idd;
        elseif($idd < 100)
            $value = '00' . $idd;
        elseif($idd < 1000)
            $value = '0' . $idd;
        else
            $value = $idd;

        return $prefix . $value;
    }

    private function uploadAvatar($file)
    {
        $name = time() . $file->getClientOriginalName();
        $path = User::AVATAR_PATH;

        $file->move($path, $name);

        return '/' . $path . $name;
    }

}
