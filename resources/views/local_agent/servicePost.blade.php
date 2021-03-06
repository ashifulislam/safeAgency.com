@extends('layouts.local_agent.local_agent_master')

@section('content')
    <h3 style="margin-left:8px;">Post Service</h3>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
            <tr>

                <th>Title</th>
                <th>Type</th>
                <th>Description</th>
                <th>Packages</th>
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
                <td>
{{--                   <button data-toggle="modal"  data-servicetitle="{{$serviceType->service_title}}" data-servicetype="{{$serviceType->service_type}}" data-servicetypeid="{{$serviceType->id}}" class="btn btn-info" data-target="#edit" >Edit</button>--}}
                </td>
                    <td>
{{--                        <button class="btn btn-danger" data-toggle="modal" class="btn btn-info" data-servicetypeid="{{$serviceType->id}}"  data-target="#delete">Delete</button>--}}
                    </td>
            </tr>
            @endforeach


            </tbody>
        </table>
    </div>
    <!-- Button trigger modal -->
    <button style="margin-left:8px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
       Add New
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Post service</h4>
                </div>
                <form name="serviceType" action="{{route('postService.store')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Type: </label>
                            <select id="type" name="type_id">
                                <option name="">select type</option>

                            @foreach($service_types as $service_type)
                                <option name="type_id" value="{{$service_type->id}}">{{$service_type->service_type}}</option>
                                @endforeach
                            </select>
                            <br>
                            <br>
                            <label for="package_type">Package: </label>
                            <select id="package_type" name="package_type">
                                <option name="">select type</option>

                                  @foreach($packages as $singlePackage)
                                    <option name="package_type" value="{{$singlePackage->id}}">{{$singlePackage->package_type}}</option>
                                @endforeach
                            </select>
                            <div class="form-group">
                                <label for="des">Description</label>
                                <textarea name="description" id="des"  cols="20" rows="5" class="form-control" ></textarea>

                            </div>

                            <div class="form-group">
                                <label for="des">Demand</label><br>
                                <input type="number" name="demand" required>

                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
                </div>
                <form  action="" method="post">

                   {{method_field('patch')}}
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="service_type_id" id="serviceType_id" value="">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Title </label>
                                <input type="text" class="form-control" name="service_title" id="service_title"><br>

                                <br>
                                <div class="form-group">
                                    <label for="service_type">Type</label>
                                    <input type="text" class="form-control" name="service_type" id="service_type"><br>


                                </div>

                            </div>
                        </div>                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Edit </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center"  id="myModalLabel">Delete </h4>
                </div>
                <form name="service_type" action="" method="post">
                    @method('delete')
                    @csrf

                    <div class="modal-body">
                        <p class="text-center">
                            Are you want to sure delete?
                        </p>
                        <input type="hidden" name="service_type_id" id="serviceType_id" value="">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary">Delete </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
