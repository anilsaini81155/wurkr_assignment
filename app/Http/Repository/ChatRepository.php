<?php

namespace App\Http\Repository;

use App\Models\Chat;


class ChatRepository  extends BaseRepository{

    public function __construct(Chat $model) {
        parent::__construct($model);
    }


}
