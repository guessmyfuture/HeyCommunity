@extends('layouts.default')

@section('mainBody')
    <div id="section-mainbody" class="page-module-page">
        <div class="container pt-4 pb-5">
            <div class="row">
                <div class="col-md-9">
                    <ul class="list-group media-list media-list-stream mb-2">
                        <li class="list-group-item p-4">
                            <h4 class="m-0">通知</h4>
                        </li>

                        <li class="list-group-item media p-4">
                            <span class="icon icon-globe text-muted mr-2"></span>

                            <div class="media-body">
                                <small class="text-muted float-right">1 min</small>
                                <div class="media-heading">
                                    <a href="#"><strong>Dave Gamache</strong></a> went traveling
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item media p-4">
                            <span class="icon icon-game-controller text-muted mr-2"></span>

                            <div class="media-body">
                                <small class="float-right text-muted">3 min</small>
                                <div class="media-heading">
                                    <a href="#"><strong>Mark Otto</strong></a> played destiny
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item media p-4">
                            <span class="icon icon-user text-muted mr-2 align-self-start"></span>

                            <div class="media-body">
                                <small class="float-right text-muted">34 min</small>
                                <div class="media-heading mb-2">
                                    <a href="#"><strong>Fat</strong></a> and <a href="#"><strong>1 other</strong></a> followed you
                                </div>
                                <ul class="avatar-list">
                                    <li class="avatar-list-item"><img class="rounded-circle" src="{{ asset('assets/bootstrap-application-theme/img/avatar-fat.jpg') }}">
                                    </li><li class="avatar-list-item"><img class="rounded-circle" src="{{ asset('assets/bootstrap-application-theme/img/avatar-dhg.png') }}">
                                    </li></ul>
                            </div>
                        </li>

                        <li class="list-group-item media p-4">
                            <span class="icon icon-camera text-muted mr-2 align-self-start"></span>

                            <div class="media-body">
                                <small class="float-right text-muted">3 min</small>
                                <div class="media-heading">
                                    <a href="#"><strong>Dave Gamache</strong></a> uploaded a photo
                                </div>

                                <div class="media-body-inline-grid" data-grid="images"><img style="display: inline-block; width: 519px; height: 503px; margin-bottom: 10px; margin-right: 0px; vertical-align: bottom;" data-width="640" data-height="640" data-action="zoom" src="{{ asset('assets/bootstrap-application-theme/img/instagram_3.jpg') }}"></div>
                            </div>
                        </li>

                        <li class="list-group-item media p-4">
                            <span class="icon icon-flag text-muted mr-2 align-self-start"></span>

                            <div class="media-body">
                                <small class="float-right text-muted">3 min</small>
                                <div class="media-heading">
                                    <a href="#"><strong>Mark Otto</strong></a> flagged your post
                                </div>

                                <div class="card mt-2">
                                    <div class="card-body">
                                        <div class="media">
                                            <img class="media-object rounded-circle mr-3 align-self-start" src="{{ asset('assets/bootstrap-application-theme/img/avatar-fat.jpg') }}">
                                            <div class="media-body">
                                                <div class="media-body-text">
                                                    <div class="media-heading">
                                                        <small class="float-right text-muted">1 hr</small>
                                                        <h6>Jacob Thornton</h6>
                                                    </div>
                                                    Donec id elit non mi porta gravida at eget metus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item media p-4">
                            <span class="icon icon-heart text-muted mr-2 align-self-start"></span>

                            <div class="media-body">
                                <small class="float-right text-muted">4 hr</small>
                                <div class="media-heading mb-2">
                                    <a href="#"><strong>Mark Otto</strong></a> and <a href="#"><strong>2 others</strong></a> favorited your post
                                </div>
                                <ul class="avatar-list">
                                    <li class="avatar-list-item"><img class="rounded-circle" src="{{ asset('assets/bootstrap-application-theme/img/avatar-dhg.png') }}">
                                    </li><li class="avatar-list-item"><img class="rounded-circle" src="{{ asset('assets/bootstrap-application-theme/img/avatar-mdo.png') }}">
                                    </li><li class="avatar-list-item"><img class="rounded-circle" src="{{ asset('assets/bootstrap-application-theme/img/avatar-fat.jpg') }}">
                                    </li></ul>
                            </div>
                        </li>

                        <li class="list-group-item media p-4">
                            <span class="icon icon-user text-muted mr-2 align-self-start"></span>

                            <div class="media-body">
                                <small class="float-right text-muted">30 min</small>
                                <div class="media-heading">
                                    You followed <a href="#"><strong>Jacob Thornton</strong></a> and <a href="#"><strong>1 other</strong></a>
                                </div>

                                <div class="mt-2">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card card-profile mb-2">
                                                <div class="card-header" style="background-image: url(../assets/img/instagram_4.jpg);"></div>
                                                <div class="card-body text-center">
                                                    <img class="card-profile-img" src="{{ asset('assets/bootstrap-application-theme/img/avatar-fat.jpg') }}">
                                                    <h5 class="card-title">Jacob Thornton</h5>
                                                    <p class="mb-4">Big belly rude boy, million dollar hustler. Unemployed.</p>
                                                    <button class="btn btn-outline-primary btn-sm">
                                                        <span class="icon icon-add-user"></span> Follow
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card card-profile mb-2">
                                                <div class="card-header" style="background-image: url(../assets/img/instagram_1.jpg);"></div>
                                                <div class="card-body text-center">
                                                    <img class="card-profile-img" src="{{ asset('assets/bootstrap-application-theme/img/avatar-mdo.png') }}">
                                                    <h5 class="card-title">Mark Otto</h5>
                                                    <p class="mb-4">GitHub and Bootstrap. Formerly at Twitter. Huge nerd.</p>
                                                    <button class="btn btn-outline-primary btn-sm">
                                                        <span class="icon icon-add-user"></span> Follow
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item media p-4">
                            <span class="icon icon-cog text-muted mr-2 align-self-start"></span>

                            <div class="media-body">
                                <small class="float-right text-muted">30 min</small>
                                <div class="media-heading mb-2">
                                    <a href="#"><strong>Jacob Thornton</strong></a> and <a href="#"><strong>1 other</strong></a> updated their settings
                                </div>
                                <ul class="avatar-list">
                                    <li class="avatar-list-item"><img class="rounded-circle" src="{{ asset('assets/bootstrap-application-theme/img/avatar-fat.jpg') }}">
                                    </li><li class="avatar-list-item"><img class="rounded-circle" src="{{ asset('assets/bootstrap-application-theme/img/avatar-dhg.png') }}">
                                    </li></ul>
                            </div>
                        </li>

                        <li class="list-group-item media p-4">
                            <span class="icon icon-creative-commons-noncommercial-us text-muted mr-2 align-self-start"></span>

                            <div class="media-body">
                                <small class="float-right text-muted">1 min</small>
                                <div class="media-heading">
                                    <a href="#"><strong>Jacob Thornton</strong></a> quit his job
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4 d-none d-lg-block">
                        <div class="card-body">
                            <h6 class="mb-3">Active Users <small>· <a href="#">View All</a></small></h6>
                            <ul class="media-list media-list-stream">
                                <li class="media mb-3">
                                    <img class="media-object img-circle mr-3 align-self-start" src="{{ asset('assets/bootstrap-application-theme/img/avatar-fat.jpg') }}">
                                    <div class="media-body">
                                        <strong>Jacob Thornton</strong> @fat
                                        <div class="media-body-actions">
                                            <button class="btn btn-outline-primary btn-sm">
                                                <span class="icon icon-add-user"></span> Follow</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object img-circle mr-3 align-self-star" src="{{ asset('assets/bootstrap-application-theme/img/avatar-mdo.png') }}">
                                    <div class="media-body">
                                        <strong>Mark Otto</strong> @mdo
                                        <div class="media-body-actions">
                                            <button class="btn btn-outline-primary btn-sm">
                                                <span class="icon icon-add-user"></span> Follow</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            Dave really likes these nerds, no one knows why though.
                        </div>
                    </div>

                    @include('layouts._tail')
                </div>
            </div>
        </div>
    </div>
@stop