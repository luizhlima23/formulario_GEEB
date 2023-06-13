<?php
    // session_start();

    // 
    // // print_r($_SESSION);
    // if((!isset($_SESSION['email'])==true) and (!isset($_SESSION['senha']) == true)){
        
    //     unset( $_SESSION['email']);
    //     unset( $_SESSION['senha']);
    //     header('Location: login.php');
    // }

    include_once('config.php');

    $sql = "SELECT * FROM test_cartas ORDER BY senha ";

    $resuslt = $conexao->query($sql);   

   
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="painel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Painel - Cartas Consoladoras</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Painel - Cartas Consoladoras</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="logout.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>
    <br>
    <?php
        echo "<h2>Bem Vindo!</h2>";
    ?>
    <div class="m-5">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">senha</th>
                    <th scope="col">nome</th>
                    <th scope="col">n_desen1</th>
                    <th scope="col">dt_desen1</th>
                    <th scope="col">idade</th>
                    <th scope="col">pa_desen1</th>
                    <th scope="col">causa</th>
                    <th scope="col">motivo</th>
                    <th scope="col">autorizacao</th>
                    <th scope="col">n_desen2</th>
                    <th scope="col">dt_desen2</th>
                    <th scope="col">pa_desen2</th>
                    <th scope="col">n_desen3</th>
                    <th scope="col">dt_desen3</th>
                    <th scope="col">pa_desen3</th>
                    <th scope="col">n_desen4</th>
                    <th scope="col">dt_desen4</th>
                    <th scope="col">pa_desen4</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($resuslt)){
                        echo "<tr>";
                        echo "<td>".$user_data['senha']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['dt_desen1']."</td>";
                        echo "<td>".$user_data['idade']."</td>";
                        echo "<td>".$user_data['pa_desen1']."</td>";
                        echo "<td>".$user_data['causa']."</td>";
                        echo "<td>".$user_data['motivo']."</td>";
                        echo "<td>".$user_data['autorizacao']."</td>";
                        echo "<td>".$user_data['n_desen2']."</td>";
                        echo "<td>".$user_data['dt_desen2']."</td>";
                        echo "<td>".$user_data['pa_desen2']."</td>";
                        echo "<td>".$user_data['n_desen3']."</td>";
                        echo "<td>".$user_data['dt_desen3']."</td>";
                        echo "<td>".$user_data['pa_desen3']."</td>";
                        echo "<td>".$user_data['n_desen4']."</td>";
                        echo "<td>".$user_data['dt_desen4']."</td>";
                        echo "<td>".$user_data['pa_desen4']."</td>";
                        echo "<td>
                            <a class='btn-sm' href='edit.php?id=$user_data[senha]'>              
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                </svg>
                            </a>                 
                            </td>";
                    }
                 ?>
            </tbody>
        </table>
    </div>

</body>
</html>