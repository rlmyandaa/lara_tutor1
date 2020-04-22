<?php

namespace Modules\NamaModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\NamaModule\Entities\UserData;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('namamodule::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('namamodule::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('namamodule::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('namamodule::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
    public function insertData()
    {
        return view('namamodule::insert-data');
    }
    public function storeData(Request $request)
    {
        $data = new UserData;
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->save();
        return redirect('/namamodule/user/insert-data');
    }
    public function readData()
    {
        $data = UserData::all();
        return view('namamodule::view-data', compact('data'));
    }
    public function editData($id)
    {
        $data = UserData::where('id', $id)->get();
        return view('namamodule::edit-data', compact('data'));
    }
    public function updateData(Request $request, $id)
    {
        $data = UserData::where('id', $id);
        $data->update(['first_name' => $request->first_name, 'last_name' => $request->last_name]);
        return redirect(route('user.readdata'));
    }
    public function deleteData($id)
    {
        UserData::where('id', $id)->delete();
        return redirect(route('user.readdata'));
    }
}
