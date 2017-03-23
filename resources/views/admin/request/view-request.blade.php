@extends('app-admin')
@section('admin-content')
    <h1>View Request</h1>

    <div class="row">
        <div class="col-md-12">

            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-cogs"></i>Request
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse" data-original-title="" title="">
                        </a>
                        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
                        </a>
                        <a href="javascript:;" class="reload" data-original-title="" title="">
                        </a>
                        <a href="javascript:;" class="remove" data-original-title="" title="">
                        </a>
                    </div>
                </div>
                <div class="portlet-body flip-scroll">
                    <table class="table table-bordered table-striped table-condensed flip-content">
                        <thead class="flip-content">
                        <tr>
                            <th width="20%">
                                company
                            </th>
                            <th>
                                contact person
                            </th>
                            <th class="numeric">
                                tel
                            </th>
                            <th class="numeric">
                                email
                            </th>
                            <th class="numeric">
                                cargo description
                            </th>
                            <th class="numeric">
                                code
                            </th>
                            <th class="numeric">
                                number and types of railcars
                            </th>
                            <th class="numeric">
                                cargo gross weight in one railcar
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>



                            <td>{{$request->company}}</td>
                            <td>{{$request->contact_person}}</td>
                            <td class="numeric">{{$request->tel}}</td>
                            <td class="numeric">{{$request->email}}</td>
                            <td class="numeric">{{$request->cargo_description}}</td>
                            <td class="numeric">{{$request->code}}</td>
                            <td class="numeric">{{$request->number_and_types_of_railcars}}</td>
                            <td class="numeric">{{$request->cargo_gross_weight_in_one_railcar}}</td>
                            {{--<td class="numeric">{{$request->cargo_total_gross_weight}}</td>--}}
                            {{--<td class="numeric">{{$request->dimensions}}</td>--}}
                            {{--<td class="numeric">{{$request->un_number}}</td>--}}
                            {{--<td class="numeric">{{$request->type_of_packaging}}</td>--}}
                            {{--<td class="numeric">{{$request->special_features}}</td>--}}
                            {{--<td class="numeric">{{$request->loading_date}}</td>--}}
                            {{--<td class="numeric">{{$request->loading_region}}</td>--}}
                            {{--<td class="numeric">{{$request->postal_code}}</td>--}}
                            {{--<td class="numeric">{{$request->destination_region}}</td>--}}
                            {{--<td class="numeric">{{$request->railcars_forwarding_route}}</td>--}}
                            {{--<td class="numeric">{{$request->railway_and_dispatch_station}}</td>--}}
                            {{--<td class="numeric">{{$request->railway_and_destination_station}}</td>--}}
                            {{--<td class="numeric">{{$request->customs_clearance}}</td>--}}
                            {{--<td class="numeric">{{$request->other_information}}</td>--}}
                        </tr>




                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
            <!-- BEGIN SAMPLE TABLE PORTLET-->




            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection