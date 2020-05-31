<?php

namespace App\Http\Controllers\Avto\Admin;

// use App\Http\Controllers\Controller;

use App\Http\Requests\AvtoParksUpdateRequest;
use App\Models\AvtoPark;
use Illuminate\Http\Request;


class ParksController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginator = AvtoPark::paginate(25);
    //    dd($paginator);
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

        return view('avto.admin.parks.edit',
        compact('item','parkList'));
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
        // if (empty($data['title'])){
        //         $data['title'] = str_slug($data['title']);
        // }

        // Создаст объект но не добавит в БД
        // $item = new AvtoPark($data);
        // dd($item);
        // $item->save();

        // Создаст объект  добавит в БД
        $item = (new AvtoPark())->create($data);

        if ($item) {
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

        return view('avto.admin.parks.edit',
        compact('item','$parkList'));

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
            'schedule' => 'required'
        ];
        
        $validatedData = $this->validate($request,$rules);

        $item = AvtoPark::find($id);
        if (empty($item)) {
            return back()
                ->withErrors(['msg' => 'Запись id = [{$id}] не найдена'])
                ->withInput();
        }

        $validatedData = $request->all();
      
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
         dd(__METHOD__);
    }
}
