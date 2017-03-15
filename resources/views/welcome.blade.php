@extends('layout')

@section('content')
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN THEME PANEL -->
                        <div class="theme-panel hidden-xs hidden-sm">
                            <div class="toggler"> </div>
                            <div class="toggler-close"> </div>
                            <div class="theme-options">
                                <div class="theme-option theme-colors clearfix">
                                    <span> THEME COLOR </span>
                                    <ul>
                                        <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                                        <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue"> </li>
                                        <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                                        <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                                        <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                                        <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2"> </li>
                                    </ul>
                                </div>
                                <div class="theme-option">
                                    <span> Theme Style </span>
                                    <select class="layout-style-option form-control input-sm">
                                        <option value="square" selected="selected">Square corners</option>
                                        <option value="rounded">Rounded corners</option>
                                    </select>
                                </div>
                                <div class="theme-option">
                                    <span> Layout </span>
                                    <select class="layout-option form-control input-sm">
                                        <option value="fluid" selected="selected">Fluid</option>
                                        <option value="boxed">Boxed</option>
                                    </select>
                                </div>
                                <div class="theme-option">
                                    <span> Header </span>
                                    <select class="page-header-option form-control input-sm">
                                        <option value="fixed" selected="selected">Fixed</option>
                                        <option value="default">Default</option>
                                    </select>
                                </div>
                                <div class="theme-option">
                                    <span> Top Menu Dropdown</span>
                                    <select class="page-header-top-dropdown-style-option form-control input-sm">
                                        <option value="light" selected="selected">Light</option>
                                        <option value="dark">Dark</option>
                                    </select>
                                </div>
                                <div class="theme-option">
                                    <span> Sidebar Mode</span>
                                    <select class="sidebar-option form-control input-sm">
                                        <option value="fixed">Fixed</option>
                                        <option value="default" selected="selected">Default</option>
                                    </select>
                                </div>
                                <div class="theme-option">
                                    <span> Sidebar Menu </span>
                                    <select class="sidebar-menu-option form-control input-sm">
                                        <option value="accordion" selected="selected">Accordion</option>
                                        <option value="hover">Hover</option>
                                    </select>
                                </div>
                                <div class="theme-option">
                                    <span> Sidebar Style </span>
                                    <select class="sidebar-style-option form-control input-sm">
                                        <option value="default" selected="selected">Default</option>
                                        <option value="light">Light</option>
                                    </select>
                                </div>
                                <div class="theme-option">
                                    <span> Sidebar Position </span>
                                    <select class="sidebar-pos-option form-control input-sm">
                                        <option value="left" selected="selected">Left</option>
                                        <option value="right">Right</option>
                                    </select>
                                </div>
                                <div class="theme-option">
                                    <span> Footer </span>
                                    <select class="page-footer-option form-control input-sm">
                                        <option value="fixed">Fixed</option>
                                        <option value="default" selected="selected">Default</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- END THEME PANEL -->
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Portlets</span>
                                </li>
                            </ul>
                            <div class="page-toolbar">
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li>
                                            <a href="#">
                                                <i class="icon-bell"></i> Action</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-shield"></i> Another action</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-user"></i> Something else here</a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-bag"></i> Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> Boxed Bootstrap Portlets
                            <small>boxed bootstrap portlet samples</small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="note note-info">
                            <p> See
                                <a href="ui_colors.html" target="_blank"> Color Library </a> for more colors for portlets. </p>
                        </div>
                        <div class="row">
                            <div class="col-md-4 ">
                                <!-- BEGIN Portlet PORTLET-->
                                <div class="portlet box blue-hoki">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Portlet1 </div>
                                        <div class="actions">
                                            <a href="javascript:;" class="btn btn-default btn-sm">
                                                <i class="fa fa-pencil"></i> Edit </a>
                                            <a href="javascript:;" class="btn btn-default btn-sm">
                                                <i class="fa fa-plus"></i> Add </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="scroller" style="height:200px" data-rail-visible="1" data-rail-color="yellow" data-handle-color="#a1b2bd">
                                            <strong>Scroll is hidden</strong>
                                            <br/> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula,
                                            eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus
                                            sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. consectetur purus sit amet fermentum. Duis
                                            mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </div>
                                    </div>
                                </div>
                                <!-- END Portlet PORTLET-->
                            </div>
                            <div class="col-md-4 ">
                                <!-- BEGIN Portlet PORTLET-->
                                <div class="portlet box red">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Portlet2 </div>
                                        <div class="tools">
                                            <a href="javascript:;" class="collapse"> </a>
                                            <a href="" class="fullscreen"> </a>
                                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                        </div>
                                        <div class="actions">
                                            <a href="javascript:;" class="btn btn-default btn-sm">
                                                <i class="fa fa-pencil"></i> Edit </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="scroller" style="height:200px" data-always-visible="1" data-rail-visible="1" data-rail-color="blue" data-handle-color="red">
                                            <strong>Scroll is always visible</strong>
                                            <br/> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula,
                                            eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus
                                            sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </div>
                                    </div>
                                </div>
                                <!-- END Portlet PORTLET-->
                            </div>
                            <div class="col-md-4 ">
                                <!-- BEGIN Portlet PORTLET-->
                                <div class="portlet box yellow">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Portlet3 </div>
                                        <div class="actions">
                                            <a href="javascript:;" class="btn btn-default btn-sm">
                                                <i class="fa fa-pencil"></i> Edit </a>
                                            <div class="btn-group">
                                                <a class="btn btn-default btn-sm" href="javascript:;" data-toggle="dropdown">
                                                    <i class="fa fa-user"></i> User
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-pencil"></i> Edit </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-trash-o"></i> Delete </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-ban"></i> Ban </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Make admin </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="scroller" style="height:200px" data-always-visible="1" data-rail-visible="1" data-rail-color="red" data-handle-color="green">
                                            <strong>Scroll and rail are always visible</strong>
                                            <br/> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula,
                                            eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus
                                            sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi
                                            erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
                                            mattis consectetur purus sit amet fermentum. </div>
                                    </div>
                                </div>
                                <!-- END Portlet PORTLET-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN Portlet PORTLET-->
                                <div class="portlet box red-sunglo">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Nestable Portlets </div>
                                        <div class="tools">
                                            <a href="javascript:;" class="collapse"> </a>
                                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                            <a href="javascript:;" class="reload"> </a>
                                            <a href="" class="fullscreen"> </a>
                                            <a href="javascript:;" class="remove"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <p>
                                            <strong>Scroll is hidden</strong>
                                            <br/> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula,
                                            eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus
                                            sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <!-- BEGIN Portlet PORTLET-->
                                                <div class="portlet solid purple">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-gift"></i>Portlet </div>
                                                        <div class="actions">
                                                            <a href="javascript:;" class="btn blue btn-sm">
                                                                <i class="fa fa-pencil"></i> Edit </a>
                                                            <div class="btn-group">
                                                                <a class="btn btn-sm green" href="javascript:;" data-toggle="dropdown">
                                                                    <i class="fa fa-user"></i> User
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-menu pull-right">
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-pencil"></i> Edit </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-trash-o"></i> Delete </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-ban"></i> Ban </a>
                                                                    </li>
                                                                    <li class="divider"> </li>
                                                                    <li>
                                                                        <a href="javascript:;"> Make admin </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="scroller" style="height:200px">
                                                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor
                                                                ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                                                                Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor
                                                                ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                                                                Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor
                                                                ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                                                                Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END Portlet PORTLET-->
                                            </div>
                                            <div class="col-md-4">
                                                <!-- BEGIN Portlet PORTLET-->
                                                <div class="portlet box green">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-gift"></i>Portlet </div>
                                                        <div class="tools">
                                                            <a href="javascript:;" class="collapse"> </a>
                                                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                            <a href="javascript:;" class="reload"> </a>
                                                            <a href="" class="fullscreen"> </a>
                                                            <a href="javascript:;" class="remove"> </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="scroller" style="height:200px">
                                                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor
                                                                ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                                                                Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor
                                                                ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                                                                Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor
                                                                ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                                                                Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END Portlet PORTLET-->
                                            </div>
                                            <div class="col-md-4">
                                                <!-- BEGIN Portlet PORTLET-->
                                                <div class="portlet box yellow">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-gift"></i>Portlet </div>
                                                        <div class="actions">
                                                            <a href="javascript:;" class="btn blue btn-sm">
                                                                <i class="fa fa-pencil"></i> Edit </a>
                                                            <div class="btn-group">
                                                                <a class="btn btn-sm green" href="javascript:;" data-toggle="dropdown">
                                                                    <i class="fa fa-user"></i> User
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-menu pull-right">
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-pencil"></i> Edit </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-trash-o"></i> Delete </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-ban"></i> Ban </a>
                                                                    </li>
                                                                    <li class="divider"> </li>
                                                                    <li>
                                                                        <a href="javascript:;"> Make admin </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="scroller" style="height:200px">
                                                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor
                                                                ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                                                                Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor
                                                                ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                                                                Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor
                                                                ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                                                                Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END Portlet PORTLET-->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="portlet box red">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-gift"></i>Portlet </div>
                                                        <ul class="nav nav-tabs">
                                                            <li>
                                                                <a href="#portlet_tab_3" data-toggle="tab"> Tab 3 </a>
                                                            </li>
                                                            <li>
                                                                <a href="#portlet_tab_2" data-toggle="tab"> Tab 2 </a>
                                                            </li>
                                                            <li class="active">
                                                                <a href="#portlet_tab_1" data-toggle="tab"> Tab 1 </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="portlet_tab_1">
                                                                <p> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                                                                    praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                                                    dolore magna aliquam erat volutpat.ut laoreet dolore magna ut laoreet dolore magna. ut laoreet dolore magna. ut laoreet dolore magna. </p>
                                                            </div>
                                                            <div class="tab-pane" id="portlet_tab_2">
                                                                <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
                                                                    duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo. </p>
                                                            </div>
                                                            <div class="tab-pane" id="portlet_tab_3">
                                                                <p> Ut wisi enim ad btn-smm veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
                                                                    velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore
                                                                    te feugait nulla facilisi. </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- BEGIN Portlet PORTLET-->
                                                <div class="portlet solid grey-cascade">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-gift"></i>Portlet </div>
                                                        <div class="actions">
                                                            <a href="javascript:;" class="btn default btn-sm">
                                                                <i class="fa fa-pencil icon-black"></i> Edit </a>
                                                            <div class="btn-group">
                                                                <a class="btn btn-sm red" href="javascript:;" data-toggle="dropdown">
                                                                    <i class="fa fa-user"></i> User
                                                                    <i class="fa fa-angle-down "></i>
                                                                </a>
                                                                <ul class="dropdown-menu pull-right">
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-pencil"></i> Edit </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-trash-o"></i> Delete </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-ban"></i> Ban </a>
                                                                    </li>
                                                                    <li class="divider"> </li>
                                                                    <li>
                                                                        <a href="javascript:;"> Make admin </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body"> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula,
                                                        eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.nisi
                                                        erat porttitor ligula, eget lacinia odio sem nec elit. nisi erat porttitor ligula, eget lacinia odio sem nec elit. nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur
                                                        purus sit amet fermentum </div>
                                                </div>
                                                <!-- END GRID PORTLET-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Portlet PORTLET-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 ">
                                <!-- BEGIN Portlet PORTLET-->
                                <div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Portlet </div>
                                        <div class="actions">
                                            <a href="javascript:;" class="btn yellow">
                                                <i class="fa fa-pencil"></i> Edit </a>
                                            <a href="javascript:;" class="btn green">
                                                <i class="fa fa-plus"></i> Add </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="scroller" style="height:200px">
                                            <strong>Scroll is hidden</strong>
                                            <br/> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula,
                                            eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus
                                            sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. consectetur purus sit amet fermentum. Duis
                                            mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </div>
                                    </div>
                                </div>
                                <!-- END Portlet PORTLET-->
                            </div>
                            <div class="col-md-6 ">
                                <!-- BEGIN Portlet PORTLET-->
                                <div class="portlet box green">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Portlet </div>
                                        <ul class="pagination pagination-sm">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-left"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> 1 </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> 2 </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> 3 </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="scroller" style="height:200px">
                                            <strong>Scroll is hidden</strong>
                                            <br/> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula,
                                            eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus
                                            sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. consectetur purus sit amet fermentum. Duis
                                            mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </div>
                                    </div>
                                </div>
                                <!-- END Portlet PORTLET-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- BEGIN Portlet PORTLET-->
                                <div class="portlet solid blue">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Portlet </div>
                                        <div class="actions">
                                            <a href="javascript:;" class="btn default btn-sm">
                                                <i class="fa fa-pencil icon-black"></i> Edit </a>
                                            <div class="btn-group">
                                                <a class="btn btn-sm red" href="javascript:;" data-toggle="dropdown">
                                                    <i class="fa fa-user"></i> User
                                                    <i class="fa fa-angle-down "></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-pencil"></i> Edit </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-trash-o"></i> Delete </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-ban"></i> Ban </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Make admin </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body"> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio
                                        sem nec elit. Cras mattis consectetur purus sit amet fermentum. nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.nisi erat porttitor ligula, eget lacinia
                                        odio sem nec elit. nisi erat porttitor ligula, eget lacinia odio sem nec elit. nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum </div>
                                </div>
                                <!-- END GRID PORTLET-->
                            </div>
                            <div class="col-md-6 ">
                                <!-- BEGIN Portlet PORTLET-->
                                <div class="portlet box blue">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Portlet </div>
                                        <ul class="nav nav-tabs">
                                            <li>
                                                <a href="#portlet_tab3" data-toggle="tab"> Tab 3 </a>
                                            </li>
                                            <li>
                                                <a href="#portlet_tab2" data-toggle="tab"> Tab 2 </a>
                                            </li>
                                            <li class="active">
                                                <a href="#portlet_tab1" data-toggle="tab"> Tab 1 </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="portlet_tab1">
                                                <p> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent
                                                    luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                                    volutpat.ut laoreet dolore magna ut laoreet dolore magna. ut laoreet dolore magna. ut laoreet dolore magna. </p>
                                            </div>
                                            <div class="tab-pane" id="portlet_tab2">
                                                <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et
                                                    ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                                                    et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo. </p>
                                            </div>
                                            <div class="tab-pane" id="portlet_tab3">
                                                <p> Ut wisi enim ad btn-smm veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                                    consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <!-- BEGIN Portlet PORTLET-->
                                <div class="portlet solid purple">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Portlet </div>
                                        <div class="actions">
                                            <a href="javascript:;" class="btn blue btn-sm">
                                                <i class="fa fa-pencil"></i> Edit </a>
                                            <div class="btn-group">
                                                <a class="btn btn-sm green" href="javascript:;" data-toggle="dropdown">
                                                    <i class="fa fa-user"></i> User
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-pencil"></i> Edit </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-trash-o"></i> Delete </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-ban"></i> Ban </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Make admin </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="scroller" style="height:200px">
                                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                                                odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet
                                                fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                                                odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet
                                                fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                                                odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet
                                                fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Portlet PORTLET-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <!-- BEGIN Portlet PORTLET-->
                                <div class="portlet box green-meadow">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Portlet </div>
                                        <div class="tools">
                                            <a href="javascript:;" class="collapse"> </a>
                                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                            <a href="" class="fullscreen"> </a>
                                            <a href="javascript:;" class="reload"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body"> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio
                                        sem nec elit. Cras mattis consectetur purus sit amet fermentum. </div>
                                </div>
                                <!-- END Portlet PORTLET-->
                            </div>
                            <div class="col-md-3 ">
                                <!-- BEGIN Portlet PORTLET-->
                                <div class="portlet box yellow">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Portlet </div>
                                        <div class="tools">
                                            <a href="javascript:;" class="collapse"> </a>
                                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                            <a href="" class="fullscreen"> </a>
                                            <a href="javascript:;" class="reload"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body"> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio
                                        sem nec elit. Cras mattis consectetur purus sit amet fermentum. </div>
                                </div>
                                <!-- END Portlet PORTLET-->
                            </div>
                            <div class="col-md-3 ">
                                <!-- BEGIN Portlet PORTLET-->
                                <div class="portlet box red">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Collapsed On Mobile Only </div>
                                        <div class="tools">
                                            <a href="javascript:;" class="expand visible-xs-inline-block visible-sm-inline-block"> </a>
                                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                            <a href="" class="fullscreen"> </a>
                                            <a href="javascript:;" class="reload"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body portlet-collapsed-on-mobile">
                                        <strong>Default Collapsed Portlet</strong>
                                        <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                                            odio sem nec elit. </p>
                                    </div>
                                </div>
                                <!-- END Portlet PORTLET-->
                            </div>
                            <div class="col-md-3 ">
                                <!-- BEGIN Portlet PORTLET-->
                                <div class="portlet box green">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Collapsed </div>
                                        <div class="tools">
                                            <a href="javascript:;" class="expand"> </a>
                                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                            <a href="" class="fullscreen"> </a>
                                            <a href="javascript:;" class="reload"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body portlet-collapsed">
                                        <strong>Default Collapsed Portlet</strong>
                                        <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                                            odio sem nec elit. </p>
                                    </div>
                                </div>
                                <!-- END Portlet PORTLET-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- BEGIN Portlet PORTLET-->
                                <div class="portlet">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Portlet </div>
                                        <div class="actions">
                                            <a href="javascript:;" class="btn default btn-sm">
                                                <i class="fa fa-share icon-black"></i> Share </a>
                                            <div class="btn-group">
                                                <a class="btn btn-sm red" href="javascript:;" data-toggle="dropdown">
                                                    <i class="fa fa-user"></i> User
                                                    <i class="fa fa-angle-down "></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-pencil"></i> Edit </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-trash-o"></i> Delete </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-ban"></i> Ban </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Make admin </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body"> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio
                                        sem nec elit. Cras mattis. </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <!-- BEGIN Portlet PORTLET-->
                                <div class="portlet">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Portlet </div>
                                        <div class="actions">
                                            <a href="javascript:;" class="btn blue btn-sm">
                                                <i class="fa fa-share"></i> Share </a>
                                            <div class="btn-group">
                                                <a class="btn btn-sm purple" href="javascript:;" data-toggle="dropdown">
                                                    <i class="fa fa-user"></i> User
                                                    <i class="fa fa-angle-down "></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-pencil"></i> Edit </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-trash-o"></i> Delete </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-ban"></i> Ban </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Make admin </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body"> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio
                                        sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
                                        Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </div>
                                </div>
                                <!-- END Portlet PORTLET-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 ">
                                <!-- BEGIN Portlet PORTLET-->
                                <div class="portlet">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Portlet </div>
                                        <div class="tools">
                                            <a href="javascript:;" class="collapse"> </a>
                                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                            <a href="javascript:;" class="reload"> </a>
                                            <a href="" class="fullscreen"> </a>
                                            <a href="javascript:;" class="remove"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body"> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio
                                        sem nec elit. Cras mattis consectetur purus sit amet fermentum. nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </div>
                                </div>
                                <!-- END Portlet PORTLET-->
                            </div>
                            <div class="col-md-5 ">
                                <!-- BEGIN Portlet PORTLET-->
                                <div class="portlet">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Collapsed </div>
                                        <div class="tools">
                                            <a href="javascript:;" class="expand"> </a>
                                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                            <a href="javascript:;" class="reload"> </a>
                                            <a href="" class="fullscreen"> </a>
                                            <a href="javascript:;" class="remove"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body display-hide">
                                        <strong>Default Collapsed</strong>
                                        <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                                            odio sem nec elit. </p>
                                    </div>
                                </div>
                                <!-- END Portlet PORTLET-->
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                    
@stop
                    
                    
                    