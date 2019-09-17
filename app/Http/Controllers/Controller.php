<?php

declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Models\Location\Location;
use Auth;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use function view;

/**
 * Class Controller
 *
 * Main application Controller.
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Index of Dashboard.
     *
     * @return View
     */
    public function index(): View
    {
        return view('index', []);
    }
}
