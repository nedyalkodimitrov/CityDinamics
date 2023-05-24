@extends('companies.layouts.master')

@section("title")
    Автогара
@endsection

@section("content")

    <div class="card col-12 row p-0 m-2">
        <div class="card-body ">
            <div class="card-title row justify-content-between">
                <h5 class="col">{{$station->name}} | {{$station->getCity->name}}
                    , {{$station->getCity->getCountry->name}} <i class="fas fa-map-marker-alt"
                                                                 aria-hidden="true"></i></h5>
                @if($isRequestToThisStation)
                    @if($isApproved)
                        <form action="{{route("company.unpairStation",["id" => $station->id])}}" method="post" class="col-3">
                            @csrf
                            <button
                                class="btn btn-danger col-12">Премахни тази автогара
                            </button>

                        </form>
                    @else
                        <form action="{{route("company.declineStationRequest",["id" => $station->id])}}" method="post" class="col-3">
                            @csrf
                            <button
                                class="btn btn-danger col-12">Откажи заявката си
                            </button>

                        </form>
                    @endif
                @else
                    <form action="{{route("company.makeStationRequest",["id" => $station->id])}}" method="post" class="col-3">
                        @csrf
                        <button
                            class="btn btn-success col-12">Свръжете се с компанията
                        </button>

                    </form>
                @endif
            </div>

{{--            @forelse($station->getCompanies as $company2)--}}

{{--                <p class="card-text"> | {{$company2->name}} <i class="fas fa-users"></i>|{{$company2->getCity->name}}--}}
{{--                    , {{$company2->getCity->getCountry->name}} <i class="fas fa-map-marker-alt" aria-hidden="true"></i>--}}
{{--                </p>--}}
{{--            @empty--}}
{{--                <p class="text-center" style="width: 100%; font-size: 1.1em;">Тази автогара още няма компании</p>--}}

{{--            @endforelse--}}

            <p class="card-text"></p>
        </div>
    </div>

@endsection
