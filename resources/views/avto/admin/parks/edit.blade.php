@extends('layouts.app')

@section('content')
    @if( $item->exists ) 
        <form method="POST" action="{{ route('avto.admin.parks.update', $item->id) }}">
        @method('PATCH')
    @else
        <form method="POST" action="{{ route('avto.admin.parks.store') }}">
    @endif
        @csrf
        <!-- errors -->
    <div class='container'>
        @if($errors->any())
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="alert alert-danger" role="alert">
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                        {{ $errors->first() }}
                    </div>
                </div>
            </div>
        @endif
        @if(session('success'))
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="alert alert-success" role="alert">
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                        {{ session()->get('success') }}
                    </div>
                </div>
            </div>
        @endif

        
            <div class="row justify-content-center">
                <div class="col-md-12">
                    @include('avto.admin.parks.includes.item_edit_main_col')     
                </div>
                <hr>
                <div class="col-md-12">
                    @include('avto.admin.parks.includes.item_edit_add_car')     
                </div>
                <hr>
                <div class="col-md-12">
                    @include('avto.admin.parks.includes.item_edit_add_col')
                </div>
            </div>
    </div>
</form> 

@if( $item->exists )
            <br>
            <form method="POST" action="{{ route('avto.admin.parks.destroy', $item->id)}}">
                @method('DELETE')
                @csrf
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card card-block">
                            <div class="card-body ml-avto">
                                <button type="submit" class="btn btn-link"> Удалить </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </form>
@endif


</div>

@endsection