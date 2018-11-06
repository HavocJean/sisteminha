<?php
    include "header.php";
    include_once "php/ClassLogin.php";
    include_once "php/ClassPeso.php";

    $logados = new Login();
    $logados->atualizaip();

    $pesado = new Peso();
    $peitos = $pesado->selecionarVariosPeitos($_SESSION['login']);
?>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 menubar">
                <ul>
                    <li><img src="imgs/user.png" width="15px;"><a href="logado.php"> <?php foreach($sql as $s){ echo $s['nome']; } ?></a></li> 
                    <li><img src="imgs/peito.png" width="20px;"><a href="peito.php"> Treino Peito</a></li>
                    <li><img src="imgs/peito.png" width="20px;"><a href="triceps.php"> Treino Triceps</a></li>
                    <li><img src="imgs/peito.png" width="20px;"><a href=""> Treino </a></li>
                    <li><img src="imgs/peito.png" width="20px;"><a href=""> Treino </a></li>
                    <li><img src="imgs/logout.png" width="20px;"><a href="index.php"> Logout </a></li>
                </ul>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-5">
                        <h1>Supino Reto</h1>
                        <?php foreach($peitos as $p){ echo $p['supino_reto']."<br>"; } ?>
                    </div>
                    <div class="col-7">
                        <canvas id="bar-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    new Chart(document.getElementById("bar-chart"), {
    type: 'line',
    data: {
      labels: ["Dia1", "Dia2", "Dia3", "Dia4", "Dia5", "Dia6", "Dia7"],
      datasets: [
        {
          label: "Peso levantado: ",
          borderColor: ["#3e95cd"],
          data: [18, 22, 30, 25, 27, 30, 31]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Supino Reto (últimos 7 adicionados)'
      }
    }
});
</script>
