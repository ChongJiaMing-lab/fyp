<!DOCTYPE html>
<html lang="en">
<?php include 'admin_sidebar.php';
include 'databaseconnect.php';
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin sidebar</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="
    https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js
    "></script>
  <script
    src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
</head>

<style>
  .cards {
    width: 100%;
    height: 150px;
    padding: 35px 20px;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 20px;
  }

  .cards .ccard {
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #DFF5DB;
    border-radius: 20px;
    box-shadow: 0 7px 25px 0 rgba(0, 0, 0, 0.08)
  }

  .cards .ccard:hover {
    background-color: #97EA88;
    cursor: pointer;
  }

  .icon {
    font-size: 55px;
  }

  .number {
    /* color: #32871F; */
    font-size: 45px;
  }

  .name {
    font-size: 25px;
  }

  .charts {
    display: grid;
    grid-template-columns: 2fr 1fr;
    grid-gap: 50px;
    /* align-items: center; */
  }

  .charts h1 {
    align-items: center;
  }

  .chart1 {
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.8);
  }

  .chart2 {
    border-radius: 10px;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.8);
  }

  .recent {
    display: grid;
    grid-template-columns: 1fr 2fr;
  }

  .recent,
  .card {
    border-radius: 12px;
  }

  .list-group img {
    width: 100px;
    height: auto;
    max-height:
  }
</style>

<body>
  <div class="main p-3"><!-- write content below -->

    <?php
    $staff = mysqli_query($connect, "SELECT * FROM staff");
    $user = mysqli_query($connect, "SELECT * FROM user_information");
    $product = mysqli_query($connect, "SELECT * FROM product");
    $order = mysqli_query($connect, "SELECT * FROM `order_`");

    $staff_row = mysqli_num_rows($staff);
    $user_row = mysqli_num_rows($user);
    $product_row = mysqli_num_rows($product);
    $order_row = mysqli_num_rows($order);
    ?>
    <div class="head" style="display:flex;">
      <i class="lni lni-home" style="font-size:50px;"></i>
      <h1 style="margin: 12px 0 0 30px;">Home Page</h1>
      <hr>
    </div>
    <div class="cards">
      <div class="ccard" onclick="window.location='admin_staff.php';">
        <div class="content">
          <div class="number"><?php echo $staff_row ?></div>
          <div class="name">Staff</div>
        </div>
        <div class="icon">
          <ion-icon name="person-circle-outline"></ion-icon>
        </div>
      </div>

      <div class="ccard" onclick="window.location='admin_cust.php';">
        <div class="content">
          <div class="number"><?php echo $user_row ?></div>
          <div class="name">User</div>
        </div>
        <div class="icon">
          <i class="lni lni-users"></i>
        </div>
      </div>

      <div class="ccard" onclick="window.location='admin_product.php';">
        <div class="content">
          <div class="number"><?php echo $product_row ?></div>
          <div class="name">Product</div>
        </div>
        <div class="icon">
          <ion-icon name="pricetags-outline"></ion-icon>
        </div>
      </div>

      <div class="ccard" onclick="window.location='admin_order.php';">
        <div class="content">
          <div class="number"><?php echo $order_row ?></div>
          <div class="name">Order</div>
        </div>
        <div class="icon">
          <i class="lni lni-list"></i>
        </div>
      </div>
    </div><!-- close cards-->

    <br>
    <hr><br>
    <div class="charts">
      <div class="chart1">
        <div style="position: absolute; top: 305px; right: 525px;">
          <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
          <label class="btn btn-outline-primary" for="btnradio1">This Week</label>

          <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
          <label class="btn btn-outline-primary" for="btnradio2">Last Week</label>
        </div>
        <h1 style="margin-top:10px;margin-left:10px;">Week Sales</h1>
        <canvas id="chart1"></canvas>
      </div>
      <div class="chart2">
        <?php
        $query = mysqli_query($connect, "
    SELECT product_id, SUM(qty) as total_qty 
    FROM cart 
    WHERE status='payed' 
    GROUP BY product_id 
    ORDER BY total_qty DESC 
    LIMIT 3
");
$select_build = mysqli_query($connect, "SELECT * FROM pc_build WHERE pay_status = 'payed'");
        ?>
        <ul class="list-group list-group-flush">
          <a href="#" class="list-group-item list-group-item-action list-group-item-primary">
            <h1>Best-Selling Product</h1>
          </a>
          <?php
          while ($hot = mysqli_fetch_assoc($query)) {
            $total_qty = 0;
            while($hot2 = mysqli_fetch_assoc($select_build)){
              if($hot2["chassis"] == $hot["product_id"]){
                $total_qty ++;
              }
              if($hot2["motherboard"] == $hot["product_id"]){
                $total_qty ++;
              }
              if($hot2["processor"] == $hot["product_id"]){
                $total_qty ++;
              }
              if($hot2["graphic_card"] == $hot["product_id"]){
                $total_qty ++;
              }
              if($hot2["ram1"] == $hot["product_id"]){
                $total_qty ++;
              }
              if($hot2["ram2"] == $hot["product_id"]){
                $total_qty ++;
              }
              if($hot2["memory"] == $hot["product_id"]){
                $total_qty ++;
              }
              if($hot2["cooler"] == $hot["product_id"]){
                $total_qty ++;
              }
              if($hot2["power_supply"] == $hot["product_id"]){
                $total_qty ++;
              }
            }
            $total_qty = $hot['total_qty'];
            $p_id = $hot['product_id'];
            $p_img = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM product WHERE product_id= '$p_id'"));
            $n = $p_img['product_name'];
            $i = $p_img["image"];
            ?>
            <li class="list-group-item" style="display:flex; align-items:center"><img
                src="../image/<?php echo $i ?>"><?php echo $n ?></li>
            <li class="list-group-item"><b><?php echo "Sold:" . $total_qty ?></b></li>
          <?php }
          ?>
        </ul>
      </div>
    </div>

    <br>
    <hr><br>
    <?php
    $todo = mysqli_query($connect, "SELECT *, user_information.user_name FROM order_ JOIN user_information ON order_.user_id = user_information.ID WHERE delivery_status = 'Processing' LIMIT 7")
      ?>
    <div class="recent">
      <div class="recent1">
        <div class="card">
          <h1 style="margin:15px 15px 15px 15px">To-do List</h1>
          <table class="table table-borderless table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Customer</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($todo_row = mysqli_fetch_assoc($todo)) {
                ?>
                <tr onclick="window.location='order_detail.php?order_id=<?php echo $todo_row['order_id'] ?>';"
                  style="cursor:pointer">
                  <th scope="row"><?php echo $todo_row["order_id"] ?></th>
                  <td><?php echo $todo_row["time_status"] ?></td>
                  <td><?php echo $todo_row["user_name"] ?></td>
                  <td><?php echo $todo_row["delivery_status"] ?></td>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
      <?php $new_c = mysqli_query($connect, "SELECT * FROM user_information ORDER BY ID DESC LIMIT 5")
        ?>
      <div class="recent2" style="margin-left: 25px;">
        <div class="card">
          <h1 style="margin:15px 15px 15px 15px">Recent Customers</h1>
          <table class="table table-borderless">
            <hr style="width:98%; margin:auto auto auto auto;">
            <tbody>
              <?php
              while ($new_row = mysqli_fetch_assoc($new_c)) {
                ?>
                <tr>
                  <th scope="row"><?php echo $new_row["user_name"] ?></th>
                  <td><?php echo $new_row["contactnumber"] ?></td>
                  <td><?php echo $new_row["email"] ?></td>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div><!-- cose main p-3 -->
  </div>
</body>

<?php
$sql = "SELECT * FROM order_ ORDER BY time_status";
$result = mysqli_query($connect, $sql);

$sales_by_day = [];

$sql2 = "SELECT MIN(time_status) AS min_date, MAX(time_status) AS max_date FROM order_";
$result2 = mysqli_query($connect, $sql2);

if (mysqli_num_rows($result2) > 0) {
  $row = mysqli_fetch_assoc($result2);
  $start_date = $row['min_date'];
  $end_date = $row['max_date'];
}

$start_date = date('Y-m-d', strtotime($start_date));
$end_date = date('Y-m-d', strtotime($end_date));

$current_date = $start_date;
while ($current_date <= $end_date) {
  $sales_by_day[$current_date] = 0;
  $current_date = date('Y-m-d', strtotime($current_date . ' +1 day'));
}

if (mysqli_num_rows($result) > 0) {
  mysqli_data_seek($result, 0);

  while ($row = mysqli_fetch_assoc($result)) {
    $date = date('Y-m-d', strtotime($row["time_status"]));
    $total_amount = floatval($row["total_amount"]);

    if (isset($sales_by_day[$date])) {
      $sales_by_day[$date] += $total_amount;
    }
  }
}
$date_arr = array_keys($sales_by_day);
$price_arr = array_values($sales_by_day);
?>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<script>
  const ctx = document.getElementById('chart1');
  // const ctx2 = document.getElementById('chart2');

  const date_array = <?php echo json_encode($date_arr); ?>;
  const price_array = <?php echo json_encode($price_arr); ?>;
  console.log(date_array);


  const date_chart_js = date_array.map((day, index) => {
    let dayjs = new Date(day);
    return dayjs.setHours(0, 0, 0, 0);
  })

  function getMonday(d) {
    d = new Date(d);
    var day = d.getDay(),
      diff = d.getDate() - day + (day === 0 ? -6 : 1);
    return new Date(d.setDate(diff));
  }

  const today = new Date();
  const startOfWeek = getMonday(today);
  const endOfWeek = new Date(startOfWeek);
  endOfWeek.setDate(startOfWeek.getDate() + 6);

  const chartConfig = {
    type: 'line',
    data: {
      labels: date_chart_js,
      datasets: [{
        label: 'Day Sales',
        data: price_array,
        borderWidth: 3,
        pointRadius: function (context) {
          return context.raw > 0 ? 3 : 0;
        },
      }]
    },
    options: {
      scales: {
        x: {
          type: 'time',
          time: {
            unit: 'day'
          },
          min: startOfWeek.toISOString().split('T')[0],
          max: endOfWeek.toISOString().split('T')[0],
          offset: true,
        },
        y: {
          beginAtZero: true
        }
      },
    }
  };

  const chart = new Chart(ctx, chartConfig);

  document.getElementById('btnradio1').addEventListener('click', function () {
    const today = new Date();
    const startOfWeek = getMonday(today);
    const endOfWeek = new Date(startOfWeek);
    endOfWeek.setDate(startOfWeek.getDate() + 6);
    chart.options.scales.x.min = startOfWeek.toISOString().split('T')[0];
    chart.options.scales.x.max = endOfWeek.toISOString().split('T')[0];
    chart.update();
  });

  document.getElementById('btnradio2').addEventListener('click', function () {
    const today = new Date();
    const startOfThisWeek = getMonday(today);
    const startOfPreviousWeek = new Date(startOfThisWeek);
    startOfPreviousWeek.setDate(startOfThisWeek.getDate() - 7);
    const endOfPreviousWeek = new Date(startOfPreviousWeek);
    endOfPreviousWeek.setDate(startOfPreviousWeek.getDate() + 6);
    chart.options.scales.x.min = startOfPreviousWeek.toISOString().split('T')[0];
    chart.options.scales.x.max = endOfPreviousWeek.toISOString().split('T')[0];
    chart.update();
  });



  new Chart(ctx2, {
    type: 'doughnut',
    data: {
      labels: [
        'Red',
        'Blue',
        'Yellow'
      ],
      datasets: [{
        label: 'My First Dataset',
        data: [300, 50, 100],
        backgroundColor: [
          'rgb(255, 99, 132)',
          'rgb(54, 162, 235)',
          'rgb(255, 205, 86)'
        ],
        hoverOffset: 4
      }]
    }
  });
</script>