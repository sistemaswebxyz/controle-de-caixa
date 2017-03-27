var dados = resource.get('/modulos/vendas/getVendas.php',null,function(response){
  var res = JSON.parse(response.data);
  $(function () {
    var myChart = Highcharts.chart('grafico', {
      chart: {
        zoomType: 'xy'
      },
      title: {
        text: 'Gráfico de Vendas'
      },
      xAxis: {
        categories: ['JAN', 'FEV', 'MAR', 'ABR', 'MAI', 'JUN', 'JUL', 'AGO', 'SET', 'OUT', 'NOV', 'DEZ']
      },
      yAxis: {
        title: {
          text: 'Consulta por mês'
        }
      },
      series: [{
        name: 'R$',
        data: res
      }]
    });
  });
});
