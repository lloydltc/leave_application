<div>
    {{-- The whole world belongs to you. --}}

    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h4>Applications</h4>
                                    <span></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Page-header end -->

                <!-- Page body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Product list card start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>Applications</h5>
                                    <button type="button" class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger"  onclick="window.location.href = '{{route('home')}}'"> <i class="icofont icofont-plus m-r-5"></i> Create Application
                                    </button>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <div class="table-content">
                                            <div class="project-table">
                                                <div id="e-product-list_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-xs-12 col-sm-12 col-sm-12 col-md-6"></div><div class="col-xs-12 col-sm-12 col-md-6"></div></div><div class="row"><div class="col-xs-12 col-sm-12"><table id="e-product-list" class="table table-striped dt-responsive nowrap dataTable no-footer dtr-inline collapsed" role="grid" style="width: 655px;">
                                                                <thead>
                                                                <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 85px;">Employee</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 438px;">Start Date</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 60px;">End Date</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 60px;">Application Date</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px; display: none;">Status</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px; display: none;">Action</th></tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach ($applications as $application )

                                                                    <tr role="row" class="odd">

                                                                        <td class="pro-name">
                                                                            <h6>{{$application->employee->name}}</h6>
                                                                            <span>{{$application->employee->id}}</span>
                                                                        </td>
                                                                        <td>
                                                                            {{$application->start_date}}
                                                                        </td>
                                                                        <td>
                                                                            {{$application->end_date}}
                                                                        </td>
                                                                        <td>
                                                                            {{$application->application_date}}
                                                                        </td>
                                                                        <td style="display: none;">
                                                                            @if($application->status == 'Approved')
                                                                                <label class="text-success">{{$application->status}}</label>
                                                                            @elseif($application->status == 'pending')
                                                                                <label class="text-warning">{{$application->status}}</label>
                                                                            @else
                                                                                <label class="text-default">{{$application->status}}</label>
                                                                            @endif
                                                                        </td>
                                                                        <td class="action-icon" style="display: none;">

                                                                            <a href="{{route('approve', $application->id)}}" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Approve"><i class="icofont icofont-ui-add"></i></a>
                                                                            <a href="{{route('reject',$application->id)}}" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reject"><i class="icofont icofont-delete-alt"></i></a>
                                                                        </td>
                                                                    </tr>

                                                                @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product list card end -->
                        </div>
                    </div>
                    <!-- Add Contact Start Model start-->

                    <!-- Add Contact Ends Model end-->
                </div>
                <!-- Page body end -->
            </div>
        </div>
        <!-- Main-body end -->
    </div>
</div>
