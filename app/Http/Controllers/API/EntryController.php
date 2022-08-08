<?php

namespace App\Http\Controllers\API;

use App\Models\City;
use App\Models\Entry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EntryRequest;
use App\Http\Resources\EntryResource;
use App\Http\Traits\ApiResponser;

class EntryController extends Controller
{
    use ApiResponser;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->success(EntryResource::collection(Entry::get()));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EntryRequest $request)
    {
        $entry = EntryResource::make(Entry::create([
            'message' => $request->message,
            'sentiment' =>  $request->sentiment,
            'city_id' => City::all()->random()->id,
        ]));

        return $this->success($entry, 'Entry Added successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $entry = Entry::find($id);
        
        if (empty($entry)) {
            return $this->error('This id is not found', 404);
        }

        $entry->delete();

        return $this->success(new EntryResource($entry), 'Entry Deleted Successfully');
    }
}
