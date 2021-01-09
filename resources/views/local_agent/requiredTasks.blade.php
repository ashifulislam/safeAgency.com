@extends('layouts.local_agent.local_agent_master')

@section('content')
    <h3 style="margin-left:8px;">Required Task</h3>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
            <tr>

                <th>Title</th>
                <th>Type</th>
                <th>Description</th>
                <th>Packages</th>
                <th>candidate_id</th>
{{--                <th>Update</th>--}}
{{--                <th>Delete</th>--}}
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($services as $posted_service)

                <td>{{$posted_service->service_title}}</td>
                    <td>{{$posted_service->service_type}}</td>
                    <td>{{$posted_service->service_description}}</td>
                    <td>{{$posted_service->package_type}}</td>
{{--                <td>--}}
{{--                   <button data-toggle="modal"  data-servicetitle="{{$serviceType->service_title}}" data-servicetype="{{$serviceType->service_type}}" data-servicetypeid="{{$serviceType->id}}" class="btn btn-info" data-target="#edit" >Edit</button>--}}
{{--                </td>--}}
{{--                    <td>--}}
{{--                        <button class="btn btn-danger" data-toggle="modal" class="btn btn-info" data-servicetypeid="{{$serviceType->id}}"  data-target="#delete">Delete</button>--}}
{{--                    </td>--}}
            </tr>
            @endforeach


            </tbody>
        </table>
    </div>


@endsection
