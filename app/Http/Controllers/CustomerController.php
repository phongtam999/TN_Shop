<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Services\Interfaces\CustomerServiceInterface;

class CustomerController extends Controller
{
    protected $customerService;

    public function __construct(CustomerServiceInterface $customerService)
    {
        $this->customerService = $customerService;
    }

    public function index(Request $request)
        { 
            $this->authorize('viewAny', Customer::class);
            $customers = $this->customerService->all($request);
            return view('admin.customers.index',compact('customers','request'));
        }

    public function store(Request $request)
    {
        $this->customerService->store($request);
        alert()->success('Thêm khách hàng thành công!');
        return redirect()->route('customers.index');  
    }
    public function edit(string $id)
    {
        $item = $this->customerService->find($id);
        $this->authorize('update',$item);
        return view('admin.customers.edit',compact('item'));
    }

    public function update(Request $request, string $id)
    {
        $this->customerService->update($request, $id);
        alert()->success('Cập nhật khách hàng thành công!');
        return redirect()->route('categories.index');      
    }
    public function destroy(string $id)
    {
        $this->customerService->destroy($id);
        $customer = Customer::findOrFail($id);
        $customer->Delete();
        alert()->success('Xóa thể loại thành công!');
        return redirect()->route('customer.index');
    }
    public function search(Request $request){
        $search = $request->input('name');
        if(!$search){
            return redirect()->route('customers.index');
        }
        $customers = Customer::where('name','LIKE','%'.$search.'%')->paginate(2);
        return view('admin.customers.index',compact('customers'));
      }
}