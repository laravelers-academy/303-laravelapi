<?php

namespace App\Models\Traits\Storage;

use Illuminate\Support\Facades\Hash;

trait UserStorage
{

	public function createModel($request)
    {
        
        $user = $this->create($request->only([
            'name',
            'email'
        ]) + [
            'password' => Hash::make($request->password)
        ]);

        return $user;

    }

    public function updateModel($request)
    {

        $this->update($request->only(['name','email']));

        return $this;

    }

    public function deleteModel()
    {

        // ... Some code

        return $this->delete();

    }

}