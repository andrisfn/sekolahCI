<div class="container mt-3">
    <!-- <h1>Hello, <?= $nama; ?>!</h1> -->

    <div id="chart" style="width:100%; height:400px;"></div>

    <!-- <?php foreach ($sekolah as $sekolah) : ?>
        <h1><?= $sekolah['wilayah'] ?></h1>
    <?php endforeach; ?> -->

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var myChart = Highcharts.chart('chart', {

                title: {
                    text: 'Grafik Sekolah Kabupaten Bandung'
                },

                subtitle: {
                    text: 'Tahun 2020'
                },

                yAxis: {
                    title: {
                        text: 'Jumlah Sekolah'
                    }
                },
                xAxis: {
                    categories: {

                    }
                },
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                },

                // plotOptions: {
                //     series: {
                //         label: {
                //             connectorAllowed: false
                //         },
                //         pointStart: 2010
                //     }
                // },

                series: [{
                    name: 'SD',
                    data: []
                }, {
                    name: 'SMP',
                    data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
                }, {
                    name: 'SMA',
                    data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
                }, {
                    name: 'SMK',
                    data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
                }, {
                    name: 'SLB',
                    data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
                }, {
                    name: 'JUMLAH',
                    data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
                }],

                responsive: {
                    rules: [{
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions: {
                            legend: {
                                layout: 'horizontal',
                                align: 'center',
                                verticalAlign: 'bottom'
                            }
                        }
                    }]
                }

            });
        });
    </script>
</div>