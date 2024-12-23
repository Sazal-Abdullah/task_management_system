@extends('admin.layouts.master')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Task Details</h3>
                </div>
                <div class="card-body">
                    <div class="container">
                        <!-- Task Details Card -->
                        <div class="card shadow-sm mb-4">
                            <div class="card-header bg-light">
                                <h2 class="mb-0">{{ $task->title }}</h2>
                            </div>
                            <div class="card-body">
                                <p><strong>Description:</strong> {{ $task->description }}</p>
                                <p><strong>Assigned To:</strong> {{ $task->user->name }}</p>
                                <p><strong>Create Date:</strong> {{ $task->created_at->format('d-M-Y') }}</p>
                                <p><strong>Status:</strong>
                                    <span class="badge
                                        @if($task->status == 'Pending') badge-warning
                                        @elseif($task->status == 'In Progress') badge-info
                                        @else badge-success @endif">
                                        {{ $task->status }}
                                    </span>
                                </p>
                                <p><strong>Due Date:</strong> {{ \Carbon\Carbon::parse($task->due_date)->format('d-M-Y') }}</p>
                            </div>
                        </div>
                        <!-- Back Button -->
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Back to Tasks
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
