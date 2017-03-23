<style media="screen">

  .l2{
    width: 18% !important;
  }
  .modulos{

    border: 1px solid #ccc;
    height: 200px;

    background-color: #fff;
    border-radius: 5px;
    margin: 0 10px 0 10px;
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
    height: 50px;
    padding: 0 5px 0 5px;

    display: flex;
    -webkit-display:flex;
    align-items: center;
    -webkit-align-items:center;

    justify-content: center;
    -webkit-justify-content: center;
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
    font-size: 7em;
  }
</style>
<div class="container" style="padding:3%;">
  <div class="section">
    <h5>Acesso Rápido</h5>
    <div class="divider"></div>
  </div>

  <div class="center">
    <div class="row valign-wrapper">
    <div class="modulos col s12 m2 l2 z-depth-1">
      <div class="icons">
          <i class="material-icons">shopping_cart</i>
      </div>
      <div class="footer">
        Consultar Produtos
      </div>
    </div>

    <div class="modulos col s12 m2 l2 z-depth-1">
      <div class="icons">
        <i class="material-icons flow-text">local_shipping</i>

      </div>
      <div class="footer">
        Consultar Fornecedores
      </div>
    </div>

    <div class="modulos col s12 m2 l2 z-depth-1">
      <div class="icons">
        <i class="material-icons flow-text">pie_chart</i>
      </div>
      <div class="footer">
        Imprimir Relatórios
      </div>
    </div>

    <div class="modulos col s12 m2 l2 z-depth-1">
      <div class="icons">
        <i class="material-icons">person</i>
      </div>
      <div class="footer">
        Consultar Clientes
      </div>
    </div>

    <div class="modulos col s12 m2 l2 z-depth-1">
      <div class="icons">
        <i class="material-icons">attach_money</i>
      </div>
      <div class="footer">
        Realizar Vendas
      </div>
    </div>
  </div>
  </div>
</div>