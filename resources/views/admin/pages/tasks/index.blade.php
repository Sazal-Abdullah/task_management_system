@extends('admin.layouts.master')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Tasks List</h3>
                    <a href="{{ route('tasks.create') }}" class="btn btn-light">
                        <i class="fas fa-plus"></i> Add New Task
                    </a>
                </div>
                <div class="card-body">
                    <div class="container">
                        <form method="GET" action="{{ route('tasks.index') }}" class="d-flex justify-content-end align-items-center mb-4">
                            <label for="status" class="me-3 fw-bold text-dark">Filter by Status:</label>
                            <div class="input-group w-auto">
                                <select name="status" id="status" class="form-select" onchange="this.form.submit()">
                                    <option value="">All</option>
                                    <option value="Pending" {{ request('status') == 'Pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="In Progress" {{ request('status') == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                                    <option value="Completed" {{ request('status') == 'Completed' ? 'selected' : '' }}>Completed</option>
                                </select>
                            </div>
                        </form>
                        
                        <div class="table-responsive">
                            <table class="table table-striped table-hover align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Create Date</th>
                                        <th>Status</th>
                                        <th>Due Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tasks as $task)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $task->title }}</td>
                                            <td>{{ $task->created_at->format('d-M-Y') }}</td>
                                            <td>
                                                <span class="badge
                                                    {{ $task->status == 'Pending' ? 'bg-warning' : ($task->status == 'In Progress' ? 'bg-info' : 'bg-success') }}">
                                                    {{ $task->status }}
                                                </span>
                                            </td>
                                            <td>{{ $task->due_date }}</td>
                                            <td>
                                                <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info btn-sm me-1">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning btn-sm me-1">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        @if ($tasks->isEmpty())
                            <div class="alert alert-info text-center mt-4">
                                No tasks found. <a href="{{ route('tasks.create') }}" class="alert-link">Create a new task</a>.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
