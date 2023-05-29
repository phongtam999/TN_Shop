<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Services\Interfaces\UserServiceInterface;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendEmail;
use Illuminate\Support\Str; // Thêm use statement này

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function index(Request $request)
    {
        // $this->authorize('viewAny', User::class);
        $users = $this->userService->all($request);
        $param = [
           
            'users' => $users,
        ];

        return view('admin.users.index', $param);
    }

    public function showAdmin()
    {
        $admins = User::get();
        $param = [
            'admins' => $admins,
        ];

        return view('admin.users.adminpass', $param);
    }
    

    public function create()
    {
        // $this->authorize('create', User::class);
        $groups = Group::get();
        $param = [
            'groups' => $groups,
        ];

        return view('admin.users.create', $param);
    }

    public function store(StoreUserRequest $request)
    {
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->address = $request->address;
            $user->phone = $request->phone;
            $user->birthday = $request->birthday;
            $user->gender = $request->gender;
            $user->group_id = $request->group_id;
            $fieldName = 'image';
            if ($request->hasFile($fieldName)) {
                $fullFileNameOrigin = $request->file($fieldName)->getClientOriginalName();
                $fileNameOrigin = pathinfo($fullFileNameOrigin, PATHINFO_FILENAME);
                $extenshion = $request->file($fieldName)->getClientOriginalExtension();
                $fileName = $fileNameOrigin . '-' . rand() . '_' . time() . '.' . $extenshion;
                $path = 'storage/' . $request->file($fieldName)->storeAs('public/images/users', $fileName);
                $path = str_replace('public/', '', $path);
                $user->image = $path;
                
            }
            $user->save();

            toast('Thêm Nhân Viên Thành Công!', 'success', 'top-right');
            return redirect()->route('users.index');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('users.index');
        }
    }

    public function show(string $id)
    {
        $this->authorize('view', User::class);
        $user = $this->userService->find($id);
        $param = [
            'user' => $user,
        ];

        return view('admin.users.profile', $param);
    }

    public function profile()
    {
        // $this->authorize('view', User::class);
        $userId = Auth::id();
        $user = $this->userService->find($userId);
        $param = [
            'user' => $user,
        ];

        return view('admin.users.profile', $param);
    }


    public function edit(string $id)
    {
        $this->authorize('view', User::class);
        $user = $this->userService->find($id);
        $groups = Group::get();
        $param = [
            'user' => $user,
            'groups' => $groups
        ];

        return view('admin.users.edit', $param);
    }
    public function update(Request $request, $id)
    {
        try {
            $this->userService->update($request, $id);
            toast('Cập nhật Nhân Viên Thành Công!', 'success', 'top-right');
            return redirect()->route('users.index');

            // logic after update
        } catch (\Exception $e) {
            //logic handle error
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('users.index');

        }
   
    }
   
    public function destroy($id)
    {
        $this->authorize('delete', User::class);
        try {
            $this->userService->destroy($id);
            toast('Xóa Nhân Viên Thành Công!', 'success', 'top-right');
            return redirect()->route('users.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('users.index');
        }

    }

    public function search(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
    
        $users = User::query();
    
        if ($id) {
            $users->where('id', $id);
        }
    
        if ($name) {
            $users->where('name', 'like', "%$name%");
        }
    
        $users = $users->paginate(10);
    
        return view('admin.users.index', compact('users'));
    }
    public function forget_password()
    {
        // dd(987654);
        return view('admin.mails.fogotpass');
    }
    public function sendMail(Request $request){
// dd($request->email);
        $user = DB::table('users')->where('email', $request->email)->first();
        if(!$user){
            toast('Email: ' . $request->email.'<br> Không tồn tại', 'error', 'top-right');
            return back()->withInput();
        }
        if ($request->email == $user->email) {
            try {
                $password = Str::random(6);
                $user = User::find($user->id);
                $user->password = bcrypt($password);
                $user->save();
                $datas = [
                    'name' => $user->name,
                    'password' => $password,
                ];
                SendEmail::dispatch($datas, $user)->delay(now()->addMinute(1));
                toast('Gửi yêu cầu mật khẩu!'.'<br>'.' Thành Công', 'success', 'top-right');
                return back()->withInput();
            } catch (\Exception $e) {
                Log::error('message: ' . $e->getMessage() . 'line: ' . $e->getLine() . 'file: ' . $e->getFile());
                toast('Gửi yêu cầu mật khẩu!'.'<br>'.' Không thành Công', 'error', 'top-right');
                return back()->withInput();
            }
        } else {
            toast('Email: ' . $request->email . '<br> Không tồn tại', 'error', 'top-right');
            return back()->withInput();
        }
        
    }
}
