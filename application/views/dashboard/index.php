<head>
<style>
select#groups, select#sub_groups {
   -webkit-appearance: button;
   -webkit-border-radius: 2px;
   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
   -webkit-padding-end: 20px;
   -webkit-padding-start: 2px;
   -webkit-user-select: none;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
   background-position: 97% center;
   background-repeat: no-repeat;
   border: 1px solid #AAA;
   color: #555;
   font-size: inherit;
   margin: 20px;
   overflow: hidden;
   padding: 5px 10px;
   text-overflow: ellipsis;
   white-space: nowrap;
   width: 300px;
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Dashboard</h4>
          <p class="mg-b-0">Sawadikap Indonesia</p>
        </div>
   </div>
    
     <?php foreach ($getTotal as $dat) {?>
      <div class="br-pagebody">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-6">
            <div class="bg-info rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion ion-ios-people tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Users</p>
                  <a href="<?php echo base_url().'users' ?>" class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1"><?php echo $dat->total_user; ?></a>
                </div>
              </div>
              <div id="ch1" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-6 mg-t-20 mg-sm-t-0">
            <div class="bg-purple rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Product</p>
                  <a href="<?php echo base_url().'product' ?>" class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1"><?php echo $dat->total_product; ?></a>
                </div>
              </div>
              <div id="ch3" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
        </div><!-- row -->
      <?php } ?>


      <?php

        foreach($order1 as $d){
          $id_product[] = $d->id_product; 
          $jml_order[] = (float) $d->jml_order;
        }
        foreach($order2 as $d){
          $id_product2[] = $d->id_product; 
          $jml_order2[] = (float) $d->jml_order;
        }
        foreach($order3 as $d){
          $id_product3[] = $d->id_product; 
          $jml_order3[] = (float) $d->jml_order;
        }
        foreach($order4 as $d){
          $id_product4[] = $d->id_product; 
          $jml_order4[] = (float) $d->jml_order;
        }
        foreach($order5 as $d){
          $id_product5[] = $d->id_product; 
          $jml_order5[] = (float) $d->jml_order;
        }
        foreach($order6 as $d){
          $id_product6[] = $d->id_product; 
          $jml_order6[] = (float) $d->jml_order;
        }
        foreach($order7 as $d){
          $id_product7[] = $d->id_product; 
          $jml_order7[] = (float) $d->jml_order;
        }
        foreach($order8 as $d){
          $id_product8[] = $d->id_product; 
          $jml_order8[] = (float) $d->jml_order;
        }
        foreach($order9 as $d){
          $id_product9[] = $d->id_product; 
          $jml_order9[] = (float) $d->jml_order;
        }
        foreach($order10 as $d){
          $id_product10[] = $d->id_product; 
          $jml_order10[] = (float) $d->jml_order;
        }
        foreach($order11 as $d){
          $id_product11[] = $d->id_product; 
          $jml_order11[] = (float) $d->jml_order;
        }
        foreach($order12 as $d){
          $id_product12[] = $d->id_product; 
          $jml_order12[] = (float) $d->jml_order;
        }
        foreach($order13 as $d){
            $id_product13[] = $d->id_product; 
            $jml_order13[] = (float) $d->jml_order;
          }
          foreach($order14 as $d){
            $id_product14[] = $d->id_product; 
            $jml_order14[] = (float) $d->jml_order;
          }
          foreach($order15 as $d){
            $id_product15[] = $d->id_product; 
            $jml_order15[] = (float) $d->jml_order;
          }
          foreach($order16 as $d){
            $id_product16[] = $d->id_product; 
            $jml_order16[] = (float) $d->jml_order;
          }
          foreach($order17 as $d){
            $id_product17[] = $d->id_product; 
            $jml_order17[] = (float) $d->jml_order;
          }
          foreach($order18 as $d){
            $id_product18[] = $d->id_product; 
            $jml_order18[] = (float) $d->jml_order;
          }
          foreach($order19 as $d){
            $id_product19[] = $d->id_product; 
            $jml_order19[] = (float) $d->jml_order;
          }
          foreach($order20 as $d){
            $id_product20[] = $d->id_product; 
            $jml_order20[] = (float) $d->jml_order;
          }
          foreach($order21 as $d){
            $id_product21[] = $d->id_product; 
            $jml_order21[] = (float) $d->jml_order;
          }
          foreach($order22 as $d){
            $id_product22[] = $d->id_product; 
            $jml_order22[] = (float) $d->jml_order;
          }
          foreach($order23 as $d){
            $id_product23[] = $d->id_product; 
            $jml_order23[] = (float) $d->jml_order;
          }
          foreach($order24 as $d){
            $id_product24[] = $d->id_product; 
            $jml_order24[] = (float) $d->jml_order;
          }
      ?>

<div align ="center">

    <select id="groups">
        <option data-group='SHOW' value='0'>Year</option>
        <option value='curr-year'><script>document.write(new Date().getFullYear())</script></option>
        <option value='last-year'><script>document.write(new Date().getFullYear() - 1)</script></option>
    <select>
        
    <select id="sub_groups">
        <option data-group='SHOW' value='0'>Month</option>
        <option data-group='curr-year' value='curr-jan'>January <script>document.write(new Date().getFullYear())</script> </option>
        <option data-group='curr-year' value='curr-feb'>February <script>document.write(new Date().getFullYear())</script> </option>
        <option data-group='curr-year' value='curr-march'>March <script>document.write(new Date().getFullYear())</script> </option>
        <option data-group='curr-year' value='curr-apr'>April <script>document.write(new Date().getFullYear())</script> </option>
        <option data-group='curr-year' value='curr-may'>May <script>document.write(new Date().getFullYear())</script> </option>
        <option data-group='curr-year' value='curr-jun'>June <script>document.write(new Date().getFullYear())</script> </option>
        <option data-group='curr-year' value='curr-jul'>July<script>document.write(new Date().getFullYear())</script> </option>
        <option data-group='curr-year' value='curr-aug'>August <script>document.write(new Date().getFullYear())</script> </option>
        <option data-group='curr-year' value='curr-sep'>September <script>document.write(new Date().getFullYear())</script> </option>
        <option data-group='curr-year' value='curr-oct'>October <script>document.write(new Date().getFullYear())</script> </option>
        <option data-group='curr-year' value='curr-nov'>November <script>document.write(new Date().getFullYear())</script> </option>
        <option data-group='curr-year' value='curr-dec'>December <script>document.write(new Date().getFullYear())</script> </option>
    
        <option data-group='last-year' value='last-jan'>January <script>document.write(new Date().getFullYear() -1 )</script> </option>
        <option data-group='last-year' value='last-feb'>February <script>document.write(new Date().getFullYear()-1)</script> </option>
        <option data-group='last-year' value='last-march'>March <script>document.write(new Date().getFullYear()-1)</script> </option>
        <option data-group='last-year' value='last-apr'>April <script>document.write(new Date().getFullYear()-1)</script> </option>
        <option data-group='last-year' value='last-may'>May <script>document.write(new Date().getFullYear()-1)</script> </option>
        <option data-group='last-year' value='last-jun'>June <script>document.write(new Date().getFullYear()-1)</script> </option>
        <option data-group='last-year' value='last-jul'>July<script>document.write(new Date().getFullYear()-1)</script> </option>
        <option data-group='last-year' value='last-aug'>August <script>document.write(new Date().getFullYear()-1)</script> </option>
        <option data-group='last-year' value='last-sep'>September <script>document.write(new Date().getFullYear()-1)</script> </option>
        <option data-group='last-year' value='last-oct'>October <script>document.write(new Date().getFullYear()-1)</script> </option>
        <option data-group='last-year' value='last-nov'>November <script>document.write(new Date().getFullYear()-1)</script> </option>
        <option data-group='last-year' value='last-dec'>December <script>document.write(new Date().getFullYear()-1)</script> </option>
    
    <select>

    <div id='curr-year' class="col-xl-8 col-sm-8 graph curr-year">
        <canvas id="canvas" width="500" height="200"></canvas>
    </div>
    <div id='last-year'  class="col-xl-8 col-sm-8 graph last-year">
        <canvas id="canvas2" width="500" height="200"></canvas>
    </div>

    <div id="ordergraph1"  class="col-xl-8 col-sm-8 curr-jan box">
        <canvas id="order1" width="500" height="200"></canvas>
    </div>

    <div id="ordergraph2"  class="col-xl-8 col-sm-8 curr-feb box">
        <canvas id="order2" width="500" height="200"></canvas>
    </div>

    <div id="ordergraph3"  class="col-xl-8 col-sm-8 curr-march box">
        <canvas id="order3" width="500" height="200"></canvas>
    </div>

    <div id="ordergraph4"  class="col-xl-8 col-sm-8 curr-apr box">
        <canvas id="order4" width="500" height="200"></canvas>
    </div>

    <div id="ordergraph5"  class="col-xl-8 col-sm-8 curr-may box">
        <canvas id="order5" width="500" height="200"></canvas>
    </div>

    <div id="ordergraph6"  class="col-xl-8 col-sm-8 curr-jun box">
        <canvas id="order6" width="500" height="200"></canvas>
    </div>

    <div id="ordergraph7"  class="col-xl-8 col-sm-8 curr-jul box">
        <canvas id="order7" width="500" height="200"></canvas>
    </div>

    <div id="ordergraph8"  class="col-xl-8 col-sm-8 curr-aug box">
        <canvas id="order8" width="500" height="200"></canvas>
    </div>

    <div id="ordergraph9"  class="col-xl-8 col-sm-8 curr-sep box">
        <canvas id="order9" width="500" height="200"></canvas>
    </div>

    <div id="ordergraph10"  class="col-xl-8 col-sm-8 curr-oct box">
        <canvas id="order10" width="500" height="200"></canvas>
    </div>
    
    <div id="ordergraph11"  class="col-xl-8 col-sm-8 curr-nov box">
        <canvas id="order11" width="500" height="200"></canvas>
    </div>

    <div id="ordergraph12"  class="col-xl-8 col-sm-8 curr-dec box">
        <canvas id="order12" width="500" height="200"></canvas>
    </div>

     

    <div id="ordergraph13"  class="col-xl-8 col-sm-8 last-jan box">
        <canvas id="order13" width="500" height="200"></canvas>
    </div>

    <div id="ordergraph14"  class="col-xl-8 col-sm-8 last-feb box">
        <canvas id="order14" width="500" height="200"></canvas>
    </div>

    <div id="ordergraph15"  class="col-xl-8 col-sm-8 last-march box">
        <canvas id="order15" width="500" height="200"></canvas>
    </div>

    <div id="ordergraph16"  class="col-xl-8 col-sm-8 last-apr box">
        <canvas id="order16" width="500" height="200"></canvas>
    </div>

    <div id="ordergraph17"  class="col-xl-8 col-sm-8 last-may box">
        <canvas id="order17" width="500" height="200"></canvas>
    </div>

    <div id="ordergraph18"  class="col-xl-8 col-sm-8 last-jun box">
        <canvas id="order18" width="500" height="200"></canvas>
    </div>

    <div id="ordergraph19"  class="col-xl-8 col-sm-8 last-jul box">
        <canvas id="order19" width="500" height="200"></canvas>
    </div>

    <div id="ordergraph20"  class="col-xl-8 col-sm-8 last-aug box">
        <canvas id="order20" width="500" height="200"></canvas>
    </div>

    <div id="ordergraph21"  class="col-xl-8 col-sm-8 last-sep box">
        <canvas id="order21" width="500" height="200"></canvas>
    </div>

    <div id="ordergraph22"  class="col-xl-8 col-sm-8 last-oct box">
        <canvas id="order22" width="500" height="200"></canvas>
    </div>
    
    <div id="ordergraph23"  class="col-xl-8 col-sm-8 last-nov box">
        <canvas id="order23" width="500" height="200"></canvas>
    </div>

    <div id="ordergraph24"  class="col-xl-8 col-sm-8 last-dec box">
        <canvas id="order24" width="500" height="200"></canvas>
    </div>

    </div>

    
    </div><!-- br-pagebody -->
      <!-- <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2017. Bracket Plus. All Rights Reserved.</div>
          <div>Attentively and carefully made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket%20Plus,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-twitter tx-20"></i></a>
        </div>
      </footer> -->
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <!--Load chart js-->
    <!--Graph-->
    <script type="text/javascript" src="<?php echo base_url().'assets/chartjs/Chart.bundle.js'?>"></script>
    <script>
          const monthName = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October','November','December '];
          let datas = [];
          let queryRes = (<?= json_encode($data)?>);
          monthName.forEach((m, idx) => {
              let order = 0;
              // search queryRes yg month nya ada countnya
              queryRes.forEach(q => {
                if (parseInt(q.month, 10)-1 === idx) {
                  order = q.count;
                }
              })

              datas.push(order);
          });

            var ctx = document.getElementById("canvas");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: monthName,
                    datasets: [{
                            label: 'Number of Ordered Product in a Year 2019',
                            data: datas,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>
            <script>

          const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October','November','December '];
          let dataset = [];
          let queryRess = (<?= json_encode($data2)?>);
          monthNames.forEach((m, idx) => {
              let orders = 0;
              // search queryRes yg month nya ada countnya
              queryRess.forEach(q => {
                if (parseInt(q.month, 10)-1 === idx) {
                  orders = q.count;
                }
              })

              dataset.push(orders);
          });

            var ctx2 = document.getElementById("canvas2");
            var myChart2 = new Chart(ctx2, {
                type: 'bar',
                data: {
                    labels: monthNames,
                    datasets: [{
                            label: 'Number of Ordered Product in a Year 2018',
                            data: dataset,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>
            <script>

            var ctx3 = document.getElementById("order1");
            var myChart3 = new Chart(ctx3, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($id_product);?>,
                    datasets: [{
                            label: 'Number of Product Ordered in January 2019',
                            data: <?php echo json_encode($jml_order);?>,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>
            <script>

            var ctx4 = document.getElementById("order2");
            var myChart4 = new Chart(ctx4, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($id_product2);?>,
                    datasets: [{
                            label: 'Number of Product Ordered in February 2019',
                            data: <?php echo json_encode($jml_order2);?>,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>
            <script>

            var ctx5 = document.getElementById("order3");
            var myChart5 = new Chart(ctx5, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($id_product3);?>,
                    datasets: [{
                            label: 'Number of Product Ordered in March 2019',
                            data: <?php echo json_encode($jml_order3);?>,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>
            <script>

            var ctx6 = document.getElementById("order4");
            var myChart6 = new Chart(ctx6, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($id_product4);?>,
                    datasets: [{
                            label: 'Number of Product Ordered in April 2019',
                            data: <?php echo json_encode($jml_order4);?>,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>
            <script>

            var ctx7 = document.getElementById("order5");
            var myChart7 = new Chart(ctx7, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($id_product5);?>,
                    datasets: [{
                            label: 'Number of Product Ordered in May 2019',
                            data: <?php echo json_encode($jml_order5);?>,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>
            <script>

            var ctx8 = document.getElementById("order6");
            var myChart8 = new Chart(ctx8, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($id_product6);?>,
                    datasets: [{
                            label: 'Number of Product Ordered in June 2019',
                            data: <?php echo json_encode($jml_order6);?>,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>
            <script>

            var ctx9 = document.getElementById("order7");
            var myChart9 = new Chart(ctx9, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($id_product7);?>,
                    datasets: [{
                            label: 'Number of Product Ordered in July 2019',
                            data: <?php echo json_encode($jml_order7);?>,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>
            <script>

            var ctx10 = document.getElementById("order8");
            var myChart10 = new Chart(ctx10, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($id_product8);?>,
                    datasets: [{
                            label: 'Number of Product Ordered in August 2019',
                            data: <?php echo json_encode($jml_order8);?>,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>
            <script>

            var ctx11 = document.getElementById("order9");
            var myChart11 = new Chart(ctx11, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($id_product9);?>,
                    datasets: [{
                            label: 'Number of Product Ordered in September 2019',
                            data: <?php echo json_encode($jml_order9);?>,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>
            <script>

            var ctx12 = document.getElementById("order10");
            var myChart12 = new Chart(ctx12, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($id_product10);?>,
                    datasets: [{
                            label: 'Number of Product Ordered in October 2019',
                            data: <?php echo json_encode($jml_order10);?>,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>
            <script>

            var ctx13 = document.getElementById("order11");
            var myChart13 = new Chart(ctx13, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($id_product11);?>,
                    datasets: [{
                            label: 'Number of Product Ordered in November 2019',
                            data: <?php echo json_encode($jml_order11);?>,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>
            <script>

            var ctx14 = document.getElementById("order12");
            var myChart14 = new Chart(ctx14, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($id_product12);?>,
                    datasets: [{
                            label: 'Number of Product Ordered in December 2019',
                            data: <?php echo json_encode($jml_order12);?>,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>
            <script>

            var ctx15 = document.getElementById("order13");
            var myChart15 = new Chart(ctx15, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($id_product13);?>,
                    datasets: [{
                            label: 'Number of Product Ordered in January 2018',
                            data: <?php echo json_encode($jml_order13);?>,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>
            <script>

            var ctx16 = document.getElementById("order14");
            var myChart16 = new Chart(ctx16, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($id_product14);?>,
                    datasets: [{
                            label: 'Number of Product Ordered in February 2018',
                            data: <?php echo json_encode($jml_order14);?>,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>
            <script>

            var ctx17 = document.getElementById("order15");
            var myChart17 = new Chart(ctx17, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($id_product15);?>,
                    datasets: [{
                            label: 'Number of Product Ordered in March 2018',
                            data: <?php echo json_encode($jml_order15);?>,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>
            <script>

            var ctx18 = document.getElementById("order16");
            var myChart18 = new Chart(ctx18, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($id_product16);?>,
                    datasets: [{
                            label: 'Number of Product Ordered in April 2018',
                            data: <?php echo json_encode($jml_order16);?>,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>
            <script>

            var ctx19 = document.getElementById("order17");
            var myChart19 = new Chart(ctx19, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($id_product17);?>,
                    datasets: [{
                            label: 'Number of Product Ordered in May 2018',
                            data: <?php echo json_encode($jml_order17);?>,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>
            <script>

            var ctx20 = document.getElementById("order18");
            var myChart20 = new Chart(ctx20, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($id_product18);?>,
                    datasets: [{
                            label: 'Number of Product Ordered in June 2018',
                            data: <?php echo json_encode($jml_order18);?>,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>
            <script>

            var ctx21 = document.getElementById("order19");
            var myChart21 = new Chart(ctx21, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($id_product19);?>,
                    datasets: [{
                            label: 'Number of Product Ordered in July 2018',
                            data: <?php echo json_encode($jml_order19);?>,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>
            <script>

            var ctx22 = document.getElementById("order20");
            var myChart22 = new Chart(ctx22, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($id_product20);?>,
                    datasets: [{
                            label: 'Number of Product Ordered in August 2018',
                            data: <?php echo json_encode($jml_order20);?>,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>
            <script>

            var ctx23 = document.getElementById("order21");
            var myChart23 = new Chart(ctx23, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($id_product21);?>,
                    datasets: [{
                            label: 'Number of Product Ordered in September 2018',
                            data: <?php echo json_encode($jml_order21);?>,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>
            <script>

            var ctx24 = document.getElementById("order22");
            var myChart24 = new Chart(ctx24, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($id_product22);?>,
                    datasets: [{
                            label: 'Number of Product Ordered in October 2018',
                            data: <?php echo json_encode($jml_order22);?>,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>
            <script>

            var ctx25 = document.getElementById("order23");
            var myChart25 = new Chart(ctx25, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($id_product23);?>,
                    datasets: [{
                            label: 'Number of Product Ordered in November 2018',
                            data: <?php echo json_encode($jml_order23);?>,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>
            <script>

            var ctx26 = document.getElementById("order24");
            var myChart26 = new Chart(ctx26, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($id_product24);?>,
                    datasets: [{
                            label: 'Number of Product Ordered in December 2018',
                            data: <?php echo json_encode($jml_order24);?>,
                            backgroundColor: [
                                'rgba(62, 194, 249, 0.4)',
                                'rgba(65, 199, 229, 0.4)',
                                'rgba(68, 205, 209, 0.4)',
                                'rgba(71, 210, 189, 0.4)',
                                'rgba(74, 216, 169, 0.4)',
                                'rgba(77, 221, 149, 0.4)',
                                'rgba(81, 227, 130, 0.4)',
                                'rgba(84, 232, 110, 0.4)',
                                'rgba(87, 238, 90, 0.4)',
                                'rgba(90, 243, 70, 0.4)',
                                'rgba(93, 249, 50, 0.4)',
                                'rgba(97, 255, 31, 0.4)'
                            ],
                            borderColor: [
                                'rgba(62, 194, 249,1)',
                                'rgba(65, 199, 229, 1)',
                                'rgba(68, 205, 209, 1)',
                                'rgba(71, 210, 189, 1)',
                                'rgba(74, 216, 169, 1)',
                                'rgba(77, 221, 149, 1)',
                                'rgba(81, 227, 130, 1)',
                                'rgba(84, 232, 110, 1)',
                                'rgba(87, 238, 90, 1)',
                                'rgba(90, 243, 70, 1)',
                                'rgba(93, 249, 50, 1)',
                                'rgba(97, 255, 31, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

            </script>

        <script>
        $(function(){
            $('#groups').on('change', function(){
                var val = $(this).val();
                var sub = $('#sub_groups');
                $('option', sub).filter(function(){
                    if (
                        $(this).attr('data-group') === val 
                    || $(this).attr('data-group') === 'SHOW'
                    ) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
            $('#groups').trigger('change');
        });
        </script>
        
        <script type="text/javascript">
            $(function() {
                $('#groups').change(function(){
                    $('.graph').hide();
                    $('#' + $(this).val()).show();
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("select").change(function(){
                    $(this).find("option:selected").each(function(){
                        var optionValue = $(this).attr("value");
                        if(optionValue){
                            $(".box").not("." + optionValue).hide();
                            $("." + optionValue).show();
                        } else{
                            $(".box").hide();
                        }
                    });
                }).change();
            });
        </script>