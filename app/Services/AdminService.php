<?php

namespace App\Services;

use App\Http\Repository;
use Illuminate\Support\Collection as Collect;
use DB;
use App\Models\User;
use App\Models\Chat;

class AdminService
{


    public function __construct()
    {
    }

    public function getMessages($a)
    {
        $sqlQuery = Chat::select('message', 'from_user_id', 'to_user_id')
            ->where('from_user_id', $a->from_user_id)
            ->where('to_user_id', $a->to_user_id);


        $search = $a->search;
        if (!empty($search)) {
            $sqlQuery->where("messages", "LIKE", "%{$search}%");
        }

        $result = $sqlQuery->offset($a->start)
            ->limit($a->length)
            ->orderBy('id')
            ->get();

        return $result;
    }

    public function getUsers()
    {
        $result = User::select('email', 'first_name', 'last_name', 'gender', 'organization_name')
            ->get();

        return $result;
    }
}
