<?php

namespace App\Http\Controllers;

use App\Models\NotificationModel;
use App\Models\projects;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('OpdReqProject.notification');
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
     * @param  \App\Models\NotificationModel  $notificationModel
     * @return \Illuminate\Http\Response
     */
    public function show(NotificationModel $notificationModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NotificationModel  $notificationModel
     * @return \Illuminate\Http\Response
     */
    public function edit(NotificationModel $notificationModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NotificationModel  $notificationModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NotificationModel $notificationModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NotificationModel  $notificationModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(NotificationModel $notificationModel)
    {
        //
    }
}
