@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Record List</h1>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('records.create') }}" class="btn btn-primary mb-3">Add New Record</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($records as $record)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $record->name }}</td>
                    <td>{{ $record->amount }}</td>
                    <td>{{ $record->date }}</td>
                    <td>
                        <a href="{{ route('records.edit', $record->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('records.destroy', $record->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No records found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection