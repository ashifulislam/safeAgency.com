@extends('layouts.local_agent.local_agent_master')

@section('content')
    <h3 style="margin-left:8px;">All Categories</h3>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
            <tr>
                <th>ID</th>

                <th>PackageType</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($packageTypes as $packageType)
                <td>{{$packageType->id}}</td>

                    <td>{{$packageType->package_type}}</td>
                <td>
                   <button data-toggle="modal" data-packagetype="{{$packageType->package_type}}" data-packagetypeid="{{$packageType->id}}" class="btn btn-info" data-target="#editPackage" >Edit</button>
                </td>
                    <td>
                        <button class="btn btn-danger" data-toggle="modal" class="btn btn-info" data-packagetypeid="{{$packageType->id}}"  data-target="#deletePackage">Delete</button>
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
                    <h4 class="modal-title" id="myModalLabel">New Category</h4>
                </div>
                <form name="serviceType" action="{{route('packageType.store')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">

                            <div class="form-group">
                                <label for="des">Package Type</label>
                                <input type="text" class="form-control" name="package_type" id="package_type" required><br>

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

    <div class="modal fade" id="editPackage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
                </div>
                <form  action="{{route('packageType.update','updatePackage')}}" method="post">

                   {{method_field('patch')}}
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="package_type_id" id="packageType_id" value="">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="service_type">Type</label>
                                    <input type="text" class="form-control" name="package_type" id="package_type"><br>


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
    <div class="modal modal-danger fade" id="deletePackage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center"  id="myModalLabel">Delete </h4>
                </div>
                <form name="package_type" action="{{route('packageType.destroy','testUpdate')}}" method="post">
                    @method('delete')
                    @csrf

                    <div class="modal-body">
                        <p class="text-center">
                            Are you want to sure delete?
                        </p>
                        <input type="hidden" name="package_type_id" id="packageType_id" value="">

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
