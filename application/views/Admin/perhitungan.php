      <!-- page content -->
      <div class="right_col" role="main" style="height: 1360px !important;">
        <div class="">
          <div class="page-title">
            <div class="title_left">
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?= $tabel1; ?></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                    <?= $this->session->flashdata('message'); ?>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Merk</th>
                          <th>Tipe</th>
                          <th>C1</th>
                          <th>C2</th>
                          <th>C3</th>
                          <th>C4</th>
                          <th>C5</th>
                          <th>C6</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($nilai as $k) : ?>
                          <tr>
                            <td><?= $i; ?></td>
                            <td><?= $k['merk']; ?></td>
                            <td><?= $k['tipe']; ?></td>
                            <td><?= $k['C1']; ?></td>
                            <td><?= $k['C2']; ?></td>
                            <td><?= $k['C3']; ?></td>
                            <td><?= $k['C4']; ?></td>
                            <td><?= $k['C5']; ?></td>
                            <td><?= $k['C6']; ?></td>
                          </tr>
                          <?php $i++; ?>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?= $tabel2; ?></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Merk</th>
                          <th>Tipe</th>
                          <th>C1</th>
                          <th>C2</th>
                          <th>C3</th>
                          <th>C4</th>
                          <th>C5</th>
                          <th>C6</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($nilai as $k) : ?>
                          <tr>
                            <td><?= $i; ?></td>
                            <td><?= $k['merk']; ?></td>
                            <td><?= $k['tipe']; ?></td>
                            <td><?= $k['C1'] / $MaxC1['C1']; ?></td>
                            <td><?= $k['C2'] / $MaxC2['C2']; ?></td>
                            <td><?= $k['C3'] / $MaxC3['C3']; ?></td>
                            <td><?= $k['C4'] / $MaxC4['C4']; ?></td>
                            <td><?= $k['C5'] / $MaxC5['C5']; ?></td>
                            <td><?= $k['C6'] / $MinC6['C6']; ?></td>
                          </tr>
                      </tbody>
                      <?php $i++; ?>
                    <?php endforeach; ?>
                    </table>
                  </div>
                </div>
              </div>
              <!-- ini batas akhir tabel hasil normalisasi -->


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?= $tabel3; ?></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Merk</th>
                          <th>Tipe</th>
                          <th>Nilai</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($nilai as $k) : ?>
                          <tr>
                            <td><?= $i; ?></td>
                            <td><?= $k['merk']; ?></td>
                            <td><?= $k['tipe']; ?></td>
                            <?php

                            $jumlahC2 = ($k['C2'] / $MaxC2['C2']) * $BobotC2['bobot_kriteria'];
                            $jumlahC1 = ($k['C1'] / $MaxC1['C1']) * $BobotC1['bobot_kriteria'];
                            $jumlahC3 = ($k['C3'] / $MaxC3['C3']) * $BobotC3['bobot_kriteria'];
                            $jumlahC4 = ($k['C4'] / $MaxC4['C4']) * $BobotC4['bobot_kriteria'];
                            $jumlahC5 = ($k['C5'] / $MaxC5['C5']) * $BobotC5['bobot_kriteria'];
                            $jumlahC6 = ($k['C6'] / $MinC6['C6']) * $BobotC6['bobot_kriteria'];
                            ?>
                            <?php $sum = [$jumlahC1, $jumlahC2, $jumlahC3, $jumlahC4, $jumlahC5, $jumlahC6];
                            $total = array_sum($sum);
                            ?>
                            <td><?= $total; ?></td>
                          </tr>
                          <?php $i++; ?>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- ini akhir tabel perankingan -->
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->