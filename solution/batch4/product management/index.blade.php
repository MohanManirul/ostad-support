@extends('layout.app')
@section('content')

<div class="container-fluid w-75 mt-3">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card px-5 py-5">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Employees</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('employee.create') }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
                        </div>
                    </div>
                </div>

                <table class="table table-hover" id="tableData">
                    <thead>
                        <tr class="bg-light">
                            <th>SL</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="tableList">
                        @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->phone }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('employee.edit', $employee->id) }}" class="edit" title="Edit"><i class="material-icons">&#xE254;</i></a>

                                    <!-- Delete Button -->
                                    <a href="#" class="delete ms-3" data-bs-toggle="modal" data-bs-target="#deleteEmployeeModal{{ $employee->id }}">
                                        <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                                    </a>

                                    <!-- Delete Modal -->
                                    <div class="modal fade" id="deleteEmployeeModal{{ $employee->id }}" tabindex="-1" aria-labelledby="deleteEmployeeModalLabel{{ $employee->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteEmployeeModalLabel{{ $employee->id }}">Delete Employee</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h3 class="mt-3 text-warning">Delete!</h3>
                                                    <p class="mb-3">Once deleted, you can't get it back.</p>
                                                    <form action="{{ route('employee.destroy', $employee->id) }}" method="post" id="deleteForm{{ $employee->id }}">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn shadow-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="button" onclick="document.getElementById('deleteForm{{ $employee->id }}').submit();" class="btn shadow-sm btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#tableData').DataTable({
            order: [[0, 'asc']],
            lengthMenu: [5, 10, 15, 20]
        });
    });
</script>

@endsection