<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\CustomerResource;
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
        $items = $this->customerService->all($request);
        return CustomerResource::collection($items);
    }
  
    public function store(Request $request)
    {
        $this->customerService->store($request);
        response()->json([
            'success' => true,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = $this->customerService->find($id);
        return new CustomerResource($item);
    }

    
    public function update(Request $request, string $id)
    {
        $this->customerService->update($request, $id);
        response()->json([
            'success' => true,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->customerService->destroy($id);
        response()->json([
            'success' => true,
        ]);
    }
}
