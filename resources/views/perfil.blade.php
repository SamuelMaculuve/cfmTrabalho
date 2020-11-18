@extends('layouts.base')
@section('titulo', '')
@section('content')
<div class="page-wrapper">
    <!-- Page-body start -->
    <div class="page-body">
        <div class="card">
            <div class="row">
                <div class="col-sm-3">
                    <div class="panel widget light-widget panel-bd-top">
                        <div class="panel-heading no-title"> </div>
                        <div class="panel-body">
                            <div class="text-center vd_info-parent"> <img alt="example image" src="{{ asset('img/big.jpg') }}"> </div>

                            <h2 class="font-semibold mgbt-xs-5">Mariah Caraiban</h2>

                            <p>Ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <div class="mgtp-20">
                                <table class="table table-striped table-hover">
                                    <tbody>
                                    <tr>
                                        <td style="width:60%;">Status</td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>User Rating</td>
                                        <td><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Member Since</td>
                                        <td> Jan 07, 2014 </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- panel widget -->


                    <!-- panel widget -->
                </div>
                <div class="col-sm-9">
                    <p class="pd-10" ></p>
                    <div class="tabs widget">
                        <ul class="nav nav-tabs widget">
                            <li class="active"> <a data-toggle="tab" href="#profile-tab"> Profile <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
                            <li> <a data-toggle="tab" href="#AVARIA-tab"> Avaria <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
                            <li> <a data-toggle="tab" href="#recargas-tab"> Recargas <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
                            <li> <a data-toggle="tab" href="#Reclamacao-tab"> Reclamacao <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
                            <li> <a data-toggle="tab" href="#groups-tab"> Groups <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="profile-tab" class="tab-pane active">
                                <div class="pd-20">
                                    <div class="vd_info tr"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-pencil append-icon"></i> Edit </a> </div>
                                    <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-gg-circle mgr-10 profile-icon"></i> Sobre</h3>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="row mgbt-xs-0">
                                                <label class="col-xs-5 control-label">Primeiro nome:</label>
{{--                                                <div class="col-xs-7 controls">{{auth()->user()->name}}</div>--}}
                                                <!-- col-sm-10 -->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row mgbt-xs-0">
                                                <label class="col-xs-5 control-label">aPELIDO:</label>
                                                <div class="col-xs-7 controls">Caraiban</div>
                                                <!-- col-sm-10 -->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row mgbt-xs-0">
                                                <label class="col-xs-5 control-label">User Name:</label>
                                                <div class="col-xs-7 controls">Mariah</div>
                                                <!-- col-sm-10 -->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row mgbt-xs-0">
                                                <label class="col-xs-5 control-label">Email:</label>
                                                <div class="col-xs-7 controls">mariah@Vendroid.com</div>
                                                <!-- col-sm-10 -->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row mgbt-xs-0">
                                                <label class="col-xs-5 control-label">City:</label>
                                                <div class="col-xs-7 controls">Los Angeles</div>
                                                <!-- col-sm-10 -->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row mgbt-xs-0">
                                                <label class="col-xs-5 control-label">Country:</label>
                                                <div class="col-xs-7 controls">United States</div>
                                                <!-- col-sm-10 -->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row mgbt-xs-0">
                                                <label class="col-xs-5 control-label">Birthday:</label>
                                                <div class="col-xs-7 controls">Jan 22, 1984</div>
                                                <!-- col-sm-10 -->
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="row mgbt-xs-0">
                                                <label class="col-xs-5 control-label">Phone:</label>
                                                <div class="col-xs-7 controls">+1-234-5678</div>
                                                <!-- col-sm-10 -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- pd-20 -->
                            </div>
                            <!-- home-tab -->

                            <div id="AVARIA-tab" class="tab-pane">
                                <div class="pd-20">
                                    <div class="vd_info tr"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-plus append-icon"></i> Add Project </a> </div>
                                    <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-bolt mgr-10 profile-icon"></i> AVARIA</h3>
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Logo / Photos</th>
                                            <th>Clients</th>
                                            <th>Start Date</th>
                                            <th>Status</th>
                                            <th>Revenue</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img height="80" src="img/avatar/avatar.jpg" alt="example image"></td>
                                            <td>Zoe Corp </td>
                                            <td class="center">2010/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span>
                                            </td>
                                            <td class="center"><strong>$ 250</strong></td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><img height="80" src="img/avatar/avatar-2.jpg" alt="example image"></td>
                                            <td>Zoe Corp </td>
                                            <td class="center">2010/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span>
                                            </td>
                                            <td class="center"><strong>$ 250</strong></td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><img height="80" src="img/avatar/avatar-3.jpg" alt="example image"></td>
                                            <td>Zoe Corp </td>
                                            <td class="center">2010/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span>
                                            </td>
                                            <td class="center"><strong>$ 250</strong></td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><img height="80" src="img/avatar/avatar-4.jpg" alt="example image"></td>
                                            <td>Zoe Corp </td>
                                            <td class="center">2010/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span>
                                            </td>
                                            <td class="center"><strong>$ 250</strong></td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><img height="80" src="img/avatar/avatar-5.jpg" alt="example image"></td>
                                            <td>Zoe Corp </td>
                                            <td class="center">2010/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span>
                                            </td>
                                            <td class="center"><strong>$ 250</strong></td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>


                                        </tbody>
                                    </table>
                                    <div class="">
                                    </div>
                                </div>
                            </div>

                            <div id="recargas-tab" class="tab-pane">
                                <div class="pd-20">
                                    <div class="vd_info tr"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-plus append-icon"></i> Add Project </a> </div>
                                    <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-bolt mgr-10 profile-icon"></i> AVARIA</h3>
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Logo / Photos</th>
                                            <th>Clients</th>
                                            <th>Start Date</th>
                                            <th>Status</th>
                                            <th>Revenue</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img height="80" src="img/avatar/avatar.jpg" alt="example image"></td>
                                            <td>Zoe Corp </td>
                                            <td class="center">2010/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span>
                                            </td>
                                            <td class="center"><strong>$ 250</strong></td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><img height="80" src="img/avatar/avatar-2.jpg" alt="example image"></td>
                                            <td>Zoe Corp </td>
                                            <td class="center">2010/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span>
                                            </td>
                                            <td class="center"><strong>$ 250</strong></td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><img height="80" src="img/avatar/avatar-3.jpg" alt="example image"></td>
                                            <td>Zoe Corp </td>
                                            <td class="center">2010/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span>
                                            </td>
                                            <td class="center"><strong>$ 250</strong></td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><img height="80" src="img/avatar/avatar-4.jpg" alt="example image"></td>
                                            <td>Zoe Corp </td>
                                            <td class="center">2010/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span>
                                            </td>
                                            <td class="center"><strong>$ 250</strong></td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><img height="80" src="img/avatar/avatar-5.jpg" alt="example image"></td>
                                            <td>Zoe Corp </td>
                                            <td class="center">2010/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span>
                                            </td>
                                            <td class="center"><strong>$ 250</strong></td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>


                                        </tbody>
                                    </table>
                                    <div class="">
                                    </div>
                                </div>
                                <!-- pd-20 -->
                            </div> <!-- photos tab -->
                            <div id="Reclamacao-tab" class="tab-pane">
                                <div class="pd-20">
                                    <div class="vd_info tr"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-plus append-icon"></i> Add Project </a> </div>
                                    <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-bolt mgr-10 profile-icon"></i> AVARIA</h3>
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Logo / Photos</th>
                                            <th>Clients</th>
                                            <th>Start Date</th>
                                            <th>Status</th>
                                            <th>Revenue</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img height="80" src="img/avatar/avatar.jpg" alt="example image"></td>
                                            <td>Zoe Corp </td>
                                            <td class="center">2010/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span>
                                            </td>
                                            <td class="center"><strong>$ 250</strong></td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><img height="80" src="img/avatar/avatar-2.jpg" alt="example image"></td>
                                            <td>Zoe Corp </td>
                                            <td class="center">2010/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span>
                                            </td>
                                            <td class="center"><strong>$ 250</strong></td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><img height="80" src="img/avatar/avatar-3.jpg" alt="example image"></td>
                                            <td>Zoe Corp </td>
                                            <td class="center">2010/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span>
                                            </td>
                                            <td class="center"><strong>$ 250</strong></td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><img height="80" src="img/avatar/avatar-4.jpg" alt="example image"></td>
                                            <td>Zoe Corp </td>
                                            <td class="center">2010/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span>
                                            </td>
                                            <td class="center"><strong>$ 250</strong></td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><img height="80" src="img/avatar/avatar-5.jpg" alt="example image"></td>
                                            <td>Zoe Corp </td>
                                            <td class="center">2010/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span>
                                            </td>
                                            <td class="center"><strong>$ 250</strong></td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>


                                        </tbody>
                                    </table>
                                    <div class="">
                                    </div>
                                </div>
                            </div>  <!-- photos tab -->
                            <div id="groups-tab" class="tab-pane">
                                <div class="pd-20">
                                    <div class="vd_info tr"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-plus append-icon"></i> Add Project </a> </div>
                                    <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-bolt mgr-10 profile-icon"></i> AVARIA</h3>
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Logo / Photos</th>
                                            <th>Clients</th>
                                            <th>Start Date</th>
                                            <th>Status</th>
                                            <th>Revenue</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img height="80" src="img/avatar/avatar.jpg" alt="example image"></td>
                                            <td>Zoe Corp </td>
                                            <td class="center">2010/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span>
                                            </td>
                                            <td class="center"><strong>$ 250</strong></td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><img height="80" src="img/avatar/avatar-2.jpg" alt="example image"></td>
                                            <td>Zoe Corp </td>
                                            <td class="center">2010/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span>
                                            </td>
                                            <td class="center"><strong>$ 250</strong></td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><img height="80" src="img/avatar/avatar-3.jpg" alt="example image"></td>
                                            <td>Zoe Corp </td>
                                            <td class="center">2010/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span>
                                            </td>
                                            <td class="center"><strong>$ 250</strong></td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><img height="80" src="img/avatar/avatar-4.jpg" alt="example image"></td>
                                            <td>Zoe Corp </td>
                                            <td class="center">2010/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span>
                                            </td>
                                            <td class="center"><strong>$ 250</strong></td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><img height="80" src="img/avatar/avatar-5.jpg" alt="example image"></td>
                                            <td>Zoe Corp </td>
                                            <td class="center">2010/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span>
                                            </td>
                                            <td class="center"><strong>$ 250</strong></td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>


                                        </tbody>
                                    </table>
                                    <div class="">
                                    </div>
                                </div>
                            </div>  <!-- groups tab -->

                        </div>
                        <!-- tab-content -->
                    </div>
                    <!-- tabs-widget -->              </div>
            </div>
        </div>
    </div>
    <!-- Page-body start -->
    </div>
@endsection
