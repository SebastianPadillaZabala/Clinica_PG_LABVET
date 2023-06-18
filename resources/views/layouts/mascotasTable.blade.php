@extends('dashboard')
@section('content')
@livewire('table-mascotas', ['id_pac' => $id_pac])
@endsection