@extends('layouts.app')

@section('content')
<table>
@foreach($items as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->title }}</td>
        <td>{{ $item->adress }}</td>
        <td>{{ $item->schedule }}</td>
        <td>{{ $item->avto_id }}</td>
    </tr>
@endforeach
</table>
@endsection