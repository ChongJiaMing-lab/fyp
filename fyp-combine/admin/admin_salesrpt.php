<?php include 'databaseconnect.php' ?>
<?php include 'admin_sidebar.php' ?>

<head>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
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
    .from {
        margin-left: 30px;
    }

    .to {
        margin-top: 10px;
        margin-left: 51px;
    }
</style>

<body>
    <div class="main p-3">
        <h1>Sales Report</h1>
        <hr>
        <form action="generate_report.php" method="POST">
            <label for="from">From Date</label>
            <input type="text" id="from" class="from" name="from"><br>
            <label for="to">To Date</label>
            <input type="text" id="to" class="to" name="to">
            <br><button type="submit" name="sales_report" class="btn btn-success" style="margin-top:20px;">Generate
                Report</button>
        </form>
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
        <div class="chart">
        </div>
    </div>
    <!-- <script>
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
    </script> -->
</body>