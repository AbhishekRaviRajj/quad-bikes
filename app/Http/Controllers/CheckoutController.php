<?php

namespace App\Http\Controllers;

use App\Handlers\Error;
use App\Models\EmailOtp;
use App\Models\User;
use Godruoyi\Snowflake\Snowflake;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller{
    
    const ControllerCode = "CK_";
    
    public $outputData = [];

    public function index(){
        $carts = \Cart::getContent();
        $total = \Cart::getTotal();
        $subTotal = \Cart::getSubTotal();
        $this->outputData = [
            'carts' => $carts,
            'subTotal' => $subTotal,
            'total' => $total
        ];
        return view('front.pages.checkout.index',$this->outputData);
    }

    public function checkUser(Request $request){
        try{
            $validator = Validator::make($request->all(), [
                'first_name' => 'required|string|regex:/^[a-zA-Z_\- ]*$/|min:3|max:50',
                'last_name' => 'required|string|regex:/^[a-zA-Z_\- ]*$/|min:3|max:50',
                'email' => 'required|max:100|email:rfc,dns',
                'mobile' => 'required|string|min:10|max:12'
            ]);

            if($validator->fails()){
                throw new \Exception($validator->errors()->first());
            }
            
            $validated = $validator->validated();

            $user = User::where('email',$validated['email'])->first();
            if(!$user){
                $data = [
                    'random_id' => (new Snowflake())->id(),
                    'first_name' => $validated['first_name'],
                    'last_name' => $validated['last_name'],
                    'email' => $validated['email'],
                    'mobile' =>  $validated['mobile']
                ];
                $user = User::create($data);
            }

            $otp = random_int(100000,999999);

            EmailOtp::create([
                'email' => $validated['email'],
                'otp' => $otp
            ]);

            return response()->json(['success' => 'OTP send to your email']);
        } catch (\Throwable $e) {
            return Error::Handle($e, self::ControllerCode);
        }
    }

    public function verify(Request $request){
        try{
            $validator = Validator::make($request->all(), [
                'email' => 'required|max:100|email:rfc,dns',
                'otp' => 'required|string|min:6|max:6'
            ]);

            if($validator->fails()){
                throw new \Exception($validator->errors()->first());
            }
            
            $validated = $validator->validated();

            $emailOtp = EmailOtp::where('email',$validated['email'])->where('otp',$validated['otp'])->where('status',0)->first();
            if($emailOtp){
                $emailOtp->update([
                    'status' => 1
                ]);

                $user = User::where('email',$validated['email'])->first();

                Auth::loginUsingId($user->id);

                return response()->json(true);
            }

            return response()->json(['error' => 'Invalid OTP, Please try again!']);
        } catch (\Throwable $e) {
            return Error::Handle($e, self::ControllerCode);
        }
    }
}
