<style>
  .modulos{
    border: 1px solid #ccc;
    height: 150px;
    background-color:  #f2f2f2;
    border-radius: 5px;
    position: relative;
  }
  .modulos:hover{
    transition: 0.3s;
    border:1px solid #999;
  }
  .modulos:hover .icons i, .modulos:hover .footer{
    transition: 0.3s;
    color: #404040 !important;
  }

  .modulos .footer{
    border-top: 1px solid #ccc;
    min-width: 100%;
    color: #999;
    font-weight: bold;
    position: absolute;
    bottom: 0;
    left: 0;
    text-align: center;
    height: 35px;
    padding: 0 5px 0 5px;
    line-height: 35px;
  }
  .modulos .icons {
    display: flex;
    -webkit-display:flex;
    align-items: center;
    -webkit-align-items:center;
    justify-content: center;
    -webkit-justify-content: center;
    padding-top: 15%;
  }
  .modulos .icons i {
    color: #999;
    font-size: 4em;
  }
  #grafico{
     height: 240px;
  }
  .dashboard{
    margin:  15px;
  }
  .link-rapido{
    background-color: #fff;
    padding: 1%;
    border:1px solid #ccc;
    margin-bottom: 1%;
  }
  .top-border{
    border-top: 3px solid  #657eb3;
  }

</style>

<div class="dashboard">
  <div class="center-align link-rapido top-border">
    <h5 class="left-align">Acesso Rápido</h5>
    <div class="row">
      <div class=" col s12 m2 l2 ">
        <div class="modulos z-depth-1">
          <div class="icons valing-wrapper">
            <i class="material-icons">shopping_cart</i>
          </div>
          <div class="footer">
            Consultar Produtos
          </div>
        </div>
      </div>

      <div class="col s12 m2 l2">
        <div class="modulos z-depth-1">
          <div class="icons">
            <i class="material-icons flow-text">local_shipping</i>
          </div>
          <div class="footer">
            Consultar Fornecedores
          </div>
        </div>
      </div>

      <div class="col s12 m2 l2">
        <div class="modulos z-depth-1">
          <div class="icons">
            <i class="material-icons flow-text">pie_chart</i>
          </div>
          <div class="footer">
            Imprimir Relatórios
          </div>
        </div>
      </div>

      <div class=" col s12 m2 l2">
        <div class="modulos z-depth-1">
          <div class="icons">
            <i class="material-icons">person</i>
          </div>
          <div class="footer">
            Consultar Clientes
          </div>
        </div>
      </div>

      <div class="col s12 m2 l2">
        <div class="modulos z-depth-1">
          <div class="icons">
            <i class="material-icons">attach_money</i>
          </div>
          <div class="footer">
            Realizar Vendas
          </div>
        </div>
      </div>

      <div class="col s12 m2 l2">
        <div class="modulos z-depth-1">
          <div class="icons">
            <i class="material-icons">attach_money</i>
          </div>
          <div class="footer">
            Gerenciar usuário
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row" >
    <div class="col s12 l8 m8" style="margin:0;padding:0;">
      <div id="grafico" class="valign-wrapper z-depth-1 top-border"></div>
    </div>
    <style>
      .misc01{
        height: 76px;
        background-color: #fff !important;
        border: 1px solid #ccc;
        margin-bottom: 6px;
        position: relative;
      }
      .misc-icons{
        height: 75px;
        width: 75px;

        display: flex;
        justify-content: center;
        -webkit-justify-content: center;
        -webkit-align-items: center;
        align-items: center;
        margin-right: 20px;
      }
      .misc-icons i{
        color: #fff;
        font-weight: bold;
        font-size: 3em !important;
      }
      .misc .title{
        color: #808080;
        font-weight: bold;
        font-size: 9pt;
        margin-top: 3%;

      }
      .misc .content{
        font-weight: bold;
        font-size: 13pt;
        color: #4d4d4d;
      }
    </style>
    <div class="col s12 l4 m4" style="margin-right:0;padding-right:0;">
        <div class="misc">

          <div class="misc01">
            <div class="misc-icons left" style="background-color:#339966">
              <i class="material-icons">attach_money</i>
            </div>
            <div class="title">Este mês:</div>
            <div class="content">R$ 403,00</div>
          </div>

          <div class="misc01">
            <div class="misc-icons left" style="background-color:#4d4dff">
              <i class="material-icons">add</i>
            </div>
            <div class="title">
              Mais vedidos
            </div>
            <div class="content">
                CELULAR SAMSUNG J5
            </div>
            <small class="right" style="margin-right:5%; ">
              <a href="#">ver mais</a>
            </small>
          </div>

          <div class="misc01">
            <div class="misc-icons left" style="background-color:#e69500">
              <i class="material-icons">report_problem</i>
            </div>
            <div class="title">
                Em falta no estoque
            </div>
            <div class="content">
                CONTROLE PLAY STATION 3
            </div>
            <small class="right" style="margin-right:5%; ">
              <a href="#">ver mais</a>
            </small>
          </div>
        </div>
    </div>
  </div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript" src="../js/grafico.js"></script>
