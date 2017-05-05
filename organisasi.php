<div id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="widget">
                    <div class="widget-header widget-toolbar">
                        <form>
                            <div class="pull-left pad10r">
                                <input type="text" class="search-query" placeholder="Search">
                            </div>
                            <div class="pull-left pad10r">
                              <div class="control-group">
                                <div class="controls">
                                  <input class="input-medium" id="datepicker-basic" type="text" value="Tanggal">
                                </div>
                              </div>
                            </div> <!-- /.pull-left -->
                            <div class="pull-left">
                                <div class="btn-group">
                                  <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
                                    Organisasi
                                    <span class="caret"></span>
                                  </a>
                                  <ul class="dropdown-menu">
                                    <li><a href="javascript:;">BIN</a></li>
                                    <li><a href="javascript:;">JKT</a></li>
                                    <li><a href="javascript:;">TNI</a></li>
                                  </ul>
                                </div>
                            </div> <!-- /.pull-left -->
                            <div class="pull-left">
                                <div class="btn-group">
                                  <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
                                    Orang
                                    <span class="caret"></span>
                                  </a>
                                  <ul class="dropdown-menu">
                                    <li><a href="javascript:;">SBY</a></li>
                                    <li><a href="javascript:;">Prabowo</a></li>
                                    <li><a href="javascript:;">Megawati</a></li>
                                  </ul>
                                </div>
                            </div> <!-- /.pull-left -->
                            <div class="pull-left">
                                <div class="btn-group">
                                  <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
                                    Kasus
                                    <span class="caret"></span>
                                  </a>
                                  <ul class="dropdown-menu">
                                    <li><a href="javascript:;">Narkoba</a></li>
                                    <li><a href="javascript:;">Kriminal</a></li>
                                    <li><a href="javascript:;">Korupsi</a></li>
                                  </ul>
                                </div>
                            </div> <!-- /.pull-left -->
                        </form>			
                    </div> <!-- /.widget-header -->
                    <div class="widget-toolbar clearfix">
                        <div class="pull-left">
                            <h3>Hubungan Antar Organisasi</h3>	
                        </div> <!-- /.pull-left -->
                        <div class="pull-right">
                            <div class="btn-group">
                              <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
                                Filter
                                <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="javascript:;">W1M1</a></li>
                                <li><a href="javascript:;">W2M2</a></li>
                                <li><a href="javascript:;">W3M3</a></li>
                              </ul>
                            </div>
                        </div> <!-- /.pull-right -->
                        <div class="pull-right">
                            <div class="btn-group" data-toggle="buttons-radio">
                              <button class="btn btn-small active">Relasi</button>
                              <button class="btn btn-small">Peta</button>
                              <button class="btn btn-small">Layar Penuh</button>
                            </div>
                        </div> <!-- /.pull-right -->
                    </div> <!-- /.widget-toolbar -->
                    <div class="widget-content">
                      	  <div id="line-chart" class="chart-holder"></div> <!-- /line-chart -->
                    </div> <!-- /.widget-content -->
                </div> <!-- /.widget -->
            </div> <!-- /.span12 -->
            <div class="span6">
                <div class="widget">
                    <div class="widget-header">
                        <h3>
                            <i class="icon-bar-chart"></i>
                            Donut Chart
                        </h3>
                    </div> <!-- /widget-header -->
                    <div class="widget-content">
                        <div id="donut-chart" class="chart-holder"></div> <!-- /donut-chart -->
                    </div> <!-- /widget-content -->
                </div> <!-- /widget -->	
            </div> <!-- /span6 -->
            <div class="span6">
                <div class="widget">
                    <div class="widget-header">
                        <h3>
                            <i class="icon-bar-chart"></i>
                            Bar Chart
                        </h3>
                    </div> <!-- /widget-header -->
                    <div class="widget-content">
                        <div class="chart-holder">
							<div id="bar-chart" class="chart-holder"></div> <!-- /bar-chart -->	
                        </div> <!-- /bar-chart -->	
                    </div> <!-- /widget-content -->
                </div> <!-- /widget -->				
            </div> <!-- /span6 -->
            <div class="span12">
                <div class="widget widget-table">
                    <div class="widget-header">
                        <h3>
                            <i class="icon-bar-chart"></i> 
                          Inventori Laporan Organisasi
                        </h3>				
                    </div> <!-- /.widget-header -->
					<div class="widget-content">
						<table class="table table-striped table-bordered table-highlight">
					        <thead>
					          <tr>
					            <th width="1">No</th>
					            <th>Organisasi</th>
					            <th>Orang Dominan</th>
					            <th>Lokasi Dominan</th>
					            <th>Entitas</th>
					            <th>Jumlah Laporan</th>
					          </tr>
					        </thead>
					        <tbody>
					          <tr>
                              	<td>1</td>
					            <td><a href="index.php?menu=inventory-laporan">PKR</a></td>
					            <td>Sucipto</td>
					            <td>Jakarta Selatan</td>
					            <td>A-B-C-D-E</td>
					            <td>34</td>
					          </tr>
					          <tr>
                              	<td>2</td>
					            <td><a href="index.php?menu=inventory-laporan">PKR</a></td>
					            <td>Sucipto</td>
					            <td>Jakarta Selatan</td>
					            <td>A-B-C-D-E</td>
					            <td>34</td>
					          </tr>
					          <tr>
                              	<td>3</td>
					            <td><a href="index.php?menu=inventory-laporan">PKR</a></td>
					            <td>Sucipto</td>
					            <td>Jakarta Selatan</td>
					            <td>A-B-C-D-E</td>
					            <td>34</td>
					          </tr>
					          <tr>
                              	<td>4</td>
					            <td><a href="index.php?menu=inventory-laporan">PKR</a></td>
					            <td>Sucipto</td>
					            <td>Jakarta Selatan</td>
					            <td>A-B-C-D-E</td>
					            <td>34</td>
					          </tr>
					          <tr>
                              	<td>5</td>
					            <td><a href="index.php?menu=inventory-laporan">PKR</a></td>
					            <td>Sucipto</td>
					            <td>Jakarta Selatan</td>
					            <td>A-B-C-D-E</td>
					            <td>34</td>
					          </tr>
                              <tfoot>
                              	<tr>
                                	<th colspan="15">
                                        <div class="pull-right">
                                            <button class="btn btn-primary" onclick="window.open('index.php?menu=inventory-laporan-organisasi','_parent')">Lihat Semua</button>
                                        </div> <!-- /.pull-right -->
                        			</th>
                                </tr>
                              </tfoot>
					        </tbody>
					      </table>
					</div> <!-- /widget-content -->
                </div> <!-- /.widget -->
            </div> <!-- /.span12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /#content -->	