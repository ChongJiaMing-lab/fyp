<?php include 'databaseconnect.php' ?>
<?php include 'admin_sidebar.php' ?>

<head>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <script src="
    https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js
    "></script>
    <script
        src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
    <script>
        $(function () {
            var dateFormat = "yy/mm/dd",
                from = $("#from")
                    .datepicker({
                        defaultDate: "+1w",
                        changeMonth: true,
                        numberOfMonths: 1,
                        dateFormat: 'yy/mm/dd'
                    })
                    .on("change", function () {
                        to.datepicker("option", "minDate", getDate(this));
                    }),
                to = $("#to").datepicker({
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 1,
                    dateFormat: 'yy/mm/dd'
                })
                    .on("change", function () {
                        from.datepicker("option", "maxDate", getDate(this));
                    });

            function getDate(element) {
                var date;
                try {
                    date = $.datepicker.parseDate(dateFormat, element.value);
                } catch (error) {
                    date = null;
                }

                return date;
            }
        });
    </script>
</head>
<style>
    input {
        border-radius: 5px;
        width: 130px;
    }

    .from {
        /* margin-left: 30px; */
    }

    .to {
        margin-top: 10px;
        /* margin-left: 51px; */
    }
</style>

<body>
    <div class="main p-3">
        <div class="head" style="display:flex;">
            <i class="lni lni-stats-up" style="font-size:50px;"></i>
            <h1 style="margin: 12px 0 0 30px;">Sales Report</h1>
            <hr>
        </div>
        <hr>
        <form action="generate_report.php" method="POST">
            <label for="from">From:</label>
            <input type="text" id="from" class="from" name="from" onchange="startDateFilter(this)"><i
                class="lni lni-angle-double-right" style="font-size:23px;
                position:relative; left:3px; top:5px;"></i>
            <label for="to">To:</label>
            <input type="text" id="to" class="to" name="to" onchange="endDateFilter(this)">
            <br><button type="submit" name="sales_report" class="btn btn-success" style="margin-top:20px;">Generate
                Report</button>
        </form>
        <hr>
        <div class="chart1">
            <h1 style="align-items: center;">Chart</h1>
            <canvas id="chart1" style="width:100%;max-width:1000px; height:300px;"></canvas>
        </div>
        <table class="table" style="margin-top:20px;">
            <thead>
                <tr>
                    <th scope="col" style="width:1px;">Order#</th>
                    <th scope="col" style="width:200px;">Created by:</th>
                    <th scope="col" style="width:200px;">Created Time</th>
                    <th scope="col" style="width:100px;">Total</th>
                    <th scope="col">Delivery Status</th>
                </tr>
            </thead>
            <tbody id="table-body">


            </tbody>
        </table>
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
    const ctx2 = document.getElementById('chart2');

    const date_array = <?php echo json_encode($date_arr); ?>;
    const price_array = <?php echo json_encode($price_arr); ?>;
    console.log(date_array);

    const date_chart_js = date_array.map((day, index) => {
        let dayjs = new Date(day);
        return dayjs.setHours(0, 0, 0, 0);
    })

    const data = {
        labels: date_chart_js,
        datasets: [{
            label: 'Daily Sales',
            data: price_array,
            borderWidth: 3,
            pointRadius: function (context) {
                return context.raw > 0 ? 3 : 0;
            }
        }]
    };

    const config = {
        type: 'line',
        data,
        options: {
            scales: {
                x: {
                    min: '2020-01-01',
                    max: '2020-01-02',
                    type: 'time',
                    time: {
                        unit: 'day'
                    },
                    offset: true,
                },
                y: {
                    beginAtZero: true
                }
            },
        }
    };

    const myChart = new Chart(
        document.getElementById('chart1'),
        config
    );

    function startDateFilter(date) {
        const startDate = new Date(date.value);

        console.log(startDate.setHours(0, 0, 0, 0));
        myChart.config.options.scales.x.min = startDate.setHours(0, 0, 0, 0);
        myChart.update();
    }
    function endDateFilter(date) {
        const endDate = new Date(date.value);

        console.log(endDate.setHours(0, 0, 0, 0));
        myChart.config.options.scales.x.max = endDate.setHours(0, 0, 0, 0);
        myChart.update();
    }
    $(document).ready(function () {
        $('#from, #to').on('change keyup', function () {
            var from = $('#from').val();
            var to = $('#to').val();
            $.ajax({
                url: 'run_query.php',
                method: 'POST',
                data: { from2: from, to2: to },
                success: function (response) {
                    $('#table-body').html(response);
                }
            });
        });
    });
</script>