@extends('layouts.app')

@section('title', 'Listado de Pacientes')

@section('content')
    <x-table :pacientes="$pacientes"></x-table>
@endsection
