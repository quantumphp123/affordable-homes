@extends('admin.layout.layout')
@section('title')
    Goals
@endsection
@section('style')
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Goals</h1>
                    <button type="button" class="btn btn-primary mt-2" data-toggle="modal"
                        data-target="#add-goal">
                        Add New Goal
                    </button>
                    @php
                    $arr = ['name', 'email', 'phone_number'];
                    @endphp
                    @foreach($arr as $a)
                    @error($a)
                    <p class="text-danger mt-1 mb-0">{{ $message }}</p>
                    @enderror
                    @endforeach
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Goals</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <table id="myTable">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Description</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($goals as $goal)
                    <tr>
                        <td>
                            <strong>{{ $goal['name'] }}</strong>
                        </td>
                        <td>{{ $goal['description'] }}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="{{ '#goal'.$goal['id'] }}">
                                Edit
                            </button>
                            <a href="{{ route('admin.goal.delete', $goal['id']) }}" role="button" class="btn btn-danger btn-del">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    {{-- Update goal Modal --}}
    @foreach ($goals as $goal)
    <div class="modal fade" id="{{ 'goal'.$goal['id'] }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Goal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.goal.edit') }}" method="post">
                    @csrf
                    <input type="hidden" value="{{ $goal['id'] }}" name="goal_id">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputName">Name</label>
                                <input type="text" class="form-control" id="exampleInputName" name="name"
                                    value="{{ $goal['name'] }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPhoneNumber">Description</label>
                                <textarea class="form-control" id="exampleInputPhoneNumber" name="description" rows="6" cols="30" required>{{ $goal['description'] }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-end">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    {{-- Add goal Modal --}}
    <div class="modal fade" id="add-goal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New goal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.goal.add') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputName">Name</label>
                                <input type="text" class="form-control" id="exampleInputName" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPhoneNumber">Description</label>
                                <textarea class="form-control" id="exampleInputPhoneNumber" name="description" rows="6" cols="30" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-end">
                        <button type="submit" class="btn btn-primary">Add goal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
            $('#myTable').DataTable();
        });
</script>
<script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>
<script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>
@endsection