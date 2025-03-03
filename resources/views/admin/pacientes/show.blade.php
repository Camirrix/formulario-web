@extends('layouts.app')

@section('title', 'Detalle del paciente')

@section('content')
    <x-list :paciente="$paciente"></x-list>
@endsection

