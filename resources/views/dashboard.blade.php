@extends('layouts.admin')
@section('content')



    <div class="row">
        <div class="col-sm-12">
            <!-- Basic Form Inputs card start -->
            <div class="card">
        <li class="header-search">
            <div class="main-search morphsearch-search">
                <form action="{{ route('search') }}" method="GET">
                <div class="input-group">
                    <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                    <input type="text" class="form-control" name="search">
                    <button class="input-group-addon search-btn" type="submit"><i class="feather icon-search"></i></button>
                </div>
                </form>
            </div>
        </li>
                <div class="card bg-c-green text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col">
                                <p class="m-b-5"></p>
                                <h4 class="m-b-0"></h4>
                            </div>
                            <div class="col col-auto text-right">
                                <i class="feather icon-credit-card f-50 text-c-green"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <!-- Basic Form Inputs card start -->
            <div class="card">
                <div class="card-header">
                    <h5>Leave Application</h5>
                    <div class="card-header-right">
                        <i class="icofont icofont-spinner-alt-5"></i>
                    </div>

                </div>

                <div class="card-block">
                    <h4 class="sub-title">Application</h4>
                    <form method="Post" action="{{route('createLeaveApplication')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Leave Type</label>
                            <div class="col-sm-10">
                                <select class="js-example-placeholder-multiple-cat col-sm-12 select2-hidden-accessible" name="leave_type" tabindex="-1" aria-hidden="true">

                                    @foreach ($leaveTypes as $type )
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Start Date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="start_date" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">End Date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="end_date"  required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">Save</button>

                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
