<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Userbank;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class ValidationController extends Controller
{
    public function checkUserNameAvailability(Request $request): JsonResponse
    {
        $username = $request->input('user_name');

        $checkUser = User::where('username', $username)->first();

        return response()->json($checkUser ? false : true);
    }

    public function checkExistingEmail(Request $request): JsonResponse
    {
        $email = $request->input('email');

        $checkUser = User::where('email', $email)->first();

        return response()->json($checkUser ? false : true);
    }

    public function checkExistingMobile(Request $request): JsonResponse
    {
        $mobileno = $request->input('mobileno');

        $checkUser = User::where('phone', $mobileno)->first();

        return response()->json($checkUser ? false : true);
    }

    public function checkAccNo(Request $request): JsonResponse
    {
        $acc_no = $request->input('acc_no');

        $checkUser = Userbank::where('account_number', $acc_no)->first();

        return response()->json($checkUser ? false : true);
    }

    public function check_register_captcha(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'registerCaptchaimg' => 'required|captcha'
        ]);

        return response()->json($validator->fails() ? 'refreshCaptcha' : true);
    }
}
