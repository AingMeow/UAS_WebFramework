@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Welcome to UMKM Bookkeeping</h1>
    <a href="{{ route('records.index') }}" class="btn btn-primary">View Records</a>
</div>
@endsection