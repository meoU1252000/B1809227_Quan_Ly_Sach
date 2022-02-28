

   
                <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Quản Lý Thông Tin Danh Mục</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                       Biểu Đồ Lợi Nhuận Doanh Thu
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Năm</th>
                                            <th>Doanh Thu</th>
                                            <th>Chi tiết Doanh Thu</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Năm</th>
                                            <th>Doanh Thu</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      
                                    <?php 
                                       $caseyearh = mysqli_query($conn,"SELECT YEAR(b.ngaygh) as Nam, SUM(a.giadathang) as DoanhThu from chitietdathang as a, dathang as b 
                                                                        where a.sodondh = b.sodondh and b.trangthaidh = 'Đã Giao' group by YEAR(b.ngaygh);");
                                      $data = array();
                                      $date = array();
                                      $max = 0;
                                      while($row= mysqli_fetch_array($caseyearh)){
                                    ?>
                                        <tr>
                                            
                                            <td>   <?php 
                                                        array_push($date,$row['Nam']);
                                                        echo $row['Nam'];
                                                    ?></td>
                                            <td class = "data_input">   
                                            <?php 
                                                  array_push($data,$row['DoanhThu']);
                                                  if($max < $row['DoanhThu']){
                                                    $max = $row['Doanh Thu'];
                                                  }
                                                  echo number_format($row['DoanhThu']); 
                                            ?>
                                            </td>
                                            <td>
                                                 <a href="index.php?page_layout=doanhthuthang&id_nam=<?php echo $row['Nam'];?>" class ="action_edit" style="text-decoration:none; color:#212529;"><i class="fas fa-external-link-alt"></i></a>
                                            </td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                                <a href = "#" class="btn btn-primary" style="background-color: #212529;color:white;text-decoration:none;margin-top:12px">Create New</a>
                            </div>
                        </div>
                    </div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
var dataArray = [];
// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [<?php echo join(',',$date); ?>],
    datasets: [{
      label: "Total Profit",
      lineTension: 0.3,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: [<?php echo join(',',$data); ?>],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'year'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max:  [<?php echo join(',',$max*2); ?>],
          maxTicksLimit: 5
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});

</script>