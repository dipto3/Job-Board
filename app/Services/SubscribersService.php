<?php

namespace App\Services;

use App\Models\Subscriber;

class SubscribersService
{
    public function addSubscriber($request)
    {
        $subscriber = Subscriber::create([
            'category_id' => $request->category,
            'email' => $request->email,
        ]);
    }
}
