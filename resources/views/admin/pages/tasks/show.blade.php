@extends('admin.layouts.master')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0"> Task Details</h3>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="card">
                            <div class="card-header">
                                <h2>{{ $task->title }}</h2>
                            </div>
                            <div class="card-body">
                                <p><strong>Description:</strong> {{ $task->description }}</p>
                                <p><strong>Status:</strong> {{ $task->status }}</p>
                                <p><strong>Due Date:</strong> {{ $task->due_date }}</p>
                            </div>
                        </div>
                        <a href="{{ route('tasks.index') }}" class="btn btn-secondary mt-3">Back to Tasks</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
