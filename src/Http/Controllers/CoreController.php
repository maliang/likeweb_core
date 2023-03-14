<?php

namespace Likeweb\Core\Http\Controllers;

use Slowlyo\OwlAdmin\Controllers\AdminController;

class CoreController extends AdminController
{
    public function index()
    {
        $page = $this->basePage()->body('Core Extension.');

        return $this->response()->success($page);
    }
}
