"use strict";

$(function () {
    chart1();
    chart2();
    chart3();
    chart4();
    chart5();

    // select all on checkbox click
    $("[data-checkboxes]").each(function () {
        var me = $(this),
            group = me.data('checkboxes'),
            role = me.data('checkbox-role');

        me.change(function () {
            var all = $('[data-checkboxes="' + group + '"]:not([data-checkbox-role="dad"])'),
                checked = $('[data-checkboxes="' + group + '"]:not([data-checkbox-role="dad"]):checked'),
                dad = $('[data-checkboxes="' + group + '"][data-checkbox-role="dad"]'),
                total = all.length,
                checked_length = checked.length;

            if (role == 'dad') {
                if (me.is(':checked')) {
                    all.prop('checked', true);
                } else {
                    all.prop('checked', false);
                }
            } else {
                if (checked_length >= total) {
                    dad.prop('checked', true);
                } else {
                    dad.prop('checked', false);
                }
            }
        });
    });



});



function chart1() {
    var options = {
        chart: {
            height: 230,
            type: "line",
            shadow: {
                enabled: true,
                color: "#000",
                top: 18,
                left: 7,
                blur: 10,
                opacity: 1
            },
            toolbar: {
                show: false
            }
        },
        colors: ["#786BED", "#999b9c"],
        dataLabels: {
            enabled: true
        },
        stroke: {
            curve: "smooth"
        },
        series: [{
            name: "Activity - 2019",
            data: [50, 150, 140, 360, 320, 302]
        },
        {
            name: "Activity - 2018",
            data: [70, 110, 300, 180, 250, 103]
        }
        ],
        grid: {
            borderColor: "#e7e7e7",
            row: {
                colors: ["#f3f3f3", "transparent"], // takes an array which will be repeated on columns
                opacity: 0.0
            }
        },
        markers: {
            size: 6
        },
        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],

            labels: {
                style: {
                    colors: "#9aa0ac"
                }
            }
        },
        yaxis: {
            title: {
                text: "Activity"
            },
            labels: {
                style: {
                    color: "#9aa0ac"
                }
            },
            min: 5,
            max: 1000
        },
        legend: {
            position: "top",
            horizontalAlign: "right",
            floating: true,
            offsetY: -25,
            offsetX: -5
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart1"), options);

    chart.render();
}

function chart2() {
    var options = {
        chart: {
            height: 250,
            type: 'bar',
            stacked: true,
            toolbar: {
                show: false
            },
            zoom: {
                enabled: true
            }
        },
        responsive: [{
            breakpoint: 480,
            options: {
                legend: {
                    position: 'bottom',
                    offsetX: -10,
                    offsetY: 0
                }
            }
        }],
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '200px',
            },
        },
        series: [{
            name: 'Professional',
            data: [44, 55, 41, 67, 22, 43]
        }, {
            name: 'Skill',
            data: [13, 23, 20, 8, 13, 27]
        }, {
            name: 'Tunas',
            data: [11, 17, 15, 15, 21, 14]
        }],
        xaxis: {
            type: 'datetime',
            categories: ['01/01/2019 GMT', '02/01/2019 GMT', '03/01/2019 GMT', '04/01/2019 GMT', '05/01/2019 GMT', '06/01/2019 GMT'],
            labels: {
                style: {
                    colors: "#9aa0ac"
                }
            }
        },
        yaxis: {
            labels: {
                style: {
                    color: "#9aa0ac"
                }
            }
        },
        legend: {
            position: 'top',
            offsetY: 40,
            show: false,
        },
        fill: {
            opacity: 1
        },
    }

    var chart = new ApexCharts(
        document.querySelector("#chart2"),
        options
    );

    chart.render();

}

function chart3() {
    var options = {
        chart: {
            height: 250,
            type: 'line',
            zoom: {
                enabled: false
            },
            toolbar: {
                show: false
            },

        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            width: [5, 7, 5],
            curve: 'straight',
            dashArray: [0, 8, 5]
        },
        series: [{
            name: "Skill",
            data: [45, 52, 38, 24, 33, 26, 21, 20, 33, 26, 21, 20]
        },
        {
            name: "Tunas",
            data: [35, 41, 62, 42, 13, 18, 29, 37, 13, 18, 29, 37]
        },
        {
            name: 'Professional',
            data: [100, 57, 74, 99, 75, 38, 62, 47, 75, 38, 62, 47]
        }
        ],
        legend: {
            show: false,
        },
        markers: {
            size: 0,

            hover: {
                sizeOffset: 6
            }
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'
            ],
            labels: {
                style: {
                    colors: "#9aa0ac"
                }
            }
        },
        yaxis: {
            labels: {
                style: {
                    color: "#9aa0ac"
                }
            }
        },
        tooltip: {

        },
        grid: {
            borderColor: '#f1f1f1',
        }
    }

    var chart = new ApexCharts(
        document.querySelector("#chart3"),
        options
    );

    chart.render();
}
function chart4() {
    var options = {
        chart: {
            height: 250,
            type: 'area',
            toolbar: {
                show: false
            },

        },
        colors: ['#999b9c', '#4CC2B0'], // line color
        fill: {
            colors: ['#999b9c', '#4CC2B0'] // fill color
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth'
        },
        markers: {
            colors: ['#999b9c', '#4CC2B0'] // marker color
        },
        series: [{
            name: 'series1',
            data: [31, 40, 28, 51, 22, 64, 80, 22, 64, 80]
        }, {
            name: 'series2',
            data: [11, 32, 67, 32, 44, 52, 41, 44, 52, 41]
        }],
        legend: {
            show: false,
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
            labels: {
                style: {
                    colors: "#9aa0ac"
                }
            },
        },
        yaxis: {
            labels: {
                style: {
                    color: "#9aa0ac"
                }
            }
        },
    }

    var chart = new ApexCharts(
        document.querySelector("#chart4"),
        options
    );

    chart.render();

}
//try new chart
function chart5() {
  var options = {
            chart: {
                height: 250,
                type: 'bar',
            },
            plotOptions: {
                bar: {
                    horizontal: true,
                }
            },
            dataLabels: {
                enabled: false
            },
            series: [{
                data: [70, 55, 87]
            }],
            xaxis: {
                categories: ['Tunas', 'Skill', 'Professional'],
            }

        }

       var chart = new ApexCharts(
            document.querySelector("#chart5"),
            options
        );

        chart.render();
}
//end try new chart
