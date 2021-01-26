@extends('layouts.local_agent.local_agent_master')

@section('content')
    <h3 style="text-align: center; padding-top:50px;">Provided Services</h3>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
            <tr>

                <th>Candidate Email</th>
{{--                <th>Service</th>--}}
                <th>Package</th>
{{--                <th>Payment_status</th>--}}
{{--                <th>Job_approval</th>--}}
                <th>Tasks</th>
{{--                <th>Update</th>--}}
{{--                <th>Delete</th>--}}
            </tr>
            </thead>
            <tbody>

                @if ($provided_services->isNotEmpty())


{{--                <td>{{$package_name->package_type}}</td>--}}

                @foreach($provided_services as $provided_service)
                    <tr>
                        <td>{{$provided_service->email}}</td>
                    </tr>
                @endforeach
                @endif





            </tbody>
        </table>
    </div>


@endsection
