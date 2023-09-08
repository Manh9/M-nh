<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Service\User\UserServiceInterface;
use App\Service\Order\OrderServiceInterface;
use App\Utilities\Constant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    private $userService;
    private $orderService;

    public function __construct(UserServiceInterface $userService, OrderServiceInterface $orderService){
        $this->userService = $userService;
        $this->orderService = $orderService;
    }

    public function login(){
        return view('front.account.login');
    }

    public function checkLogin(Request $request){
        $credentials = [
            "email"=> $request->email,
            "password"=> $request->password,
            
        ];

        $remember = $request->remember;
        if(Auth::attempt($credentials, $remember)){
            $user = Auth::user();
            if ($user->level == 2) {
                return redirect()->intended(''); // Điều hướng cho tài khoản level 2
            } elseif ($user->level == 1) {
                return redirect()->intended(''); // Điều hướng cho tài khoản level 1
            }
        } else {
            return back()->with('notification', 'ERROR: Email or Password is wrong!');
        }
        }

    public function logout(){
        Auth::logout();
        return back();
    }

    public function register(){
        return view('front.account.register');
    }

    public function postRegister(Request $request) {
        if($request->password != $request->password_confirmation) {
            return back()
                ->with('notification', 'ERROR: Confirm password does not match');

        }
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => 2, // đăng ký tài khoản cấp khách hàng bình thường
        ];

        $this->userService->create($data);

        return  redirect('account/login')
            ->with('notification', 'Register Success! Please login.');

    }

    public function myOrderIndex() {

        $orders = $this->orderService->getOrderByUserId(Auth::id());

        return view('front.account.my-order.index', compact('orders'));
    }
    
    public function myOrderShow($id) {

        $order = $this->orderService->find($id);
        return view('front.account.my-order.show', compact('order'));
    }
}
