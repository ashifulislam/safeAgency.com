@extends('layouts.local_agent.local_agent_master')

@section('content')
    <h3 style="text-align: center; padding-top:50px;">Required Task</h3>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
            <tr>

                <th>Package</th>
                <th>Service</th>
                <th>Candidate_email</th>
                <th>Payment_status</th>
{{--                <th>Job_approval</th>--}}
                <th>Tasks</th>
{{--                <th>Update</th>--}}
{{--                <th>Delete</th>--}}
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($candidate_details as $candidate_detail)

                <td>{{$candidate_detail->package_type}}</td>
                    <td>{{$candidate_detail->service_type}}</td>
                    <td>{{$candidate_detail->email}}</td>
                    <td>{{$candidate_detail->payment_status}}</td>
{{--                    <td>{{$candidate_detail->status}}</td>--}}
                <td>
                    @if($candidate_detail->service_type === 'Can manage visa')

                        <a href="{{route('visa_application',[$candidate_detail->firstName,$candidate_detail->email,$candidate_detail->id])}}"> <button style="height:30px; padding-top:4px;" class="btn btn-success">Apply Visa</button></a>

                        @elseif($candidate_detail->service_type==='Can search job')
                     <a href="{{route('home.page')}}"><button  style="height:30px; padding-top:4px;" class="btn btn-success">Search Job</button></a>
                    @elseif($candidate_detail->service_type==='Can apply job')
                     <a href="{{route('home.page')}}"><button style="height:30px; padding-top:4px;" class="btn btn-success">Apply Job</button></a>
                    @elseif($candidate_detail->service_type==='Can manage job approval')
                        <a href="{{route('home.page')}}"><button style="height:30px; padding-top:4px;" class="btn btn-success">Job Approval</button></a>
                    @elseif($candidate_detail->service_type==='Can communicate with employer')
                        <a href="{{route('home.page')}}"><button style="height:30px; padding-top:4px;" class="btn btn-success">Communicate</button></a>
                    @elseif($candidate_detail->service_type==='Can find a company')
                        <a href="{{route('home.page')}}"><button style="height:30px; padding-top:4px;" class="btn btn-success">Find Company</button></a>
                    @elseif($candidate_detail->service_type==='Can subscribe')
                        <a href="{{route('home.page')}}"><button style="height:30px; padding-top:4px;" class="btn btn-success">Subscribe</button></a>
                    @endif

                </td>
{{--                    <td>--}}
{{--                        <button class="btn btn-danger" data-toggle="modal" class="btn btn-info" data-servicetypeid="{{$serviceType->id}}"  data-target="#delete">Delete</button>--}}
{{--                    </td>--}}
            </tr>
            @endforeach


            </tbody>
        </table>
    </div>


@endsection
