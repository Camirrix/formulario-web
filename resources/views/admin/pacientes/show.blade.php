@extends('layouts.admin')

@section('title', 'Data del paciente')

@section('content')
    <x-list :paciente="$paciente"></x-list>
@endsection

