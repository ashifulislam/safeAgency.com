

@extends('layouts.local_agent.local_agent_master')
@section('content')


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="SSLCommerz">
        <title>Visa application</title>

        <!-- Bootstrap core CSS -->
{{--        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"--}}
{{--              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
    </head>
    <body class="bg-light">
    <div class="container">
        <div class="py-5 text-center">
            <h2>Visa Application</h2>
            <p class="lead">Here is the visa application form</p>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Job Approval Details</span>
                    <span class="badge badge-secondary badge-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>

                            @foreach($employer_information as $employer_info)
                            <h6 class="my-0">Employer's Email</h6>
                            <p class="text-muted">{{$employer_info->email}}</p>
                                <h6 class="my-0">Employer's Company</h6>
                                <p class="text-muted">{{$employer_info->companyName}}</p>
                                <h6 class="my-0">Employer's Company Country</h6>
                                <p class="text-muted">{{$employer_info->companyCountry}}</p>
                                @endforeach




                        @foreach($job_positions as $job_position)
                                <h6 class="my-0">Position applied for</h6>
                                <p class="text-muted">{{$job_position->jobPosition}}</p>
                                    @endforeach



                        </div>
                        {{--                    <span class="text-muted">1000</span>--}}
                    </li>
                    {{--                <li class="list-group-item d-flex justify-content-between lh-condensed">--}}
                    {{--                    <div>--}}
                    {{--                        <h6 class="my-0">Second product</h6>--}}
                    {{--                        <small class="text-muted">Brief description</small>--}}
                    {{--                    </div>--}}
                    {{--                    <span class="text-muted">50</span>--}}
                    {{--                </li>--}}
                    {{--                <li class="list-group-item d-flex justify-content-between lh-condensed">--}}
                    {{--                    <div>--}}
                    {{--                        <h6 class="my-0">Third item</h6>--}}
                    {{--                        <small class="text-muted">Brief description</small>--}}
                    {{--                    </div>--}}
                    {{--                    <span class="text-muted">150</span>--}}
                    {{--                </li>--}}
{{--                    <li class="list-group-item d-flex justify-content-between">--}}
{{--                        <span>Total (BDT)</span>--}}
{{--                        <strong>{{$demands}}</strong>--}}
{{--                    </li>--}}

                </ul>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Candidate information</h4>
                <form action="{{ route('visaApplication.store') }}" method="POST" class="needs-validation">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token" />

                    @foreach($employer_information as $employer_info)
                    <input type="hidden" value="{{$employer_info->companyName}}" name="company_name" />
                    <input type="hidden" value="{{$employer_info->companyCountry}}" name="company_country" />
                    @endforeach

                    <input type="hidden" value="{{$job_post_id->jobPostId}}" name="job_post_id"/>

{{--                    @foreach($job_post_id as $job_post_id)--}}
{{--                        <input type="hidden" value="{{}}" name="job_post_id"/>--}}
{{--                    @endforeach--}}
                    <input type="hidden" value="approved" name="application_status" />
                    <input type="hidden" value="{{$candidate_id}}" name="candidate_id" />

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="firstName">Full name</label>
                            <input type="text" name="candidate_name" class="form-control" id="candidate_name" placeholder="Enter Name"
                            value="{{$candidate_name}}">

                                @error('candidate_name')
                                <strong style="padding:inherit" class="alert alert-danger">{{ $message }}</strong>
                                @enderror
                        </div>
                    </div>


{{--                    <div class="mb-3">--}}
{{--                        <label for="mobile">Mobile</label>--}}
{{--                        <div class="input-group">--}}
{{--                            <div class="input-group-prepend">--}}
{{--                                <span class="input-group-text">+88</span>--}}
{{--                            </div>--}}
{{--                            <input type="text" name="customer_mobile" class="form-control" id="mobile" placeholder="Mobile"--}}
{{--                                   required>--}}
{{--                            <div class="invalid-feedback" style="width: 100%;">--}}
{{--                                Your Mobile number is required.--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="mb-3">
                        <label for="email">Email <span class="text-muted"></span></label>
                        <input type="email" name="candidate_email" class="form-control" id="email"
                               placeholder="you@example.com" value="{{$candidate_email}}" />

                            @error('candidate_email')
                            <strong style="padding:inherit" class="alert alert-danger">{{ $message }}</strong>
                            @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email">Date of Birth <span class="text-muted"></span></label>
                        <input type="date" name="candidate_date_of_birth" class="form-control" id="date_of_birth" />
                        {{--                               placeholder="you@example.com" value="{{$candidates->email}}" required>--}}
                        @error('candidate_date_of_birth')
                        <strong style="padding:inherit" class="alert alert-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="passport">Passport_number <span class="text-muted"></span></label>
                        <input type="text" name="passport_no" class="form-control" id="passport"/>
                        {{--                               placeholder="you@example.com" value="{{$candidates->email}}" required>--}}
                        @error('candidate_date_of_birth')
                        <strong style="padding:inherit" class="alert alert-danger">{{ $message }}</strong>
                        @enderror
                    </div>

{{--                    <div class="mb-3">--}}
{{--                        <label for="email">Position held <span class="text-muted"></span></label>--}}
{{--                        <input type="email" name="customer_email" class="form-control" id="email"/>--}}
{{--                        --}}{{--                               placeholder="you@example.com" value="{{$candidates->email}}" required>--}}
{{--                        <div class="invalid-feedback">--}}
{{--                            Please enter a valid email address for shipping updates.--}}
{{--                        </div>--}}
{{--                    </div>--}}



{{--                    <div class="mb-3">--}}
{{--                        <label for="address">Address</label>--}}
{{--                        <input type="text" class="form-control" name="first_address" id="address" placeholder="Enter your address"--}}
{{--                               required>--}}
{{--                        <div class="invalid-feedback">--}}
{{--                            Please enter your shipping address.--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Country</label>
                            <select class="custom-select d-block w-100" name="country" id="country" required>
                                <option value="">Choose...</option>
                                <option value="{{$nationality_info->country}}">{{$nationality_info->country}}</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">State</label>
                            <select class="custom-select d-block w-100" name="state" id="state" required>
                                <option value="">Choose...</option>
                                <option value="{{$nationality_info->state}}">{{$nationality_info->state}}</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" id="zip" name="zip" value="{{$nationality_info->zip}}" placeholder="" required>
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>
                    </div>
                    <hr>
{{--                    <hr class="mb-4">--}}
{{--                    <div class="custom-control custom-checkbox">--}}
{{--                        <input type="checkbox" class="custom-control-input" id="same-address">--}}
{{--                        <input type="hidden" value="1200" name="amount" id="total_amount" required/>--}}
{{--                        <label class="custom-control-label" for="same-address">Shipping address is the same as my billing--}}
{{--                            address</label>--}}
{{--                    </div>--}}
{{--                    <div class="custom-control custom-checkbox">--}}
{{--                        <input type="checkbox" class="custom-control-input" id="save-info">--}}
{{--                        <label class="custom-control-label" for="save-info">Save this information for next time</label>--}}
{{--                    </div>--}}
{{--                    <hr class="mb-4">--}}
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Apply</button>
                </form>
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2019 Company Name</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
    {{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"--}}
    {{--        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"--}}
    {{--        crossorigin="anonymous"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"--}}
    {{--        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"--}}
    {{--        crossorigin="anonymous"></script>--}}
    {{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"--}}
    {{--        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"--}}
    {{--        crossorigin="anonymous"></script>--}}
@endsection
