@extends('app-admin')
@section('admin-content')
    <h1>View Contact</h1>

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

                            <th class="numeric">Name</th>
                            <th class="numeric">Email</th>
                            <th class="numeric">Team</th>
                            <th class="numeric">Message</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$contact->name}}</td>

                            <td>{{$contact->email}}</td>
                            <td>{{$contact->team}}</td>
                            <td>{{$contact->message}}</td>


                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>





            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection