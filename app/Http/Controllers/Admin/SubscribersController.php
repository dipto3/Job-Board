<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\SubscribersService;
use Illuminate\Http\Request;

class SubscribersController extends Controller
{
    const moduleDirectory = 'admin.subscriber.';
    protected $subscribersService;

    public function __construct(SubscribersService $subscribersService)
    {
        $this->subscribersService = $subscribersService;
    }

    public function index()
    {
        $data = [
            'subscribers' => $this->subscribersService->allSubscriber(),
        ];

        return view(self::moduleDirectory . 'index', $data);
    }
}
