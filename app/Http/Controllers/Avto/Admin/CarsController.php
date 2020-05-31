<?php

namespace App\Http\Controllers\Avto\Admin;


use App\Models\AvtoCars;
use Illuminate\Http\Request;

class CarsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginator = AvtoCars::paginate(5);
      
        return view('avto.admin.cars.index',compact('paginator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = new AvtoCars();
        $parkList = AvtoCars::all();

        return view('avto.admin.cars.edit',
        compact('item','carsList'));
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
        $item = (new AvtoCars())->create($data);

        if ($item) {
            return redirect()
                ->route('avto.admin.cars.edit',$item->id)
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
        $item = AvtoCars::findOrFail($id);
        $parkList = AvtoCars::all();

        return view('avto.admin.cars.edit',
        compact('item','$carsList'));
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
         //Валидация AvtoParks
         $rules = [
            'name' => 'required',
            'name_driver' => 'required',
          
        ];
        
        $validatedData = $this->validate($request,$rules);

        $item = AvtoCars::find($id);
        if (empty($item)) {
            return back()
                ->withErrors(['msg' => 'Запись id = [{$id}] не найдена'])
                ->withInput();
        }

        $validatedData = $request->all();
      
        $result = $item->update($validatedData);
       
        if ($result) {
            return redirect()
                ->route('avto.admin.cars.edit',$item->id)
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
        dd(__METHOD__);
    }
}
