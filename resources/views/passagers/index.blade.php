@extends('layouts.base')
@section('titulo', '')
@section('content')
    <div class="page-wrapper">
        <!-- Page-body start -->
        <div class="page-body">
            <div class="card">
                <!-- Email-card start -->
                <div class="card-block email-card">

                    @if (session('message'))
                        @include('alerts.sucess-messages')
                    @endif

                    <div class="row">
                        <!-- Left-side section start -->
                        <div class="col-lg-12 col-xl-2">
                            @include('passagers.includes.header')
                        </div>
                        <!-- Left-side section end -->
                        <!-- Right-side section start -->
                        <div class="col-lg-12 col-xl-10">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="e-inbox" role="tabpanel">
                                    <div class="mail-body">
                                        @include('passagers.includes.breadcrumb')
                                        @include('passagers.includes.table-passagers')
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="statistics" role="tabpanel">
                                    <div class="mail-body">
                                        @include('passagers.includes.breadcrumb')
                                        <div class="mail-body-content">

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="passagers_type" role="tabpanel">
                                    <div class="mail-body">
                                        @include('passagers.includes.breadcrumb')
                                        <div class="mail-body-content">
                                            @include('passagers.includes.passagers_type')
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="passagers_type_new" role="tabpanel">
                                    <div class="mail-body">
                                        @include('passagers.includes.breadcrumb')
                                        <div class="mail-body-content">
                                            @include('passagers.includes.passagers_type_new')
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="new-passagers" role="tabpanel">
                                    <div class="mail-body">
                                        @include('passagers.includes.breadcrumb')
                                        <div class="mail-body-content">
                                            @include('passagers.includes.form')
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Right-side section end -->
                    </div>
                </div>
                <!-- Email-card end -->
            </div>
        </div>
        <!-- Page-body start -->
    </div>
@endsection
