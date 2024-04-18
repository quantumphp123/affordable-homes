@extends('admin.layout.layout')

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
                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error</strong> {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Customer Information</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Customer Information</li>
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
                        <td>Contact</td>
                        <td>Email</td>
                        <td>Meeting Date</td>
                        <td>Meeting Time</td>
                        <td>Raised On</td>
                        <td>Status</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($infos as $info)
                    <tr>
                        <td>{{ $info['user']['first_name'].' '.$info['user']['last_name'] }}</td>
                        <td>{{ $info['user']['phone_number'] }}</td>
                        <td>{{ $info['user']['email'] }}</td>
                        <td>{{ date('d-M-Y', strtotime($info['meeting_date'])) }}</td>
                        <td>{{ date('h:i:s A', strtotime($info['meeting_date'])) }}</td>
                        <td>{{ date('d-M-Y', strtotime($info['created_at'])) }}</td>
                        <td>
                            <form action="{{ route('admin.change.status.customer.info') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $info['id'] }}">
                                @if ($info['status'] == 'pending')
                                <input type="hidden" name="status" value="pending">
                                <button type="submit" class="btn btn-warning">Pending</button>
                                @else
                                <input type="hidden" name="status" value="completed">
                                <button type="submit" class="btn btn-success">Completed</button>
                                @endif
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('admin.view.customer.info', $info['id']) }}" role="button" class="btn btn-primary">View</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable({
            /* No ordering applied by DataTables during initialisation */
            "order": []
        });
    });
</script>
<script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>
@endsection