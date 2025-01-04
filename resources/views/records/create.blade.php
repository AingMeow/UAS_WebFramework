@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Record</h1>
    <form action="{{ route('records.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" name="amount" id="amount" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="attachment">Attachment (optional)</label>
            <input type="file" name="attachment" id="attachment" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection