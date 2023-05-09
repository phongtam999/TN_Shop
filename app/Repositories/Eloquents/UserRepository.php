<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Models\User;
use App\Repositories\Eloquents\EloquentRepository;
use Illuminate\Support\Facades\DB;

class UserRepository extends EloquentRepository implements UserRepositoryInterface
{
    public function getModel()
    {
        return User::class;
    }

    public function paginate($request)
    {
        return $this->model->paginate(3);
    }

    public function all($request)
    {
        $query = User::query();

        $key = $request->key ?? '';
        $name = $request->name ?? '';
        $phone = $request->phone ?? '';
        $address = $request->address ?? '';
        $id = $request->id ?? '';

        if ($name) {
            $query->where('name', 'LIKE', '%' . $name . '%');
        }
        if ($phone) {
            $query->where('phone', 'LIKE', '%' . $phone . '%');
        }
        if ($address) {
            $query->where('address', 'LIKE', '%' . $address . '%');
        }
        if ($id) {
            $query->where('id', $id);
        }
        if ($key) {
            $query->orWhere('id', $key)
                ->orWhere('name', 'LIKE', '%' . $key . '%')
                ->orWhere('phone', 'LIKE', '%' . $key . '%')
                ->orWhere('address', 'LIKE', '%' . $key . '%');
        }

        return $query->paginate(3);
    }

    public function store($request)
    {
        $user = new $this->model;
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
            $path = 'storage/' . $request->file($fieldName)->storeAs('public/assets/images/user', $fileName);
            $path = str_replace('public/', '', $path);
            $user->image = $path;
        }

        $user->save();

        $data = [
            'name' => $request->name,
            'pass' => $request->password,
        ];
        // Mail::send('admin.emails.user', compact('data'), function ($email) use($user) {
        //     $email->subject('3T Shop');
        //     $email->to($user->email, $user->name);
        // });

        return true;
    }

    public function update($request, $id)
    {
        $user = $this->find($id);
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

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
            $path = 'storage/' . $request->file($fieldName)->storeAs('public/assets/images/user', $fileName);
            $path = str_replace('public/', '', $path);
            $user->image = $path;
        }
        $user->save();
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        return $user->delete();
    }
    public function search($keyword)
    {
        return User::where('name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('phone', 'LIKE', '%' . $keyword . '%')
            ->orWhere('address', 'LIKE', '%' . $keyword . '%')
            ->paginate(10);
    }
}
