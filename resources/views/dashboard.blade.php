@extends('students.layout')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bright Future Student Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="pull-left">
 
</div>

<div class="row">
    <div class="col-lg-12 margin-tb">

    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('students.create') }}">Create New Student</a>
</div>
</div>
</div>
@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">

<tr>
    <th>No</th>
    <th>Name</th>
    <th>Course</th>
    <th>Fee</th>
    <th width="280px">Action</th>
</tr>

            </div>
        </div>
    </div>
</x-app-layout>
