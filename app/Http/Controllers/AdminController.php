<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection as Collect;
use App\Services;
use DB;

class AdminController
{

    protected $adminService;


    public function __construct(Services\AdminService $adminService)
    {
        $this->adminService = $adminService;
    }


    public function getMessages(Request $a)
    {

        $result =  $this->adminService->getMessages($a);

        if ($result->isEmpty()) {
            return response()->json([
                "message" => "Data Not Found",
                "data" => ""
            ], 404);
        }

        return response()->json([
            "message" => "Data Found",
            "data" => $result->toJson(JSON_PRETTY_PRINT)
        ], 200);
    }


    public function getUsers()
    {

        $sqlQueryData =  $this->adminService->getUsers();

        if ($sqlQueryData->isEmpty()) {
            return response()->json([
                "message" => "Data Not Found",
                "data" => ""
            ], 404);
        }

        return response()->json([
            "message" => "Data Found",
            "data" => $sqlQueryData->toJson(JSON_PRETTY_PRINT)
        ], 200);
    }
}
