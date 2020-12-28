<template>
    <div class="container">
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
                                        <h4>Customer Profile</h4>
                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">User Profile</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">User Profile</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-header end -->

                    <!-- Page-body start -->
                    <div class="page-body">
                        <!--profile cover start-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cover-profile">
                                    <div class="profile-bg-img">
                                        <img class="profile-bg-img img-fluid" src="local_agent\files\assets\images\user-profile\bg-img1.jpg" alt="bg-img">
                                        <div class="card-block user-info">
                                            <div class="col-md-12">
                                                <div class="media-left">
                                                    <a href="#" class="profile-image">
                                                        <img class="user-img img-radius" src="local_agent\files\assets\images\user-profile\user-img.jpg" alt="user-img">
                                                    </a>
                                                </div>
                                                <div class="media-body row">
                                                    <div class="col-lg-12">
                                                        <div class="user-title">
                                                            <h2>Soeng Souy</h2>
                                                            <span class="text-white">Web designer</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="pull-right cover-btn">
                                                            <button type="button" class="btn btn-primary m-r-10 m-b-5"><i class="icofont icofont-plus"></i> Follow</button>
                                                            <button type="button" class="btn btn-primary"><i class="icofont icofont-ui-messaging"></i> Message</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--profile cover end-->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- tab header start -->
                                <div class="tab-header card">
                                    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Personal Info</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#binfo" role="tab">User's Services</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#contacts" role="tab">User's Contacts</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#review" role="tab">Reviews</a>
                                            <div class="slide"></div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- tab header end -->
                                <!-- tab content start -->
                                <div class="tab-content">
                                    <!-- tab panel personal start -->
                                    <div class="tab-pane active" id="personal" role="tabpanel">
                                        <!-- personal card start -->
                                        <div class="card">
                                            <div class="card-header" >
                                                <h5 class="card-header-text">About Me</h5>

                                                <a style="margin:5px;"  class="" v-for="user in users"     @click="deleteUsers(user.customer_reg_id)" id="delete-btn"  class="btn btn-sm  btn-danger btn-primary waves-effect waves-light f-right">
                                                    Delete Your Profile
                                                </a>

                                                        <a style="margin:5px;" v-for="user in users"   @click="editModal(user);" id="edit-btn"  class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                                            Edit Your Profile
                                                        </a>





                                            </div>

                                            <div class="card-block">
                                                <div class="view-info">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="general-info">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-xl-6">
                                                                        <div class="table-responsive">
                                                                            <table class="table m-0">
                                                                                <tbody>


                                                                                <tr v-for="user in users" >
                                                                                    <th  scope="row" >FullName</th>
                                                                                    <td>{{user.name}}</td>
                                                                                </tr>
                                                                                <tr v-for="user in users"  >
                                                                                    <th scope="row">Skill</th>
                                                                                    <td>{{ user.skill }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Birth Date</th>
                                                                                    <td>October 25th, 1990</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Marital Status</th>
                                                                                    <td>Single</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Location</th>
                                                                                    <td>New York, USA</td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end of table col-lg-6 -->
                                                                    <div class="col-lg-12 col-xl-6">
                                                                        <div class="table-responsive">
                                                                            <table class="table">
                                                                                <tbody>
                                                                                <tr v-for="user in users" >
                                                                                    <th scope="row">Email</th>
                                                                                    <td>{{user.email}}</td>
                                                                                </tr>
                                                                                <tr v-for="user in users" >
                                                                                    <th scope="row">Mobile Number</th>
                                                                                    <td>{{user.phone}}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Twitter</th>
                                                                                    <td>@xyz</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Skype</th>
                                                                                    <td>demo.skype</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Website</th>
                                                                                    <td><a href="#!">www.demo.com</a></td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end of table col-lg-6 -->
                                                                </div>
                                                                <!-- end of row -->
                                                            </div>
                                                            <!-- end of general info -->
                                                        </div>
                                                        <!-- end of col-lg-12 -->
                                                    </div>
                                                    <!-- end of row -->
                                                </div>
                                                <!-- end of view-info -->
                                                <div class="edit-info" style="display: none;">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="general-info">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <table class="table">
                                                                            <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="input-group">
                                                                                        <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                                                                        <input type="text" class="form-control" placeholder="Full Name">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="form-radio">
                                                                                        <div class="group-add-on">
                                                                                            <div class="radio radiofill radio-inline">
                                                                                                <label>
                                                                                                    <input type="radio" name="radio" checked=""><i class="helper"></i> Male
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio radiofill radio-inline">
                                                                                                <label>
                                                                                                    <input type="radio" name="radio"><i class="helper"></i> Female
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <input id="dropper-default" class="form-control" type="text" placeholder="Select Your Birth Date">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <select id="hello-single" class="form-control">
                                                                                        <option value="">---- Marital Status ----</option>
                                                                                        <option value="married">Married</option>
                                                                                        <option value="unmarried">Unmarried</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="input-group">
                                                                                        <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                                                                        <input type="text" class="form-control" placeholder="Address">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!-- end of table col-lg-6 -->
                                                                    <div class="col-lg-6">
                                                                        <table class="table">
                                                                            <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="input-group">
                                                                                        <span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>
                                                                                        <input type="text" class="form-control" placeholder="Mobile Number">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="input-group">
                                                                                        <span class="input-group-addon"><i class="icofont icofont-social-twitter"></i></span>
                                                                                        <input type="text" class="form-control" placeholder="Twitter Id">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <!-- <tr>
                                                        <td>
                                                            <div class="input-group">
                                                                <span class="input-group-addon" id="basic-addon1">@</span>
                                                                <input type="text" class="form-control" placeholder="Twitter Id">
                                                            </div>
                                                        </td>
                                                    </tr> -->
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="input-group">
                                                                                        <span class="input-group-addon"><i class="icofont icofont-social-skype"></i></span>
                                                                                        <input type="email" class="form-control" placeholder="Skype Id">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="input-group">
                                                                                        <span class="input-group-addon"><i class="icofont icofont-earth"></i></span>
                                                                                        <input type="text" class="form-control" placeholder="website">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!-- end of table col-lg-6 -->
                                                                </div>
                                                                <!-- end of row -->
                                                                <div class="text-center">
                                                                    <a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                                                    <a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>
                                                                </div>
                                                            </div>
                                                            <!-- end of edit info -->
                                                        </div>
                                                        <!-- end of col-lg-12 -->
                                                    </div>
                                                    <!-- end of row -->
                                                </div>
                                                <!-- end of edit-info -->
                                            </div>
                                            <!-- end of card-block -->
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-header-text">Description About Me</h5>


                                                    </div>
                                                    <div class="card-block user-desc">
                                                        <div class="view-desc">
                                                            <p v-for="user in users">{{user.about}}</p>
                                                        </div>
                                                        <div class="edit-desc" style="display: none;">
                                                            <div class="col-md-12">
                                                                                <textarea id="description" style="visibility: hidden;">                                                            &lt;p&gt;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?" "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able To Do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pain.&lt;/p&gt;
                                                        </textarea>
                                                            </div>
                                                            <div class="text-center">
                                                                <a href="#!" class="btn btn-primary waves-effect waves-light m-r-20 m-t-20">Save</a>
                                                                <a href="#!" id="edit-cancel-btn" class="btn btn-default waves-effect m-t-20">Cancel</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- personal card end-->
                                    </div>
                                    <!-- tab pane personal end -->
                                    <!-- tab pane info start -->
                                    <div class="tab-pane" id="binfo" role="tabpanel">
                                        <!-- info card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-header-text">User Services</h5>
                                            </div>
                                            <div class="card-block">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="card b-l-success business-info services m-b-20">
                                                            <div class="card-header">
                                                                <div class="service-header">
                                                                    <a href="#">
                                                                        <h5 class="card-header-text">Shivani Hero</h5>
                                                                    </a>
                                                                </div>
                                                                <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                         </span>
                                                                <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                                </div>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                                    </div>
                                                                    <!-- end of col-sm-8 -->
                                                                </div>
                                                                <!-- end of row -->
                                                            </div>
                                                            <!-- end of card-block -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card b-l-danger business-info services">
                                                            <div class="card-header">
                                                                <div class="service-header">
                                                                    <a href="#">
                                                                        <h5 class="card-header-text">Dress and Sarees</h5>
                                                                    </a>
                                                                </div>
                                                                <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                         </span>
                                                                <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                                </div>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                                    </div>
                                                                    <!-- end of col-sm-8 -->
                                                                </div>
                                                                <!-- end of row -->
                                                            </div>
                                                            <!-- end of card-block -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card b-l-info business-info services">
                                                            <div class="card-header">
                                                                <div class="service-header">
                                                                    <a href="#">
                                                                        <h5 class="card-header-text">Shivani Auto Port</h5>
                                                                    </a>
                                                                </div>
                                                                <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                         </span>
                                                                <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                                </div>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                                    </div>
                                                                    <!-- end of col-sm-8 -->
                                                                </div>
                                                                <!-- end of row -->
                                                            </div>
                                                            <!-- end of card-block -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card b-l-warning business-info services">
                                                            <div class="card-header">
                                                                <div class="service-header">
                                                                    <a href="#">
                                                                        <h5 class="card-header-text">Hair stylist</h5>
                                                                    </a>
                                                                </div>
                                                                <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                         </span>
                                                                <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                                </div>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                                    </div>
                                                                    <!-- end of col-sm-8 -->
                                                                </div>
                                                                <!-- end of row -->
                                                            </div>
                                                            <!-- end of card-block -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card b-l-danger business-info services">
                                                            <div class="card-header">
                                                                <div class="service-header">
                                                                    <a href="#">
                                                                        <h5 class="card-header-text">BMW India</h5>
                                                                    </a>
                                                                </div>
                                                                <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                         </span>
                                                                <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                                </div>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                                    </div>
                                                                    <!-- end of col-sm-8 -->
                                                                </div>
                                                                <!-- end of row -->
                                                            </div>
                                                            <!-- end of card-block -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card b-l-success business-info services">
                                                            <div class="card-header">
                                                                <div class="service-header">
                                                                    <a href="#">
                                                                        <h5 class="card-header-text">Shivani Hero</h5>
                                                                    </a>
                                                                </div>
                                                                <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                         </span>
                                                                <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                                </div>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                                    </div>
                                                                    <!-- end of col-sm-8 -->
                                                                </div>
                                                                <!-- end of row -->
                                                            </div>
                                                            <!-- end of card-block -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-header-text">Profit</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="main" style="height: 300px; width: 100%; -webkit-tap-highlight-color: transparent; user-select: none; background-color: rgba(0, 0, 0, 0);" _echarts_instance_="1605623794020"><div style="position: relative; overflow: hidden; width: 100px; height: 300px;"><div data-zr-dom-id="bg" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 100px; height: 300px; user-select: none;"></div><canvas width="100" height="300" data-zr-dom-id="0" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 100px; height: 300px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="100" height="300" data-zr-dom-id="1" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 100px; height: 300px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="100" height="300" data-zr-dom-id="_zrender_hover_" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 100px; height: 300px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas></div></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- info card end -->
                                    </div>
                                    <!-- tab pane info end -->
                                    <!-- tab pane contact start -->
                                    <div class="tab-pane" id="contacts" role="tabpanel">
                                        <div class="row">
                                            <div class="col-xl-3">
                                                <!-- user contact card left side start -->
                                                <div class="card">
                                                    <div class="card-header contact-user">
                                                        <img class="img-radius img-40" src="local_agent\files\assets\images\avatar-4.jpg" alt="contact-user">
                                                        <h5 class="m-l-10">John Doe</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <ul class="list-group list-contacts">
                                                            <li class="list-group-item active"><a href="#">All Contacts</a></li>
                                                            <li class="list-group-item"><a href="#">Recent Contacts</a></li>
                                                            <li class="list-group-item"><a href="#">Favourite Contacts</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-block groups-contact">
                                                        <h4>Groups</h4>
                                                        <ul class="list-group">
                                                            <li class="list-group-item justify-content-between">
                                                                Project
                                                                <span class="badge badge-primary badge-pill">30</span>
                                                            </li>
                                                            <li class="list-group-item justify-content-between">
                                                                Notes
                                                                <span class="badge badge-success badge-pill">20</span>
                                                            </li>
                                                            <li class="list-group-item justify-content-between">
                                                                Activity
                                                                <span class="badge badge-info badge-pill">100</span>
                                                            </li>
                                                            <li class="list-group-item justify-content-between">
                                                                Schedule
                                                                <span class="badge badge-danger badge-pill">50</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Contacts<span class="f-15"> (100)</span></h4>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="connection-list">
                                                            <a href="#"><img class="img-fluid img-radius" src="local_agent\files\assets\images\user-profile\follower\f-1.jpg" alt="f-1" data-toggle="tooltip" data-placement="top" data-original-title="Airi Satou">
                                                            </a>
                                                            <a href="#"><img class="img-fluid img-radius" src="local_agent\files\assets\images\user-profile\follower\f-2.jpg" alt="f-2" data-toggle="tooltip" data-placement="top" data-original-title="Angelica Ramos">
                                                            </a>
                                                            <a href="#"><img class="img-fluid img-radius" src="local_agent\files\assets\images\user-profile\follower\f-3.jpg" alt="f-3" data-toggle="tooltip" data-placement="top" data-original-title="Ashton Cox">
                                                            </a>
                                                            <a href="#"><img class="img-fluid img-radius" src="local_agent\files\assets\images\user-profile\follower\f-4.jpg" alt="f-4" data-toggle="tooltip" data-placement="top" data-original-title="Cara Stevens">
                                                            </a>
                                                            <a href="#"><img class="img-fluid img-radius" src="local_agent\files\assets\images\user-profile\follower\f-5.jpg" alt="f-5" data-toggle="tooltip" data-placement="top" data-original-title="Garrett Winters">
                                                            </a>
                                                            <a href="#"><img class="img-fluid img-radius" src="local_agent\files\assets\images\user-profile\follower\f-1.jpg" alt="f-6" data-toggle="tooltip" data-placement="top" data-original-title="Cedric Kelly">
                                                            </a>
                                                            <a href="#"><img class="img-fluid img-radius" src="local_agent\files\assets\images\user-profile\follower\f-3.jpg" alt="f-7" data-toggle="tooltip" data-placement="top" data-original-title="Brielle Williamson">
                                                            </a>
                                                            <a href="#"><img class="img-fluid img-radius" src="local_agent\files\assets\images\user-profile\follower\f-5.jpg" alt="f-8" data-toggle="tooltip" data-placement="top" data-original-title="Jena Gaines">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- user contact card left side end -->
                                            </div>
                                            <div class="col-xl-9">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <!-- contact data table card start -->
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-header-text">Contacts</h5>
                                                            </div>
                                                            <div class="card-block contact-details">
                                                                <div class="data_table_main table-responsive dt-responsive">
                                                                    <div id="simpletable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-xs-12 col-sm-12 col-sm-12 col-md-6"><div class="dataTables_length" id="simpletable_length"><label>Show <select name="simpletable_length" aria-controls="simpletable" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-xs-12 col-sm-12 col-md-6"><div id="simpletable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="simpletable"></label></div></div></div><div class="row"><div class="col-xs-12 col-sm-12"><table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">
                                                                        <thead>
                                                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 0px;">Name</th><th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 0px;">Email</th><th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Mobileno.: activate to sort column ascending" style="width: 0px;">Mobileno.</th><th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Favourite: activate to sort column ascending" style="width: 0px;">Favourite</th><th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 0px;">Action</th></tr>
                                                                        </thead>
                                                                        <tbody>



















































                                                                        <tr role="row" class="odd">
                                                                            <td class="sorting_1">Garrett Winters</td>
                                                                            <td></td>
                                                                            <td>9989988988</td>
                                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                            <td class="dropdown">
                                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                </div>
                                                                            </td>
                                                                        </tr></tbody>
                                                                        <tfoot>
                                                                        <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Email</th><th rowspan="1" colspan="1">Mobileno.</th><th rowspan="1" colspan="1">Favourite</th><th rowspan="1" colspan="1">Action</th></tr>
                                                                        </tfoot>
                                                                    </table></div></div><div class="row"><div class="col-xs-12 col-sm-12 col-md-5"><div class="dataTables_info" id="simpletable_info" role="status" aria-live="polite">Showing 1 to 10 of 51 entries</div></div><div class="col-xs-12 col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="simpletable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="simpletable_previous"><a href="#" aria-controls="simpletable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="simpletable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="simpletable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="simpletable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="simpletable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="simpletable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="simpletable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="simpletable_next"><a href="#" aria-controls="simpletable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- contact data table card end -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- tab pane contact end -->
                                    <div class="tab-pane" id="review" role="tabpanel">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-header-text">Review</h5>
                                            </div>
                                            <div class="card-block">
                                                <ul class="media-list">
                                                    <li class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object img-radius comment-img" src="local_agent\files\assets\images\avatar-1.jpg" alt="Generic placeholder image">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="media-heading">Sortino media<span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                            <div class="stars-example-css review-star">
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                            </div>
                                                            <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                            <div class="m-b-25">
                                                                <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                            </div>
                                                            <hr>
                                                            <!-- Nested media object -->
                                                            <div class="media mt-2">
                                                                <a class="media-left" href="#">
                                                                    <img class="media-object img-radius comment-img" src="local_agent\files\assets\images\avatar-2.jpg" alt="Generic placeholder image">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading">Larry heading <span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                                    <div class="stars-example-css review-star">
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                    </div>
                                                                    <p class="m-b-0"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                                    <div class="m-b-25">
                                                                        <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                                    </div>
                                                                    <hr>
                                                                    <!-- Nested media object -->
                                                                    <div class="media mt-2">
                                                                        <div class="media-left">
                                                                            <a href="#">
                                                                                <img class="media-object img-radius comment-img" src="local_agent\files\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h6 class="media-heading">Colleen Hurst <span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                                            <div class="stars-example-css review-star">
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                            </div>
                                                                            <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                                            <div class="m-b-25">
                                                                                <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Nested media object -->
                                                            <div class="media mt-2">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object img-radius comment-img" src="local_agent\files\assets\images\avatar-1.jpg" alt="Generic placeholder image">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading">Cedric Kelly<span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                                    <div class="stars-example-css review-star">
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                    </div>
                                                                    <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                                    <div class="m-b-25">
                                                                        <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                                    </div>
                                                                    <hr>
                                                                </div>
                                                            </div>
                                                            <div class="media mt-2">
                                                                <a class="media-left" href="#">
                                                                    <img class="media-object img-radius comment-img" src="local_agent\files\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading">Larry heading <span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                                    <div class="stars-example-css review-star">
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                    </div>
                                                                    <p class="m-b-0"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                                    <div class="m-b-25">
                                                                        <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                                    </div>
                                                                    <hr>
                                                                    <!-- Nested media object -->
                                                                    <div class="media mt-2">
                                                                        <div class="media-left">
                                                                            <a href="#">
                                                                                <img class="media-object img-radius comment-img" src="local_agent\files\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h6 class="media-heading">Colleen Hurst <span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                                            <div class="stars-example-css review-star">
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                            </div>
                                                                            <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                                            <div class="m-b-25">
                                                                                <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="media mt-2">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object img-radius comment-img" src="local_agent\files\assets\images\avatar-2.jpg" alt="Generic placeholder image">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading">Mark Doe<span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                                    <div class="stars-example-css review-star">
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                    </div>
                                                                    <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                                    <div class="m-b-25">
                                                                        <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                                    </div>
                                                                    <hr>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Right addon">
                                                    <span class="input-group-addon"><i class="icofont icofont-send-mail"></i></span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- tab content end -->
                            </div>
                        </div>
                    </div>
                    <!-- Page-body end -->
                </div>
            </div>
            <!-- Main body end -->
            <div id="styleSelector">

                <div class="selector-toggle"><a href="javascript:void(0)"></a></div><ul><li><p class="selector-title main-title st-main-title"><b>Adminty </b>Customizer</p><span class="text-muted">Live customizer with tons of options</span></li><li><p class="selector-title">Main layouts</p></li><li><div class="theme-color"><a href="#" class="navbar-theme" navbar-theme="themelight1"><span class="head"></span><span class="cont"></span></a><a href="#" class="navbar-theme" navbar-theme="theme1"><span class="head"></span><span class="cont"></span></a></div></li></ul><div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: calc(100vh - 440px);"><div class="style-cont m-t-10" style="overflow: hidden; width: auto; height: calc(100vh - 440px);"><ul class="nav nav-tabs  tabs" role="tablist"><li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#sel-layout" role="tab">Layouts</a></li><li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sel-sidebar-setting" role="tab">Sidebar Settings</a></li></ul><div class="tab-content tabs"><div class="tab-pane active" id="sel-layout" role="tabpanel"><ul><li class="theme-option"><div class="checkbox-fade fade-in-primary"><label><input type="checkbox" value="false" id="sidebar-position" name="sidebar-position" checked=""><span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span><span>Fixed Sidebar Position</span></label></div></li><li class="theme-option"><div class="checkbox-fade fade-in-primary"><label><input type="checkbox" value="false" id="header-position" name="header-position" checked=""><span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span><span>Fixed Header Position</span></label></div></li></ul></div><div class="tab-pane" id="sel-sidebar-setting" role="tabpanel"><ul><li class="theme-option"><p class="sub-title drp-title">Menu Type</p><div class="form-radio" id="menu-effect"><div class="radio radio-inverse radio-inline" data-toggle="tooltip" title="" data-original-title="simple icon"><label><input type="radio" name="radio" value="st6" onclick="handlemenutype(this.value)" checked="true"><i class="helper"></i><span class="micon st6"><i class="feather icon-command"></i></span></label></div><div class="radio  radio-primary radio-inline" data-toggle="tooltip" title="" data-original-title="color icon"><label><input type="radio" name="radio" value="st5" onclick="handlemenutype(this.value)"><i class="helper"></i><span class="micon st5"><i class="feather icon-command"></i></span></label></div></div></li><li class="theme-option"><p class="sub-title drp-title">SideBar Effect</p><select id="vertical-menu-effect" class="form-control minimal"><option name="vertical-menu-effect" value="shrink">shrink</option><option name="vertical-menu-effect" value="overlay">overlay</option><option name="vertical-menu-effect" value="push">Push</option></select></li><li class="theme-option"><p class="sub-title drp-title">Hide/Show Border</p><select id="vertical-border-style" class="form-control minimal"><option name="vertical-border-style" value="solid">Style 1</option><option name="vertical-border-style" value="dotted">Style 2</option><option name="vertical-border-style" value="dashed">Style 3</option><option name="vertical-border-style" value="none">No Border</option></select></li><li class="theme-option"><p class="sub-title drp-title">Drop-Down Icon</p><select id="vertical-dropdown-icon" class="form-control minimal"><option name="vertical-dropdown-icon" value="style1">Style 1</option><option name="vertical-dropdown-icon" value="style2">style 2</option><option name="vertical-dropdown-icon" value="style3">style 3</option></select></li><li class="theme-option"><p class="sub-title drp-title">Sub Menu Drop-down Icon</p><select id="vertical-subitem-icon" class="form-control minimal"><option name="vertical-subitem-icon" value="style1">Style 1</option><option name="vertical-subitem-icon" value="style2">style 2</option><option name="vertical-subitem-icon" value="style3">style 3</option><option name="vertical-subitem-icon" value="style4">style 4</option><option name="vertical-subitem-icon" value="style5">style 5</option><option name="vertical-subitem-icon" value="style6">style 6</option></select></li></ul></div><ul><li><p class="selector-title">Header Brand color</p></li><li class="theme-option"><div class="theme-color"><a href="#" class="logo-theme" logo-theme="theme1"><span class="head"></span><span class="cont"></span></a><a href="#" class="logo-theme" logo-theme="theme2"><span class="head"></span><span class="cont"></span></a><a href="#" class="logo-theme" logo-theme="theme3"><span class="head"></span><span class="cont"></span></a><a href="#" class="logo-theme" logo-theme="theme4"><span class="head"></span><span class="cont"></span></a><a href="#" class="logo-theme" logo-theme="theme5"><span class="head"></span><span class="cont"></span></a></div></li><li><p class="selector-title">Header color</p></li><li class="theme-option"><div class="theme-color"><a href="#" class="header-theme" header-theme="theme1"><span class="head"></span><span class="cont"></span></a><a href="#" class="header-theme" header-theme="theme2"><span class="head"></span><span class="cont"></span></a><a href="#" class="header-theme" header-theme="theme3"><span class="head"></span><span class="cont"></span></a><a href="#" class="header-theme" header-theme="theme4"><span class="head"></span><span class="cont"></span></a><a href="#" class="header-theme" header-theme="theme5"><span class="head"></span><span class="cont"></span></a><a href="#" class="header-theme" header-theme="theme6"><span class="head"></span><span class="cont"></span></a></div></li><li><p class="selector-title">Active link color</p></li><li class="theme-option"><div class="theme-color"><a href="#" class="active-item-theme small" active-item-theme="theme1">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme2">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme3">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme4">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme5">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme6">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme7">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme8">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme9">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme10">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme11">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme12">&nbsp;</a></div></li><li><p class="selector-title">Menu Caption Color</p></li><li class="theme-option"><div class="theme-color"><a href="#" class="leftheader-theme small" lheader-theme="theme1">&nbsp;</a><a href="#" class="leftheader-theme small" lheader-theme="theme2">&nbsp;</a><a href="#" class="leftheader-theme small" lheader-theme="theme3">&nbsp;</a><a href="#" class="leftheader-theme small" lheader-theme="theme4">&nbsp;</a><a href="#" class="leftheader-theme small" lheader-theme="theme5">&nbsp;</a><a href="#" class="leftheader-theme small" lheader-theme="theme6">&nbsp;</a></div></li></ul></div></div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 215.577px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div><ul><li><a href="http://html.codedthemes.com/Adminty/doc" target="_blank" class="btn btn-primary btn-block m-r-15 m-t-5 m-b-10">Online Documentation</a></li><li class="text-center"><span class="text-center f-18 m-t-15 m-b-15 d-block">Thank you for sharing !</span><a href="#!" target="_blank" class="btn btn-facebook soc-icon m-b-20"><i class="feather icon-facebook"></i></a><a href="#!" target="_blank" class="btn btn-twitter soc-icon m-l-20 m-b-20"><i class="feather icon-twitter"></i></a></li></ul></div>
        </div>



        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 v-show="editMode" class="modal-title" id="addNewLabel">Update Your Profile</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="updateUser()" >


                        <div class="modal-body">
                            <!--Required to put the form here -->
                            <div class="form-group">
                                <input v-model="form.name" type="text" name="name"
                                       placeholder="Enter your name"
                                       class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                                <has-error :form="form" field="name"></has-error>
                            </div>
                            <div class="form-group">
                                <input v-model="form.email" type="email" name="email"
                                       placeholder="Enter your email here"
                                       class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                                <has-error :form="form" field="email"></has-error>
                            </div>
                            <div class="form-group">
                            <textarea v-model="form.bio" type="text" name="bio"
                                      placeholder="Enter your bio here"
                                      class="form-control" :class="{ 'is-invalid': form.errors.has('bio') }"></textarea>
                                <has-error :form="form" field="bio"></has-error>
                            </div>
                            <div class="form-group">
                                <input v-model="form.skill" type="text" name="skill"
                                       placeholder="Enter your skill here"
                                       class="form-control" :class="{ 'is-invalid': form.errors.has('skill') }">
                                <has-error :form="form" field="skill"></has-error>
                            </div>
                            <div class="form-group">
                                <input v-model="form.interest" type="text" name="interest"
                                       placeholder="Enter your interests here"
                                       class="form-control" :class="{ 'is-invalid': form.errors.has('interest') }">
                                <has-error :form="form" field="interest"></has-error>
                            </div>

                            <div class="form-group">
                                <textarea v-model="form.about"  name="about"
                                          placeholder="Enter some info about you"
                                          class="form-control" :class="{ 'is-invalid': form.errors.has('about') }"></textarea>
                                <has-error :form="form" field="about"></has-error>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button v-show="!editMode" type="submit" class="btn btn-primary">Add New</button>
                            <button v-show="editMode" type="submit" class="btn btn-success">Update</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>






</template>

<script>
    export default {
        data() {
            return {
                //variables
                editMode:false,
                //Here the user object is created
                users:{},
                form: new Form({
                    customer_reg_id:'',
                    name:'',
                    email:'',
                    age : '',
                    skill: '',
                    interest: '',
                    bio: '',
                    about:'',
                    photo: ''
                })
            }
        },
        methods: {
            updateUser(id){
                // console.log('editing data');
                this.form.put('customer/'+this.form.customer_reg_id)
                    .then(()=>{

                        //success message
                        $('#addNew').modal('hide');

                        swal.fire(
                            'updated!',
                            'Your file has been updated.',
                            'success'
                        )
                        //Here the event is created
                        Fire.$emit('afterCreate');
                    }).catch(()=>{

                })
            },

            editModal(user) {
                this.editMode = true;
                //reset the form
                this.form.reset();
                $('#addNew').modal('show');
                this.form.fill(user);


            },
            newModal() {
                this.editMode = false;
                //reset the form
                this.form.reset();
                $('#addNew').modal('show');


            },
            loadUser(){
                //made a get request with data
                axios.get('customer/').
                then(({ data }) => (this.users = data));


            },


            createUser(){
                //made post request
                this.form.post('customer').then(()=>{
                    //the event is initialized after creating the user
                    Fire.$emit('afterCreate');

                    //hide the modal window
                    $('#addNew').modal('hide')
                    //sweet alert handling
                    toast.fire({
                        icon: 'success',
                        title: 'Signed in successfully'
                    })
                }).catch(()=>{

                })

            },
            deleteUsers(id){
                swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    //Send request to the server
                    this.form.delete('customer/'+id).then(()=>{
                        if (result.isConfirmed) {
                            swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                            //Here the event is created
                            Fire.$emit('afterCreate');

                        }
                    }).catch(()=>{
                        swal("Failed","There was something mistakes")
                    });

                })
            },


        },
        created(){
            //When the component is created this is called
            this.loadUser();
            //After load the user here we fire on(updated)
            Fire.$on('afterCreate',()=>{
                this.loadUser();
            });

        }
    }
</script>
