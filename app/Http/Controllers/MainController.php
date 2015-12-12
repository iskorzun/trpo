<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Guard;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{

    const ADMIN_ROLE = 1;
    const CLIENT_ROLE = 3;
    const DIRECTOR_ROLE = 5;

    protected $user = null;

    public function __construct(Guard $auth)
    {
        $this->user = $auth->user();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ($this->user->role_id == self::ADMIN_ROLE) {
            return redirect()->route('ref.user');
        } elseif ($this->user->role_id == self::CLIENT_ROLE) {
            return redirect()->route('ref.place');
        } elseif ($this->user->role_id == self::DIRECTOR_ROLE) {
            return redirect()->route('ref.report');
        } else {
            return redirect()->route('ref.user');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
