@extends('users.layout.layout')



@section('content')
    <!-- Header -->

    <header id="header">

        <div class="intro">

            <div class="overlay">

                <div class="container">

                    <div class="row">

                        <div class="col-md-8 col-md-offset-2 intro-text">

                            <h1>Property Listing</h1>

                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at.</p> -->





                            <!-- pop up -->

                            <!-- The Modal -->





                        </div>

                    </div>

                </div>

            </div>

        </div>

    </header>







    <!-- Property List End -->
    <div style="margin-top: 2rem;">
        <div class="container">
            <div class="row">
                @if (count($data['properties']) == 0)
                <h2 class="text-center text-muted">OOPS</h2>
                <h2 class="text-center text-muted">NO PROPERTY FOUND FOR YOUR SEARCH</h2>
                @else
                @foreach ($data['properties'] as $property)
                <div class="col-md-4">
                    <div class="card card-price">
                        <div class="card-img">
                            <a href="#">
                                <img src="{{ url('assets/img/portfolio/01-small.jpg') }}" class="img-responsive">
                                <a href="{{ route('users.property.details', [str_replace(' ', '-', $property['name']), $property['id']]) }}"
                                    style="border-radius: 5px !important;background: white;border: solid;margin-top: 0rem;/* padding: 1px;*/padding-right: 2rem;padding-left: 2rem;width: 3rem;">{{ $property['name'] }}</a>
                                <div class="card-caption">
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="lead" style="color: #00B98E;font-weight: 600;margin-left: 1.5rem;">{{ '$'.number_format($property['price']) }}
                            </H5>
                            <h5
                                style=" font-family:Inter,sans-serif;font-weight: 700;line-height: 1.2;color: #0E2E50;margin-left: 1.5rem;">
                                {{ $property['name'] }} For Sell</h5>
                            <p style="margin-left: 1.5rem;"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>123
                                Street, New York, USA</p>
                            <div class="d-flex border-top"
                                style="    border-top: 1px dashed rgba(0, 185, 142, .3) !important;padding-bottom: 0.5rem;">

                                <small class="flex-fill text-center border-end py-2"
                                    style="    border-right: 1px dashed rgba(0, 185, 142, .3) !important;    padding-top: 0.5rem !important; padding-bottom: 0.5rem !important;padding: 1.5rem;"><i
                                        class="fa fa-ruler-combined text-primary me-2"></i>{{ $property['length']*$property['width'].' Sq.Foot' }}</small>
                                <small class="flex-fill text-center border-end py-2"
                                    style="    border-right: 1px dashed rgba(0, 185, 142, .3) !important;    padding-top: 0.5rem !important;padding-bottom: 0.5rem !important;padding: 1.5rem;"><i
                                        class="fa fa-bed text-primary me-2"></i> {{ $property['bedroom'].' Bedrooms' }}</small>
                                <small class="flex-fill text-center py-2"
                                    style="padding-top: 0.5rem !important; padding-bottom: 0.5rem !important;padding: 0.5rem;"><i
                                        class="fa fa-bath text-primary me-2"></i>{{ $property['kitchen'].' Kitchens' }}</small>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
                @endif
            </div>
        </div>
    </div>
    <br><br />
@endsection
