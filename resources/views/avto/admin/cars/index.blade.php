@extends('layouts.app')

@section('content')
<div class='container'>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                    <a class="btn btn-primary" href="{{ route('avto.admin.cars.create') }}">Добавить</a>
                </nav>
                <div class='card'>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Номер</th>
                                <th>Имя Водителя</th>
                                <th>Park_id</th>
                                <th>User_id</th>
                                
                               
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($paginator as $item)
                                
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>
                                        <a href="{{ route('avto.admin.cars.edit',$item->id)}}">
                                            {{ $item->number }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('avto.admin.cars.edit',$item->id)}}">
                                            {{ $item->name_driver }}
                                        </a>
                                    </td>
                                  
                                    <td>
                                        <a href="{{ route('avto.admin.cars.edit',$item->id)}}">
                                            {{ $item->park_id }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('avto.admin.cars.edit',$item->id)}}">
                                            {{ $item->user_id }}
                                        </a>
                                    </td>
                                 
                                    
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    
        @if($paginator->total() > $paginator->count())
            <br>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            {{ $paginator->link() }}
                        </div>
                    </div>

                </div>

            </div>
        @endif
    </div>

@endsection