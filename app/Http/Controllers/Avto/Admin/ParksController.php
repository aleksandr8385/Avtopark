<?php

namespace App\Http\Controllers\Avto\Admin;

// use App\Http\Controllers\Controller;

use App\Http\Requests\AvtoParksUpdateRequest;
use App\Models\AvtoCars;
use App\Models\AvtoPark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ParksController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginator = AvtoPark::paginate(250);
        // dd($paginator);
        return view('avto.admin.parks.index',compact('paginator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = new AvtoPark();
        $parkList = AvtoPark::all();
        $car = AvtoCars::pluck('number','name_driver');
        $carName = AvtoCars::pluck('name_driver');
       


        return view('avto.admin.parks.edit',
        compact('item','parkList','car','carName'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input();
        $item = (new AvtoPark())->create($data);

        
        if ( $item && $data['car_number'] && $data['driver_name'] ){
            $park_id = AvtoPark::where('title', $data['title'])
                                ->first()
                                ->id;
           
                for ( $i = 0; $i < count($data['car_number']); $i++) {
                    
                    $find_avto = AvtoCars::where('number', $data['car_number'][$i])
                                        ->first();
                                    
                    if ($find_avto) {
                        $avto_id = $find_avto->id;
                        //Добавить $park_id"," $avto_id" в таблицу;
                        DB::insert('insert into avto_cars_avto_park (avto_park_id, avto_cars_id) values (?, ?)', [$park_id, $avto_id]);
                    }else{
                        DB::insert('insert into avto_cars (number, name_driver,created_at,updated_at) values (?, ?, ?, ?)',
                        [
                            $data['car_number'][$i],
                            $data['driver_name'][$i],
                            date("Y-m-d H:i:s"),
                            date("Y-m-d H:i:s")
                        ]);
                        $avto_id = AvtoCars::where('number', $data['car_number'][$i])
                        ->first()
                        ->id;
                        DB::insert('insert into avto_cars_avto_park (avto_park_id, avto_cars_id) values (?, ?)', [$park_id, $avto_id]);
                        
                    }
                }
       

            return redirect()
            ->route('avto.admin.parks.index')
            ->with(['success' => 'Успешна сохранено']);
        }else {
            return back()
            ->withErrors(['msg' => 'Ошибка сохранения'])
            ->withInput();
        }
          
    }
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd(__METHOD__);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = AvtoPark::findOrFail($id);
        $parkList = AvtoPark::all();
        $carName = AvtoCars::pluck('name_driver');
        $car = AvtoCars::pluck('number','name_driver');
        // dd($parkList);

        return view('avto.admin.parks.edit',
        compact('item','parkList','carName','car'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AvtoParksUpdateRequest $request, $id)
    {
        //Валидация AvtoParks
        $rules = [
            'title' => 'required',
            'address' => 'required',
            'schedule' => 'required',
            
        ];
        
        $validatedData = $this->validate($request,$rules);

        $item = AvtoPark::find($id);
        if (empty($item)) {
            return back()
                ->withErrors(['msg' => 'Запись id = [{$id}] не найдена'])
                ->withInput();
        }

        $validatedData = $request->all();
        // dd( $item);
        $result = $item->update($validatedData);
       
        if ($result) {
            return redirect()
                ->route('avto.admin.parks.edit',$item->id)
                ->with(['success' => 'Успешна сохранено']);
        }else {
            return back()
            ->withErrors(['msg' => 'Ошибка сохранения'])
            ->withInput();
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = AvtoPark::find($id);
        $result = AvtoPark::find($id)->delete();

        if ($result) {
            return redirect()
                ->route('avto.admin.parks.index',$item->id);
                
        }else {
            return back()
            ->withErrors(['msg' => 'Ошибка ']);
            
        }
    }
}
