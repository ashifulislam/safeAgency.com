@extends('layouts.candidate.customer_view_master')
@section('content')

    <html>
    <body>

    <div class="tab-header card">
        <ul role="tablist" id="mytab" class="nav nav-tabs md-tabs tab-timeline">

            <li class="nav-item">
                <a data-toggle="tab" href="#binfo" role="tab" class="nav-link active" aria-selected="true">Agent's Services</a>
                <div class="slide"></div></li>


        </ul>
    </div>

    <div class="tab-content">



        <div id="personal" role="tabpanel" class="tab-pane"><div class="card">
          </div> <div class="row"><div class="col-lg-12"><div class="card">
                            <div class="edit-desc" style="display: none;"><div class="col-md-12"><textarea id="description" style="visibility: hidden;">                                                            &lt;p&gt;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?" "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able To Do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pain.&lt;/p&gt;
                                                    </textarea></div>
                                <div class="text-center"><a href="#!" class="btn btn-primary waves-effect waves-light m-r-20 m-t-20">Save</a> <a href="#!" id="edit-cancel-btn" class="btn btn-default waves-effect m-t-20">Cancel</a></div></div></div></div></div></div></div> <div id="binfo" role="tabpanel" class="tab-pane active"><div class="card"><div class="card-header"><h5 class="card-header-text">Agent Services</h5></div>
            <div class="card-block">
                <div class="row">

                    <div class="col-md-6">
                        @foreach($services as $singleService)

                        <div class="card b-l-success business-info services m-b-20"><div class="card-header">
                                    <div class="service-header"><a href="#"><h5 class="card-header-text">{{$singleService->service_type}}</h5></a></div> <span data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip" class="dropdown-toggle addon-btn text-muted f-right service-btn"></span>
                                <div class="dropdown-menu dropdown-menu-right b-none services-list"><a href="#!" class="dropdown-item"><i class="icofont icofont-edit"></i> Edit</a> <a href="#!" class="dropdown-item"><i class="icofont icofont-ui-delete"></i> Delete</a> <a href="#!" class="dropdown-item"><i class="icofont icofont-eye-alt"></i> View</a></div></div>
                            <div class="card-block"><div class="row"><div class="col-sm-12"><p class="task-detail">{{$singleService->service_description}}</p></div></div></div></div></div>
                    <div class="col-md-6">
                        @endforeach
                    </div>


                </div>

                    @if(!empty($packageTypeId))
                    <form style="float:left" action="{{route('sendHireRequest',[$agent_id,$packageTypeId->package_type_id])}}" method="post">
                        @csrf
                        <label style="float:left" class="btn btn-success">DEMAND  : {{$demands}}Tk</label>
                        &nbsp;
                        &nbsp;
                        <input type="hidden" name="status" value="pending">

                        <button type="submit" class="btn btn-primary">HIRE NOW</button>

                    </form>

                        &nbsp;
                        &nbsp;

                <a href="{{route('payment',[$demands,$packageTypeId->package_type,$agent_id,$packageTypeId->package_type_id])}}"><button type="submit" class="btn btn-success">PAYMENT</button></a>
                @endif
             </div>

        </div>
      </div>


</body>

</html>
@endsection

