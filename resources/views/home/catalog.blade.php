@extends('layouts.app')

@section('content')
    <div class="modal fade bg-white" id="search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q"
                        placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">
            <div class="col-md">
                <div class="row">
                    @foreach ($datas as $item)
                        <div class="col-md-4">
                            <div class="card mb-4 product-wap rounded-5">
                                <div class="card rounded-5">
                                    <img class="card-img rounded-0 img-fluid" src="{{ $item->image }}">
                                    <div
                                        class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            <li><a class="btn btn-primary text-white mt-2"
                                                    href="{{ route('single', ['data' => $item]) }}"><i
                                                        class="fa far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="" class="h3 text-decoration-none">{{ $item->name }}</a>
                                    <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                        <li>{{ $item->category }}</li>
                                    </ul>
                                    <p class="text-center mb-0 mt-2">Rp {{ number_format($item->price) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
