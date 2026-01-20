@extends('layout')

@section('title','Employee List')

@section('content')

<a href="index.php?action=create">Add Employee</a>

<ul>
@foreach ($employees as $e)
    <li>
        <b>{{ $e['name'] }}</b> - {{ $e['title'] }}

        <ul>
        @foreach (explode(',', $e['skills']) as $s)
            <li>{{ trim($s) }}</li>
        @endforeach
        </ul>

        <a href="index.php?action=edit&id={{ $e['id'] }}">Edit</a> |
        <a href="index.php?action=delete&id={{ $e['id'] }}">Delete</a>
    </li>
@endforeach
</ul>

@endsection
