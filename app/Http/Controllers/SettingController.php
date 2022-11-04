<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeLangRequest;
use App\Http\Requests\ProductStoreRequest;

class SettingController extends Controller
{
    public function changeLang(ChangeLangRequest $request)
    {
        auth()->user()->update(['lang' => $request->validated()['lang']]);

        return redirect()->back();
    }
}
