@extends('admin.layouts.master')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Create Task</h3>
                    <a href="{{ route('tasks.index') }}" class="btn btn-light">
                        <i class="fas fa-arrow-left"></i> Back to Task List
                    </a>
                </div>
                <div class="card-body">
                    <div class="container">
                        <form method="POST" action="{{ route('tasks.store') }}" class="needs-validation" novalidate>
                            @csrf
                            <div class="mb-4">
                                <label for="title" class="form-label fw-bold">Task Title</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Enter task title" required>
                                <div class="invalid-feedback">
                                    Please provide a title for the task.
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="description" class="form-label fw-bold">Task Description</label>
                                <textarea name="description" id="description" class="form-control" rows="5" placeholder="Enter task description"></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="due_date" class="form-label fw-bold">Due Date</label>
                                <input type="date" name="due_date" id="due_date" class="form-control" required>
                                <div class="invalid-feedback">
                                    Please select a due date for the task.
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-secondary me-2">
                                    <i class="fas fa-undo"></i> Reset
                                </button>
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-check"></i> Create Task
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
