@extends('layouts.app')

@section('page-title', 'Trains')

@section('content')
    <section id="train_list" class="py-4">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
                @forelse ($trains as $train)
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5>
                                    <strong>Train Code: </strong>
                                    <span class="text-uppercase">{{ $train->train_code }}</span>
                                </h5>
                            </div>
                            <img src="https://picsum.photos/200/300?random={{ $train->id }}" class="card-img-top">
                            <div class="card-footer h-100">
                                <div>
                                    <strong>Departure: </strong>
                                    {{ $train->departure_point }} -
                                    {{ $train->departure_date_time }}
                                </div>
                                <div>
                                    <strong>Arrival: </strong>
                                    {{ $train->arrival_point }} -
                                    {{ $train->arrival_date_time }}
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h4>There is any train available! 😔</h4>
                @endforelse
            </div>
        </div>
    </section>

@endsection
