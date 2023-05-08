<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\User;
use App\Services\Interfaces\UserServiceInterface;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreUserRequest; // Thêm use statement này

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
            $users = $this->userService->store($request);
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
        // $this->authorize('view', User::class);
        $user = $this->userService->find($id);
        $param = [
            'user' => $user,
        ];

        return view('admin.users.profile', $param);
    }

    public function edit(string $id)
    {
        // $this->authorize('view', User::class);
        $user = $this->userService->find($id);
        $groups = Group::get();
        $param = [
            'user' => $user,
            'groups' => $groups
        ];

        return view('admin.users.edit', $param);
    }

    public function update(Request $request, string $id)
    {
        try {
            $this->userService->update($request, $id);
            toast('Cập nhật Nhân Viên Thành Công!', 'success', 'top-right');
            return redirect()->route('users.index');
        } catch (\exception $e) {
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
        // $this->authorize('delete', User::class);
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

    public function search(Request $request){
        $search = $request->input('search');
        if(!$search){
            return redirect()->route('users.index');
        }
        $users = User::where('name','LIKE','%'.$search.'%')->paginate(2);
        return view('admin.users.index',compact('users'));
      }
}