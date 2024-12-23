@extends('admin.layouts.master')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Edit Task</h3>
                    <a href="{{ route('tasks.index') }}" class="btn btn-light">
                        <i class="fas fa-arrow-left"></i> Back to Task List
                    </a>
                </div>
                <div class="card-body">
                    <div class="container">
                        <form method="POST" action="{{ route('tasks.update', $task->id) }}" class="needs-validation" novalidate>
                            @csrf
                            @method('PUT')

                            <!-- Title -->
                            <div class="mb-4">
                                <label for="title" class="form-label fw-bold">Task Title</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}" placeholder="Enter task title" required>
                                <div class="invalid-feedback">
                                    Please provide a title for the task.
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="mb-4">
                                <label for="description" class="form-label fw-bold">Task Description</label>
                                <textarea name="description" id="description" class="form-control" rows="5" placeholder="Enter task description">{{ $task->description }}</textarea>
                            </div>

                            <!-- Status -->
                            <div class="mb-4">
                                <label for="status" class="form-label fw-bold">Task Status</label>
                                <select name="status" id="status" class="form-select" required>
                                    <option value="Pending" {{ $task->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="In Progress" {{ $task->status == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                                    <option value="Completed" {{ $task->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select the status of the task.
                                </div>
                            </div>

                            <!-- Due Date -->
                            <div class="mb-4">
                                <label for="due_date" class="form-label fw-bold">Due Date</label>
                                <input type="date" name="due_date" id="due_date" class="form-control" value="{{ $task->due_date }}" required>
                                <div class="invalid-feedback">
                                    Please provide a due date for the task.
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-secondary me-2">
                                    <i class="fas fa-undo"></i> Reset
                                </button>
                                <button type="submit" class="btn btn-warning">
                                    <i class="fas fa-edit"></i> Update Task
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
