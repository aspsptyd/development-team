<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('chart-report-itsa'), {
        chart: {
            type: "line",
            fontFamily: 'inherit',
            height: 45.0,
            sparkline: {
                enabled: true
            },
            animations: {
                enabled: true
            },
        },
        fill: {
            opacity: 1,
        },
        stroke: {
            width: [3.5, 2],
            dashArray: [0, 3],
            lineCap: "round",
            curve: "smooth",
        },
        series: [{
            name: "Fixed",
            data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41]
        },{
            name: "Report issue or crashed",
            data: [93, 54, 51, 24, 35, 35, 31, 67, 19, 43, 28, 36, 62, 61]
        }],
        tooltip: {
            theme: 'dark'
        },
        grid: {
            strokeDashArray: 4,
        },
        xaxis: {
            labels: {
                padding: 0,
            },
            tooltip: {
                enabled: false
            },
            type: 'datetime',
        },
        yaxis: {
            labels: {
                padding: 4
            },
        },
        labels: [
            '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03'
        ],
        colors: [tabler.getColor("success"), tabler.getColor("danger")],
        legend: {
            show: false,
        },
    })).render();
    });
    // @formatter:on
</script>