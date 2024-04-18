@extends('admin.layout.layout')



@section('style')

<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<style>
    table td {
        word-break: break-word;
        vertical-align: top;
        white-space: normal !important;
    }
</style>
@endsection



@section('content')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <div class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1 class="m-0 text-dark">Queries</h1>

                </div><!-- /.col -->

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>

                        <li class="breadcrumb-item active">Queries</li>

                    </ol>

                </div><!-- /.col -->

            </div><!-- /.row -->

        </div><!-- /.container-fluid -->

    </div>

    <!-- /.content-header -->



    <section class="content">

        <div class="container-fluid">

            <table id="myTable"  role="grid">

                <thead>

                    <tr>

                        <td>Name</td>

                        <td>Email</td>

                        <td>Message</td>

                        <td>Raised On</td>

                    </tr>

                </thead>

                <tbody>

                    @foreach ($queries as $query)

                    <tr>

                        <td>{{ $query['name'] }}</td>

                        <td>{{ $query['email'] }}</td>

                        <td>{{ $query['message'] }}</td>

                        <td>{{ $query['created_at'] }}</td>

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