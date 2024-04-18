@extends('user_panel.layout.layout')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
  {{-- <link rel="stylesheet" href="{{url('assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}"> --}}
  {{-- <link rel="stylesheet" href=""> --}}
  <link rel="stylesheet" href="{{url('assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Purchase Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Purchase Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="row">
                    <div class="col-md-12 col-lg-12 table-responsive">
                        <table class="table table-striped table-responsive-sm display" id="example">
                            <thead>
                                <tr>
                                    <th style="width: 10px;">#</th>
                                    <th style="width: 100px;">Property Name</th>
                                    <th style="width: 10px;">No. of Windows</th>
                                    <th style="width: 10px;">No. of Doors</th>
                                    <th style="width: 10px;">No. of Hatch Skylight Roofs</th>
                                    <th style="width: 10px;">No. of Toilets</th>
                                    <th style="width: 10px;">No. of Tubs</th>
                                    <th style="width: 10px;">Total Price</th>
                                    <th style="width: 200px;">Address</th>
                                    <th style="width: 10px;">Contract Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $i=1;?>
                                @foreach ($data as $item)    
                                <tr>
                                    <td>{{ $i }}</td>
                                    @php
                                        $property = App\Models\Property::where('id', $item->property_id)->first();
                                    @endphp
                                    <td>{{ $property->name }}</td>
                                    <td>{{ $item->windows }}</td>
                                    <td>{{ $item->doors }}</td>
                                    <td>{{ $item->hatch_skylight_roof }}</td>
                                    <td>{{ $item->toilet }}</td>
                                    <td>{{ $item->tub }}</td>
                                    <td>
                                        @php
                                            $propertyPrice = $property->price;
                                            $prices = App\Models\Price::all();
                                            $winPrice = $item->windows * $prices[0]['price'];
                                            $doorPrice = $item->doors * $prices[1]['price'];
                                            $hsrPrice = $item->hatch_skylight_roof * $prices[2]['price'];
                                            $toiletPrice = $item->toilet * $prices[3]['price'];
                                            $tubPrice = $item->tub * $prices[4]['price'];
                                            echo $propertyPrice + $winPrice + $doorPrice + $hsrPrice + $toiletPrice + $tubPrice;
                                        @endphp
                                    </td>
                                    <td>{{ $item->address }}</td>
                                    <td> {{ \Carbon\Carbon::parse($item->contract_date)->diffForhumans() }}</td>
                                    <?php $i++; ?>
                                </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('script')
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
    $('#example').DataTable({

    });
});
</script>
@endsection