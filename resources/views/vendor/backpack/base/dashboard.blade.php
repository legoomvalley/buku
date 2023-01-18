@extends(backpack_view('blank'))

@php
    if (config('backpack.base.show_getting_started')) {
        $widgets['before_content'][] = [
            'type'        => 'view',
            'view'        => 'backpack::inc.getting_started',
        ];
    } else {
        $widgets['before_content'][] = [
            'type'        => 'jumbotron',
            'heading'     => trans('backpack::base.welcome'),
            'button_link' => backpack_url('logout'),
            'button_text' => trans('backpack::base.logout'),
        ];
    }
@endphp

@section('content')

<hr>
<div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-primary">
                  <div class="card-body pb-0">
                    <div class="btn-group float-right">
                      <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-settings"></i></button>
                      <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                    </div>
                    <div class="text-value">9.823</div>
                    <div>Total User</div>
                    <a href="{{ url('admin/user') }}" class="text-white">view</a>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas class="chart chartjs-render-monitor" id="card-chart1" height="87" style="display: block; height: 70px; width: 405px;" width="506"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-success">
                  <div class="card-body pb-0">
                    <button class="btn btn-transparent p-0 float-right" type="button"><i class="icon-location-pin"></i></button>
                    <div class="text-value">9.823</div>
                    <div>Total Book</div>
                    <a href="{{ url('admin/book') }}" class="text-white">view</a>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas class="chart chartjs-render-monitor" id="card-chart2" height="87" style="display: block; height: 70px; width: 403px;" width="503"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-warning">
                  <div class="card-body pb-0">
                    <div class="btn-group float-right">
                      <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-settings"></i></button>
                      <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                    </div>
                    <div class="text-value">9.823</div>
                    <div>Total Librarians</div>
                    <a href="{{ url('admin/librarian') }}" class="text-white">view</a>
                  </div>
                  <div class="chart-wrapper mt-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas class="chart chartjs-render-monitor" id="card-chart3" height="87" style="display: block; height: 70px; width: 437px;" width="546"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-dark">
                  <div class="card-body pb-0">
                    <div class="btn-group float-right">
                      <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-settings"></i></button>
                      <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                    </div>
                    <div class="text-value">9.823</div>
                    <div>Penalty Amount Due</div>
                    <a href="{{ url('admin/penalty') }}" class="text-white">view</a>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas class="chart chartjs-render-monitor" id="card-chart4" height="87" style="display: block; height: 70px; width: 403px;" width="503"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <aside class="right-side">
                   <!-- Main row -->
                    <div class="row">
                         <!-- Left col -->
                        <section class="col-lg-6 connectedSortable"> 
                            <!-- Box (with bar chart) -->
                            <div class="box box-success" id="loading-example">
                                <div class="box-header">
                                    <i class="fa fa-user"></i>

                                    <h3 class="box-title">Transaction History (Borrowed Books)</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="registered" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
												                      <th>Title of the Book</th>
												                      <th>Name of Borrower</th>
												                      <th>Date of Transaction</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                              <td>Ibong Adarna</td>
                                              <td>Orlan Fallado</td>
                                              <td>11/07/2019</td>
                                            </tr>
																						<tr>
                                              <td>Ibong Adarna</td>
                                              <td>Jillmer Donila</td>
                                              <td>11/08/2019</td>
                                            </tr>
																						<tr>
                                              <td>College Algebra</td>
                                              <td>floramie parker</td>
                                              <td>11/08/2019</td>
                                            </tr>
																						<tr>
                                              <td>College Algebra</td>
                                              <td>Hariz Daniel</td>
                                              <td>01/18/2023</td>
                                            </tr>
																						<tr>
                                              <td>College Algebra</td>
                                              <td>Hariz Daniel</td>
                                              <td>01/18/2023</td>
                                            </tr>
												            </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->        
                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-6 connectedSortable">
                            <!-- Map box -->
                            <div class="box box-danger" id="loading-example">
                                <div class="box-header">
                                    <!-- tools box -->
                                    <i class="fa fa-user"></i>

                                    <h3 class="box-title">Transaction History (Returned Books)</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="unregistered" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Title of the Book</th>
                                                <th>Name of Borrower</th>
                                                <th>Date of Transaction</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Ibong Adarna</td>
                                                <td>Orlan Fallado</td>
                                                <td>11/07/2019</td>
                                            </tr>
																						<tr>
                                              <td>Ibong Adarna</td>
                                              <td>Jillmer Donila</td>
                                              <td>11/08/2019</td>
                                            </tr>
																						<tr>
                                              <td>College Algebra</td>
                                              <td>floramie parker</td>
                                              <td>11/08/2019</td>
                                            </tr>
																						<tr>
                                              <td>College Algebra</td>
                                              <td>Hariz Daniel</td>
                                              <td>01/18/2023</td>
                                            </tr>
												                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->
                    
					
                </section><!-- /.content -->
            </aside>
        </div>

@endsection

