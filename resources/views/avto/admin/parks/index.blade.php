@extends('layouts.app')

@section('content')
    <div class='container'>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                    <a class="btn btn-primary" href="{{ route('avto.admin.parks.create') }}">Добавить</a>
                </nav>
                <div class='card'>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Название</th>
                                <th>Адрес</th>
                                <th>График</th>
                                <th>Имя водителя</th>
                                <th>Номер машины</th>
                               
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($paginator as $item)
                                
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>
                                        <a href="{{ route('avto.admin.parks.edit',$item->id)}}">
                                            {{ $item->title }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('avto.admin.parks.edit',$item->id)}}">
                                            {{ $item->address }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('avto.admin.parks.edit',$item->id)}}">
                                            {{ $item->schedule }}
                                        </a>
                                    </td>
                                    <td>
                                        @foreach ($item->cars()->pluck('name_driver') as $name)
                                            <a href="{{ route('avto.admin.parks.edit',$item->id)}}">
                                                {{ $name }}
                                            </a>    
                                            <hr>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($item->cars()->pluck('number') as $number)
                                            <a href="{{ route('avto.admin.parks.edit',$item->id)}}">
                                                {{ $number }}
                                            </a>    
                                            <hr>
                                        @endforeach
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