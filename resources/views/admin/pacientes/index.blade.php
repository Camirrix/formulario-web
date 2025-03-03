@extends('layouts.admin')

@section('title', 'Listado de Pacientes')

@section('content')
    <x-table :pacientes="$pacientes"></x-table>

    <script src="{{ asset('js/table.js') }}"></script>
@endsection
