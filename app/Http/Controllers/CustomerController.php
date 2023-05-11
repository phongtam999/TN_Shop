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
        $customers = $this->customerService->paginate($request);
        return view('admin.customers.index',compact('customers'));
    }

    public function store(Request $request)
    {
        $this->categoryService->store($request);
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->gender = $request->gender;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $fieldName = 'image';
        if ($request->hasFile($fieldName)) {
            $fullFileNameOrigin = $request->file($fieldName)->getClientOriginalName();
            $fileNameOrigin = pathinfo($fullFileNameOrigin, PATHINFO_FILENAME);
            $extenshion = $request->file($fieldName)->getClientOriginalExtension();
            $fileName = $fileNameOrigin . '-' . rand() . '_' . time() . '.' . $extenshion;
            $path = 'storage/' . $request->file($fieldName)->storeAs('public/images', $fileName);
            $path = str_replace('public/', '', $path);
            $customer->image = $path;
            $customer->save();
        }
        alert()->success('Thêm khách hàng thành công!');
        return redirect()->route('customers.index');
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
        $item = $this->categoryService->find($id);
        $customer = Customer::find($id);
        return view('admin.customers.edit',compact('customer'));
    }

   
    public function update(Request $request, string $id)
    {
            $this->categoryService->update($request, $id);
            $customer = Customer::findOrFail($id);
            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->gender = $request->gender;
            $customer->phone = $request->phone;
            $customer->address = $request->address;
            $fieldName = 'image';
            if ($request->hasFile($fieldName)) {
                $fullFileNameOrigin = $request->file($fieldName)->getClientOriginalName();
                $fileNameOrigin = pathinfo($fullFileNameOrigin, PATHINFO_FILENAME);
                $extenshion = $request->file($fieldName)->getClientOriginalExtension();
                $fileName = $fileNameOrigin . '-' . rand() . '_' . time() . '.' . $extenshion;
                $path = 'storage/' . $request->file($fieldName)->storeAs('public/images', $fileName);
                $path = str_replace('public/', '', $path);
                $customer->image = $path;
            }
            alert()->success('Cập nhật khách hàng thành công!');
    
            $customer->save();
    
            return redirect()->route('customer.index');
            //
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->categoryService->destroy($id);
        $customer = Customer::findOrFail($id);
        $customer->Delete();
        alert()->success('Xóa thể loại thành công!');
        return redirect()->route('customer.index');
    }

    public function search(Request $request){
        $search = $request->input('search');
        if(!$search){
            return redirect()->route('product.index');
        }
        $customers = Customer::where('name','LIKE','%'.$search.'%')->paginate(2);
        return view('admin.customers.index',compact('customers'));
      }
}