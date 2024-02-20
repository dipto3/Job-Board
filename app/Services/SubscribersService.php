<?php

namespace App\Services;

use App\Models\Subscriber;

class SubscribersService
{
    public function addSubscriber($request)
    {
        return Subscriber::create([
            'category_id' => $request->category_id,
            'email' => $request->email,
        ]);
    }
}
