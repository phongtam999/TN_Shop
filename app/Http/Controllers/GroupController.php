<?php

namespace App\Http\Controllers;
use App\Services\Interfaces\GroupServiceInterface;
use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use App\Models\Group;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

// use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    protected $groupService;

    public function __construct(GroupServiceInterface $groupService)
    {
        $this->groupService = $groupService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)

    {
        $this->authorize('viewAny',Group::class);
        $groups = $this->groupService->paginate($request);
        return view('admin.groups.index',compact('groups'));
       
    }

        /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create',Group::class);
        return view('admin.groups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGroupRequest $request)
    {
      
        try {
            $this->groupService->store($request);
            toast('Thêm Quyền Thành Công!', 'success', 'top-right');
            return redirect()->route('groups.index');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('groups.index');
        }
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $this->authorize('update',Group::class);
        $group = $this->groupService->find($id);
        return view('admin.groups.edit', compact('group') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGroupRequest $request, $id)
    {
        try {
            $this->groupService->update($request, $id);
            toast('Sửa Quyền Thành Công!', 'success', 'top-right');
            return redirect()->route('groups.index');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('groups.index');
        }
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->authorize('delete', Group::class);
        try {
            $this->groupService->forceDelete($id);
            toast('Nhóm Quyền Đã Được Xóa!', 'success', 'top-right');
            return redirect()->route('groups.index');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            toast('Có lỗi xảy ra!', 'error', 'top-right');
            return redirect()->route('groups.index');
        }
    }
    
    
    public function detail($id)
    {
        
        $group =  $this->groupService->detail($id);
        return view('admin.groups.detail', $group);
    }
    public function group_detail(Request $request,$id)
    {
        try {
            $this->groupService->group_detail($id, $request);
            toast('Cấp Quyền Thành Công!', 'success', 'top-right');
            return redirect()->route('groups.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('groups.index');
        }
    }
 

   
}
