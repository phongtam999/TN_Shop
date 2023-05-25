<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Services\Interfaces\UserServiceInterface;
use App\Services\Interfaces\GroupServiceInterface;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendEmail;
use Illuminate\Support\Str; // Thêm use statement này

class UserController extends Controller
{
    protected $userService;
    private $GroupService;

     public function __construct(UserServiceInterface $UserService, GroupServiceInterface $GroupService)
    {
        $this->GroupService = $GroupService;
        $this->userService = $UserService;
    }

    public function index(Request $request)
    {
        // $this->authorize('viewAny', User::class);
        $users = User::paginate(2);

        $users = $this->userService->all($request);

        $id = $request->id ?? '';
        $key = $request->key ?? '';
        $name = $request->name ?? '';
        $phone = $request->phone ?? '';
        $address = $request->address ?? '';
        $position = $request->position ?? '';

        $param = [
            'f_id' => $id,
            'f_key' => $key,
            'f_name' => $name,
            'f_phone' => $phone,
            'f_address' => $address,
            'f_position' => $position,
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
            $this->userService->store($request);
            toast('Thêm Nhân Viên Thành Công!', 'success', 'top-right');
            return redirect()->route('users.index');
        } catch (\exception $e) {
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
        $this->authorize('update', User::class);
        $users = $this->userService->find($id);

        $groups = $this->GroupService->all($id);
        return view('admin.users.edit', compact('groups', 'users'));

        
    }

    public function update(UpdateUserRequest $request, $id)
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
    /**
     * Remove the specified resource from storage.
     */
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
