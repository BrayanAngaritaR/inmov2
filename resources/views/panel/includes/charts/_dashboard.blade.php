<script type="text/javascript">
	"use strict";

!function (NioApp, $) {
  "use strict";

  var actualDestination = {
    labels: [
         //foreach($destinations as $destination)
         //'Str::limit($destination->title, 10) }}',
         //endforeach
         'EBS', 'EBC', 'Equipamientos de Infraestructuras',  'Equipamientos de Seguridad y Convivencia ESC', 'Equipamientos Institucionales', 'Espacio público', 'Comercial', 'Industrial', 'Residencial', 'Servicios', 'Sin uso'
      ],

    stacked: true,
    dataUnit: 'bienes',
    datasets: [{
      label: "Destinación actual",
      color: ["#b695ff", "#222"],
      // data: [@foreach($destinations as $destination)
      //       {{ $destination->properties_count }},
      //    @endforeach]
      data: [1009, 207, 43, 51, 23, 770, 597, 1, 6094, 111, 2016]
    }

    // , {
    //   label: "Expense",
    //   color: "#f4aaa4",
    //   data: [75, 90, 110, 80, 125, 55, 95, 75, 90, 110, 80, 125]
    // }

    ]
  };

  function barChart(selector, set_data) {
    var $selector = selector ? $(selector) : $('.bar-chart');
    $selector.each(function () {
      var $self = $(this),
          _self_id = $self.attr('id'),
          _get_data = typeof set_data === 'undefined' ? eval(_self_id) : set_data,
          _d_legend = typeof _get_data.legend === 'undefined' ? false : _get_data.legend;

      var selectCanvas = document.getElementById(_self_id).getContext("2d");
      var chart_data = [];

      for (var i = 0; i < _get_data.datasets.length; i++) {
        chart_data.push({
          label: _get_data.datasets[i].label,
          data: _get_data.datasets[i].data,
          // Styles
          backgroundColor: _get_data.datasets[i].color,
          borderWidth: 2,
          borderColor: 'transparent',
          hoverBorderColor: 'transparent',
          borderSkipped: 'bottom',
          barPercentage: .6,
          categoryPercentage: .7
        });
      }

      var chart = new Chart(selectCanvas, {
        type: 'bar',
        data: {
          labels: _get_data.labels,
          datasets: chart_data
        },
        options: {
          legend: {
            display: _get_data.legend ? _get_data.legend : false,
            rtl: NioApp.State.isRTL,
            labels: {
              boxWidth: 30,
              padding: 20,
              fontColor: '#6783b8'
            }
          },
          maintainAspectRatio: false,
          tooltips: {
            enabled: true,
            rtl: NioApp.State.isRTL,
            callbacks: {
              title: function title(tooltipItem, data) {
                return data.datasets[tooltipItem[0].datasetIndex].label;
              },
              label: function label(tooltipItem, data) {
                return data.datasets[tooltipItem.datasetIndex]['data'][tooltipItem['index']] + ' ' + _get_data.dataUnit;
              }
            },
            backgroundColor: '#eff6ff',
            titleFontSize: 13,
            titleFontColor: '#6783b8',
            titleMarginBottom: 6,
            bodyFontColor: '#9eaecf',
            bodyFontSize: 12,
            bodySpacing: 4,
            yPadding: 10,
            xPadding: 10,
            footerMarginTop: 0,
            displayColors: false
          },
          scales: {
            yAxes: [{
              display: true,
              stacked: _get_data.stacked ? _get_data.stacked : false,
              position: NioApp.State.isRTL ? "right" : "left",
              ticks: {
                beginAtZero: true,
                fontSize: 12,
                fontColor: '#9eaecf'
              },
              gridLines: {
                color: NioApp.hexRGB("#526484", .2),
                tickMarkLength: 0,
                zeroLineColor: NioApp.hexRGB("#526484", .2)
              }
            }],
            xAxes: [{
              display: true,
              stacked: _get_data.stacked ? _get_data.stacked : false,
              ticks: {
                fontSize: 12,
                fontColor: '#9eaecf',
                source: 'auto',
                reverse: NioApp.State.isRTL
              },
              gridLines: {
                color: "transparent",
                tickMarkLength: 10,
                zeroLineColor: 'transparent'
              }
            }]
          }
        }
      });
    });
  } // init bar chart


  barChart(); //////// for developer - linechart //////// 
  // Avilable options to pass from outside 
  // labels: array,
  // legend: false - boolean,
  // dataUnit: string, (Used in tooltip or other section for display) 
  // datasets: [{label : string, color: string (color code with # or other format), data: array}]

  var monthlyInfo = {
    labels: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
    dataUnit: 'bienes',
    lineTension: .4,
    legend: true,
    datasets: [{
      label: "Bienes subidos",
      color: "#5ce0aa",
      background: 'transparent',
      data: [{{ $january_properties }}, {{ $february_properties }}, {{ $march_properties }}, {{ $april_properties }}, {{ $may_properties }}, {{ $june_properties }}, {{ $july_properties }}, {{ $august_properties }}, {{ $september_properties }}, {{ $october_properties }}, {{ $november_properties }}, {{ $december_properties }}]
    }, {
      label: "Bienes analizados",
      color: "#9d72ff",
      background: 'transparent',
      data: [{{ $january_properties_published }}, {{ $february_properties_published }}, {{ $march_properties_published }}, {{ $april_properties_published }}, {{ $may_properties_published }}, {{ $june_properties_published }}, {{ $july_properties_published }}, {{ $august_properties_published }}, {{ $september_properties_published }}, {{ $october_properties_published }}, {{ $november_properties_published }}, {{ $december_properties_published }}]
    }]
  };

  var propertiesQty = {
    labels: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
    dataUnit: 'bienes',
    lineTension: .4,
    legend: true,
    datasets: [{
      label: "Cantidad de bienes",
      color: "#9d72ff",
      background: NioApp.hexRGB('#9d72ff', .4),
      data: [{{ $january_properties }}, {{ $february_properties }}, {{ $march_properties }}, {{ $april_properties }}, {{ $may_properties }}, {{ $june_properties }}, {{ $july_properties }}, {{ $august_properties }}, {{ $september_properties }}, {{ $october_properties }}, {{ $november_properties }}, {{ $december_properties }}]
    }]
  };

  var totalEarnings = {
    labels: ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"],
    dataUnit: 'bienes',
    lineTension: .4,
    datasets: [{
      label: "Total de ventas por mes",
      color: "#5ce0aa",
      background: 'transparent',
      data: [10000, 12000, 9000, 30000, 15000, 12000, 8400]
    }, {
      label: "Total de ventas esta semana",
      color: "#9d72ff",
      background: 'transparent',
      data: [1000, 9800, 6000, 2400, 1500, 7100, 2900]
    }]
  };

  // var propertiesQty = {
  //   labels: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
  //   dataUnit: 'bienes',
  //   lineTension: .4,
  //   legend: true,
  //   datasets: [{
  //     label: "Cantidad de bienes",
  //     color: "#9d72ff",
  //     background: NioApp.hexRGB('#9d72ff', .4),
  //     data: [{{ $january_properties }}, {{ $february_properties }}, {{ $march_properties }}, {{ $april_properties }}, {{ $may_properties }}, {{ $june_properties }}, {{ $july_properties }}, {{ $august_properties }}, {{ $september_properties }}, {{ $october_properties }}, {{ $november_properties }}, {{ $december_properties }}]
  //   }]
  // };

  var straightLineChart = {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    dataUnit: 'BTC',
    lineTension: 0,
    datasets: [{
      label: "Total Received",
      color: "#9d72ff",
      background: NioApp.hexRGB('#9d72ff', .3),
      data: [110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95]
    }]
  };

  function lineChart(selector, set_data) {
    var $selector = selector ? $(selector) : $('.line-chart');
    $selector.each(function () {
      var $self = $(this),
          _self_id = $self.attr('id'),
          _get_data = typeof set_data === 'undefined' ? eval(_self_id) : set_data;

      var selectCanvas = document.getElementById(_self_id).getContext("2d");
      var chart_data = [];

      for (var i = 0; i < _get_data.datasets.length; i++) {
        chart_data.push({
          label: _get_data.datasets[i].label,
          tension: _get_data.lineTension,
          backgroundColor: _get_data.datasets[i].background,
          borderWidth: 2,
          borderColor: _get_data.datasets[i].color,
          pointBorderColor: _get_data.datasets[i].color,
          pointBackgroundColor: '#fff',
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: _get_data.datasets[i].color,
          pointBorderWidth: 2,
          pointHoverRadius: 4,
          pointHoverBorderWidth: 2,
          pointRadius: 4,
          pointHitRadius: 4,
          data: _get_data.datasets[i].data
        });
      }

      var chart = new Chart(selectCanvas, {
        type: 'line',
        data: {
          labels: _get_data.labels,
          datasets: chart_data
        },
        options: {
          legend: {
            display: _get_data.legend ? _get_data.legend : false,
            rtl: NioApp.State.isRTL,
            labels: {
              boxWidth: 12,
              padding: 20,
              fontColor: '#6783b8'
            }
          },
          maintainAspectRatio: false,
          tooltips: {
            enabled: true,
            rtl: NioApp.State.isRTL,
            callbacks: {
              title: function title(tooltipItem, data) {
                return data['labels'][tooltipItem[0]['index']];
              },
              label: function label(tooltipItem, data) {
                return data.datasets[tooltipItem.datasetIndex]['data'][tooltipItem['index']] + ' ' + _get_data.dataUnit;
              }
            },
            backgroundColor: '#eff6ff',
            titleFontSize: 13,
            titleFontColor: '#6783b8',
            titleMarginBottom: 6,
            bodyFontColor: '#9eaecf',
            bodyFontSize: 12,
            bodySpacing: 4,
            yPadding: 10,
            xPadding: 10,
            footerMarginTop: 0,
            displayColors: false
          },
          scales: {
            yAxes: [{
              display: true,
              position: NioApp.State.isRTL ? "right" : "left",
              ticks: {
                beginAtZero: false,
                fontSize: 12,
                fontColor: '#9eaecf',
                padding: 10
              },
              gridLines: {
                color: NioApp.hexRGB("#526484", .2),
                tickMarkLength: 0,
                zeroLineColor: NioApp.hexRGB("#526484", .2)
              }
            }],
            xAxes: [{
              display: true,
              ticks: {
                fontSize: 12,
                fontColor: '#9eaecf',
                source: 'auto',
                padding: 5,
                reverse: NioApp.State.isRTL
              },
              gridLines: {
                color: "transparent",
                tickMarkLength: 10,
                zeroLineColor: NioApp.hexRGB("#526484", .2),
                offsetGridLines: true
              }
            }]
          }
        }
      });
    });
  } // init line chart


  lineChart(); //////// for developer - pieChart //////// 
  // Avilable options to pass from outside 
  // labels: array,
  // legend: false - boolean,
  // dataUnit: string, (Used in tooltip or other section for display) 
  // datasets: [{label : string, color: string (color code with # or other format), data: array}]

  var pieChartData = {
    labels: ["Total", "Para la venta"],
    dataUnit: 'bienes',
    legend: false,
    datasets: [{
      borderColor: "#fff",
      background: ["#8feac5", "#f4aaa4"],
      data: [{{ $properties_count }}, {{ $for_sale_properties }}]
    }]
  };

  function pieChart(selector, set_data) {
    var $selector = selector ? $(selector) : $('.pie-chart');
    $selector.each(function () {
      var $self = $(this),
          _self_id = $self.attr('id'),
          _get_data = typeof set_data === 'undefined' ? eval(_self_id) : set_data;

      var selectCanvas = document.getElementById(_self_id).getContext("2d");
      var chart_data = [];

      for (var i = 0; i < _get_data.datasets.length; i++) {
        chart_data.push({
          backgroundColor: _get_data.datasets[i].background,
          borderWidth: 2,
          borderColor: _get_data.datasets[i].borderColor,
          hoverBorderColor: _get_data.datasets[i].borderColor,
          data: _get_data.datasets[i].data
        });
      }

      var chart = new Chart(selectCanvas, {
        type: 'pie',
        data: {
          labels: _get_data.labels,
          datasets: chart_data
        },
        options: {
          legend: {
            display: _get_data.legend ? _get_data.legend : false,
            rtl: NioApp.State.isRTL,
            labels: {
              boxWidth: 12,
              padding: 20,
              fontColor: '#6783b8'
            }
          },
          rotation: -.2,
          maintainAspectRatio: false,
          tooltips: {
            enabled: true,
            rtl: NioApp.State.isRTL,
            callbacks: {
              title: function title(tooltipItem, data) {
                return data['labels'][tooltipItem[0]['index']];
              },
              label: function label(tooltipItem, data) {
                return data.datasets[tooltipItem.datasetIndex]['data'][tooltipItem['index']] + ' ' + _get_data.dataUnit;
              }
            },
            backgroundColor: '#eff6ff',
            titleFontSize: 13,
            titleFontColor: '#6783b8',
            titleMarginBottom: 6,
            bodyFontColor: '#9eaecf',
            bodyFontSize: 12,
            bodySpacing: 4,
            yPadding: 10,
            xPadding: 10,
            footerMarginTop: 0,
            displayColors: false
          }
        }
      });
    });
  } // init pie chart


  pieChart();
  var doughnutChartData = {
    labels: ["Total de bienes", "Bienes en oportunidad"],
    dataUnit: 'bienes',
    legend: false,
    datasets: [{
      borderColor: "#fff",
      background: ["#8feac5", "#b695ff"],
      data: [12972, 124]
    }]
  };

  var georeferencedProperties = {
    labels: ["Total de bienes", "Bienes georreferenciados"],
    dataUnit: 'bienes',
    legend: false,
    datasets: [{
      borderColor: "#fff",
      background: ["#8feac5", "#b695ff"],
      data: [12972, 1664]
    }]
  };


  var forSaleProperties = {
    labels: ["Total de bienes", "Bienes para la venta"],
    dataUnit: 'bienes',
    legend: false,
    datasets: [{
      borderColor: "#fff",
      background: ["#8feac5", "#b695ff"],
      data: [12972, 147]
    }]
  };

  var rphProperties = {
    labels: ["Sin RPH", "Con RPH"],
    dataUnit: 'bienes',
    legend: false,
    datasets: [{
      borderColor: "#fff",
      background: ["#8feac5", "#b695ff"],
      data: [12314, 658]
    }]
  };

  
  function doughnutChart(selector, set_data) {
    var $selector = selector ? $(selector) : $('.doughnut-chart');
    $selector.each(function () {
      var $self = $(this),
          _self_id = $self.attr('id'),
          _get_data = typeof set_data === 'undefined' ? eval(_self_id) : set_data;

      var selectCanvas = document.getElementById(_self_id).getContext("2d");
      var chart_data = [];

      for (var i = 0; i < _get_data.datasets.length; i++) {
        chart_data.push({
          backgroundColor: _get_data.datasets[i].background,
          borderWidth: 2,
          borderColor: _get_data.datasets[i].borderColor,
          hoverBorderColor: _get_data.datasets[i].borderColor,
          data: _get_data.datasets[i].data
        });
      }

      var chart = new Chart(selectCanvas, {
        type: 'doughnut',
        data: {
          labels: _get_data.labels,
          datasets: chart_data
        },
        options: {
          legend: {
            display: _get_data.legend ? _get_data.legend : false,
            rtl: NioApp.State.isRTL,
            labels: {
              boxWidth: 12,
              padding: 20,
              fontColor: '#6783b8'
            }
          },
          rotation: 1,
          cutoutPercentage: 40,
          maintainAspectRatio: false,
          tooltips: {
            enabled: true,
            rtl: NioApp.State.isRTL,
            callbacks: {
              title: function title(tooltipItem, data) {
                return data['labels'][tooltipItem[0]['index']];
              },
              label: function label(tooltipItem, data) {
                return data.datasets[tooltipItem.datasetIndex]['data'][tooltipItem['index']] + ' ' + _get_data.dataUnit;
              }
            },
            backgroundColor: '#eff6ff',
            titleFontSize: 13,
            titleFontColor: '#6783b8',
            titleMarginBottom: 6,
            bodyFontColor: '#9eaecf',
            bodyFontSize: 12,
            bodySpacing: 4,
            yPadding: 10,
            xPadding: 10,
            footerMarginTop: 0,
            displayColors: false
          }
        }
      });
    });
  } // init doughnut chart


  doughnutChart();

  var trafficSources = {
        labels : ["Alta", "Media", "Baja"],
        dataUnit : 'bienes en oportunidad',
        legend: false,
        datasets : [{
            borderColor : "#fff",
            background : ["#3271fb","#44cddb", "#bc96ff"],
            data: [305, 159, 82]
        }]
    };

    var forSalePropertiesValentina = {
        labels : ["Total de bienes", "Bienes para la venta"],
        dataUnit : 'bienes venta',
        legend: false,
        datasets : [{
            borderColor : "#fff",
            background : ["#3271fb","#44cddb"],
            data: [12972, 147]
        }]
    };

    var georeferencedPropertiesValentina = {
        labels : ["Total de bienes", "Bienes georreferenciados"],
        dataUnit : 'bienes venta',
        legend: false,
        datasets : [{
            borderColor : "#fff",
            background : ["#3271fb","#44cddb"],
            data: [12972, 147]
        }]
    };

    var rphPropertiesValentina = {
        labels : ["Bienes con RPH", "Bienes sin RPH"],
        dataUnit : 'bienes venta',
        legend: false,
        datasets : [{
            borderColor : "#fff",
            background : ["#3271fb","#44cddb"],
            data: [12972, 147]
        }]
    };

    function ecommerceDoughnutS1(selector, set_data){
        var $selector = (selector) ? $(selector) : $('.ecommerce-doughnut-s1');
        $selector.each(function(){
            var $self = $(this), _self_id = $self.attr('id'), _get_data = (typeof set_data === 'undefined') ? eval(_self_id) : set_data;
            var selectCanvas = document.getElementById(_self_id).getContext("2d");

            var chart_data = [];
            for (var i = 0; i < _get_data.datasets.length; i++) {
                chart_data.push({
                    backgroundColor: _get_data.datasets[i].background,
                    borderWidth:2,
                    borderColor: _get_data.datasets[i].borderColor,
                    hoverBorderColor: _get_data.datasets[i].borderColor,
                    data: _get_data.datasets[i].data,
                });
            } 
            var chart = new Chart(selectCanvas, {
                type: 'doughnut',
                data: {
                    labels: _get_data.labels,
                    datasets: chart_data,
                },
                options: {
                    legend: {
                        display: (_get_data.legend) ? _get_data.legend : false,
                        rtl: NioApp.State.isRTL,
                        labels: {
                            boxWidth:12,
                            padding:20,
                            fontColor: '#6783b8',
                        }
                    },
                    rotation: -1.5,
                    cutoutPercentage:70,
                    maintainAspectRatio: false,
                    tooltips: {
                        enabled: true,
                        rtl: NioApp.State.isRTL,
                        callbacks: {
                            title: function(tooltipItem, data) {
                                return data['labels'][tooltipItem[0]['index']];
                            },
                            label: function(tooltipItem, data) {
                                return data.datasets[tooltipItem.datasetIndex]['data'][tooltipItem['index']] + ' ' + _get_data.dataUnit;
                            }
                        },
                        backgroundColor: '#1c2b46',
                        titleFontSize: 13,
                        titleFontColor: '#fff',
                        titleMarginBottom: 6,
                        bodyFontColor: '#fff',
                        bodyFontSize: 12,
                        bodySpacing:4,
                        yPadding: 10,
                        xPadding: 10,
                        footerMarginTop: 0,
                        displayColors: false
                    },
                }
            });
        })
    }

    NioApp.coms.docReady.push(function(){ ecommerceDoughnutS1(); });  




  var TrafficChannelDoughnutData = {
    labels: ["Sin RPH", "Con RPH"],
    dataUnit: 'bienes',
    legend: false,
    datasets: [{
      borderColor: "#fff",
      background: ["#9d72ff", "#b8acff"],
      data: [{{ ($properties_count - $rph_properties_count) }}, {{ $rph_properties_count }}]
    }]
  };


  function analyticsDoughnut(selector, set_data) {
    var $selector = selector ? $(selector) : $('.analytics-doughnut');
    $selector.each(function () {
      var $self = $(this),
          _self_id = $self.attr('id'),
          _get_data = typeof set_data === 'undefined' ? eval(_self_id) : set_data;

      var selectCanvas = document.getElementById(_self_id).getContext("2d");
      var chart_data = [];

      for (var i = 0; i < _get_data.datasets.length; i++) {
        chart_data.push({
          backgroundColor: _get_data.datasets[i].background,
          borderWidth: 2,
          borderColor: _get_data.datasets[i].borderColor,
          hoverBorderColor: _get_data.datasets[i].borderColor,
          data: _get_data.datasets[i].data
        });
      }

      var chart = new Chart(selectCanvas, {
        type: 'doughnut',
        data: {
          labels: _get_data.labels,
          datasets: chart_data
        },
        options: {
          legend: {
            display: _get_data.legend ? _get_data.legend : false,
            rtl: NioApp.State.isRTL,
            labels: {
              boxWidth: 12,
              padding: 20,
              fontColor: '#6783b8'
            }
          },
          rotation: -1.5,
          cutoutPercentage: 70,
          maintainAspectRatio: false,
          tooltips: {
            enabled: true,
            rtl: NioApp.State.isRTL,
            callbacks: {
              title: function title(tooltipItem, data) {
                return data['labels'][tooltipItem[0]['index']];
              },
              label: function label(tooltipItem, data) {
                return data.datasets[tooltipItem.datasetIndex]['data'][tooltipItem['index']] + ' ' + _get_data.dataUnit;
              }
            },
            backgroundColor: '#1c2b46',
            titleFontSize: 13,
            titleFontColor: '#fff',
            titleMarginBottom: 6,
            bodyFontColor: '#fff',
            bodyFontSize: 12,
            bodySpacing: 4,
            yPadding: 10,
            xPadding: 10,
            footerMarginTop: 0,
            displayColors: false
          }
        }
      });
    });
  } // init chart


  NioApp.coms.docReady.push(function () {
    analyticsDoughnut();
  });


  // var georeferencedProperties = {
  //   labels: ["Total", "Georreferenciados"],
  //   dataUnit: 'bienes',
  //   legend: true,
  //   datasets: [{
  //     borderColor: "#fff",
  //     background: [NioApp.hexRGB("#f4aaa4", .8), NioApp.hexRGB("#b695ff", .8)],
  //     //data: [{{ $georeferenced_properties_count }}, {{ $properties_count }}]
  //     data: [1664, {{ $properties_count }}]
  //   }]
  // };

  function polarAreaChart(selector, set_data) {
    var $selector = selector ? $(selector) : $('.polar-chart');
    $selector.each(function () {
      var $self = $(this),
          _self_id = $self.attr('id'),
          _get_data = typeof set_data === 'undefined' ? eval(_self_id) : set_data;

      var selectCanvas = document.getElementById(_self_id).getContext("2d");
      var chart_data = [];

      for (var i = 0; i < _get_data.datasets.length; i++) {
        chart_data.push({
          backgroundColor: _get_data.datasets[i].background,
          borderWidth: 2,
          borderColor: _get_data.datasets[i].borderColor,
          hoverBorderColor: _get_data.datasets[i].borderColor,
          data: _get_data.datasets[i].data
        });
      }

      var chart = new Chart(selectCanvas, {
        type: 'polarArea',
        data: {
          labels: _get_data.labels,
          datasets: chart_data
        },
        options: {
          legend: {
            display: _get_data.legend ? _get_data.legend : false,
            rtl: NioApp.State.isRTL,
            labels: {
              boxWidth: 12,
              padding: 20,
              fontColor: '#6783b8'
            }
          },
          maintainAspectRatio: false,
          tooltips: {
            enabled: true,
            rtl: NioApp.State.isRTL,
            callbacks: {
              title: function title(tooltipItem, data) {
                return data['labels'][tooltipItem[0]['index']];
              },
              label: function label(tooltipItem, data) {
                return data.datasets[tooltipItem.datasetIndex]['data'][tooltipItem['index']] + ' ' + _get_data.dataUnit;
              }
            },
            backgroundColor: '#eff6ff',
            titleFontSize: 13,
            titleFontColor: '#6783b8',
            titleMarginBottom: 6,
            bodyFontColor: '#9eaecf',
            bodyFontSize: 12,
            bodySpacing: 4,
            yPadding: 10,
            xPadding: 10,
            footerMarginTop: 0,
            displayColors: false
          }
        }
      });
    });
  } // init line chart


  polarAreaChart();
}(NioApp, jQuery);


   /*---------------------------
      Highcharts   
   ---------------------------*/

   $(function () {

      //Configuración para todas las gráficas de Highcharts
      Highcharts.setOptions({
         chart: {
            style:{
               // fontFamily:'Arial, Helvetica, sans-serif',
               fontSize: '2em',
               color:'#f00'
            }
         }
      });

      //Bienes por comuna
      $('#commune_properties').highcharts({
         chart: {
            type: 'column'
         },
         title: {
            text: 'Bienes por comuna'
         },
         colors: [
            '#816bff',
            '#f4aaa5',
            '#b7acff',
            '#8feac4'
         ],
         legend: {
            layout: 'horizontal',
            align: 'center',
            verticalAlign: 'bottom',
            borderWidth: 0,
            backgroundColor: '#FFFFFF'
         },
         xAxis: {
            categories: [
               'Por comuna'
            ]
         },
         yAxis: {
            title: {
               text: 'Cantidad por comuna',
               style: {
                  fontSize: 'small'
               }
            }
         },
         tooltip: {
            shared: false,
            valueSuffix: ' bienes'
         },
         credits: {
            enabled: false
         },
         plotOptions: {
            areaspline: {
               fillOpacity: 0.1
            },
            series: {
               groupPadding: .15
            }
         },
         series: [
            {
               name: 'Popular',
               data: [3193]
            }, 

            {
               name: 'Santa Cruz',
               data: [1294]
            }, 

            {
               name: 'Manrique',
               data: [442]
            }, 

            {
               name: 'Aranjuez',
               data: [361]
            }, 

            {
               name: 'Castilla',
               data: [313]
            },

            {
               name: 'Doce de octubre',
               data: [466]
            }, 

            {
               name: 'Robledo',
               data: [526]
            }, 

            {
               name: 'Villa Hermosa',
               data: [984]
            }, 

            {
               name: 'Buenos Aires',
               data: [200]
            }, 

            {
               name: 'La Candelaria',
               data: [332]
            }, 

            {
               name: 'Laureles',
               data: [108]
            }, 

            {
               name: 'La América',
               data: [156]
            },

            {
               name: 'San Javier',
               data: [1186]
            }, 

            {
               name: 'Poblado',
               data: [89]
            }, 

            {
               name: 'Belén',
               data: [138]
            }, 

            {
               name: 'Guayabal',
               data: [378]
            }, 

            //foreach($communes as $commune)
            // {
            //    name: '$commune->name }}',
            //    data: [$commune->properties_count }}]
            // },
            //endforeach
            ]
         }
      );

      //Bienes por corregimiento
      $('#territory_properties').highcharts({
         chart: {
            type: 'column'
         },
         title: {
            text: 'Bienes por corregimiento'
         },
         colors: [
            '#816bff',
            '#f4aaa5',
            '#b7acff',
            '#8feac4'
         ],
         legend: {
            layout: 'horizontal',
            align: 'center',
            verticalAlign: 'bottom',
            borderWidth: 0,
            backgroundColor: '#FFFFFF'
         },
         xAxis: {
            categories: [
               'Por comuna'
            ]
         },
         yAxis: {
            title: {
               text: 'Cantidad por corregimiento',
               style: {
                  fontSize: 'small'
               }
            }
         },
         tooltip: {
            shared: false,
            valueSuffix: ' bienes'
         },
         credits: {
            enabled: false
         },
         plotOptions: {
            areaspline: {
               fillOpacity: 0.1
            },
            series: {
               groupPadding: .15
            }
         },
         series: [
            {
               name: 'Palmitas',
               data: [56]
            },

            {
               name: 'San Cristóbal',
               data: [274]
            },

            {
               name: 'Altavista',
               data: [95]
            },

            {
               name: 'San Antonio de Prado',
               data: [235]
            },

            {
               name: 'Santa Elena',
               data: [107]
            },


            ]
         }
      );

      //Bienes por secretaría adscrita
      $('#secretarship_properties').highcharts({
         chart: {
            type: 'column'
         },
         title: {
            text: 'Bienes por secretaría adscrita'
         },
         colors: [
            '#b7acff'
         ],
         legend: {
            layout: 'horizontal',
            align: 'center',
            verticalAlign: 'bottom',
            borderWidth: 0,
            backgroundColor: '#FFFFFF'
         },
         xAxis: {
            categories: [
               'Lista de secretarías'
            ]
         },
         yAxis: {
            title: {
               text: 'Bienes por secretaría',
               style: {
                  fontSize: 'small'
               }
            }
         },
         tooltip: {
            shared: false,
            valueSuffix: ' bienes'
         },
         credits: {
            enabled: false
         },
         plotOptions: {
            areaspline: {
               fillOpacity: 0.1
            },
            series: {
               groupPadding: .15
            }
         },
         series: [
         @foreach($secretaryships as $secretaryship)
         {
            name: '{{ $secretaryship->title }}',
            data: [{{ $secretaryship->properties_count }}]
         },
         @endforeach
         ]
      });

      //Bienes por acción
      $('#action_properties').highcharts({
         chart: {
            type: 'bar'
         },
         title: {
            text: 'Bienes por acción'
         },
         colors: [
            '#b7acff'
         ],
         legend: {
            layout: 'horizontal',
            align: 'center',
            verticalAlign: 'bottom',
            borderWidth: 0,
            backgroundColor: '#FFFFFF'
         },

         plotOptions: {
            bar: {
               pointWidth: 25,
               color: "#90d6f3",
               colorByPoint: true,
               colors: [
                 "#90d6f3",
                 "#61c5ef",
                 "#0fa0dd"
               ]
            },
         },

         tooltip: {
            shared: false,
            valueSuffix: ' bienes'
         },
         credits: {
            enabled: false
         },

         xAxis: {
            min: 0,
            title: {
               text: null
            },
            labels: {
               "style" : {
               textTransform: "uppercase",
               color: "#222"
               }
            },
            categories: [
               //foreach($actions as $action)
                  //"$action->title }}",
               //endforeach
               'Venta', 'Venta o arriendo', 'Desenglobe', 'Englobe', 'Cesión', 'Revisión', 'Oportunidad inmobiliaria', 'Sin acción'
            ]
         },
         yAxis: {
            title: {
               text: "Bienes por acción",
               margin: 15,
               style: {
                  fontSize: "10px",
                  fontWeight: "normal",
                  textTransform: "uppercase",
                  color: "#bbb"
               }
            },
            labels: {
               "style" : {
                  fontSize: "12px",
                  color: "#222"
               }
            }
         },
         series: [
            {
               "type": "bar",
               "data": [
                  //foreach($actions as $action)
                  //$action->properties_count }},
                  //endforeach
                  98, 406, 67, 422, 24, 2394, 124, 1075
               ]
            }
         ]
      });
   });
</script>