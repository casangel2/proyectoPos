<?php

$data = [
    [
        'id' => 1,
        'name' => 'Pedro',
        'email' => 'pedro@gmail.com',
        'date' => '10/11/2023',
    ],
    [
        'id' => 2,
        'name' => 'Jose',
        'email' => 'jose@gmail.com',
        'date' => '10/11/2023',
    ],
    [
        'id' => 3,
        'name' => 'Maria',
        'email' => 'maria@gmail.com',
        'date' => '10/11/2023',
    ],
    [
        'id' => 4,
        'name' => 'Augusto',
        'email' => 'augusto@gmail.com',
        'date' => '10/11/2023',
    ],
    [
        'id' => 5,
        'name' => 'Luis',
        'email' => 'luis@gmail.com',
        'date' => '10/11/2023',
    ],
    [
        'id' => 6,
        'name' => 'Ana',
        'email' => 'ana@gmail.com',
        'date' => '10/11/2023',
    ],
    [
        'id' => 7,
        'name' => 'Carmen',
        'email' => 'carmen@gmail.com',
        'date' => '10/11/2023',
    ],
    [
        'id' => 8,
        'name' => 'Miguel',
        'email' => 'miguel@gmail.com',
        'date' => '10/11/2023',
    ],
    [
        'id' => 9,
        'name' => 'Laura',
        'email' => 'laura@gmail.com',
        'date' => '10/11/2023',
    ],
    [
        'id' => 10,
        'name' => 'Carlos',
        'email' => 'carlos@gmail.com',
        'date' => '10/11/2023',
    ],
    [
        'id' => 11,
        'name' => 'Sofia',
        'email' => 'sofia@gmail.com',
        'date' => '10/11/2023',
    ],
    [
        'id' => 12,
        'name' => 'Fernando',
        'email' => 'fernando@gmail.com',
        'date' => '10/11/2023',
    ],
    [
        'id' => 13,
        'name' => 'Valeria',
        'email' => 'valeria@gmail.com',
        'date' => '10/11/2023',
    ],
    [
        'id' => 14,
        'name' => 'Pablo',
        'email' => 'pablo@gmail.com',
        'date' => '10/11/2023',
    ],
    [
        'id' => 15,
        'name' => 'Isabel',
        'email' => 'isabel@gmail.com',
        'date' => '10/11/2023',
    ],
    [
        'id' => 16,
        'name' => 'Raul',
        'email' => 'raul@gmail.com',
        'date' => '10/11/2023',
    ],
    [
        'id' => 17,
        'name' => 'Paula',
        'email' => 'paula@gmail.com',
        'date' => '10/11/2023',
    ],
    [
        'id' => 18,
        'name' => 'Andres',
        'email' => 'andres@gmail.com',
        'date' => '10/11/2023',
    ],
    [
        'id' => 19,
        'name' => 'Lucia',
        'email' => 'lucia@gmail.com',
        'date' => '10/11/2023',
    ],
    [
        'id' => 20,
        'name' => 'Ricardo',
        'email' => 'ricardo@gmail.com',
        'date' => '10/11/2023',
    ],
    [
        'id' => 21,
        'name' => 'Angela',
        'email' => 'angela@gmail.com',
        'date' => '10/11/2023',
    ],
    [
        'id' => 22,
        'name' => 'Javier',
        'email' => 'javier@gmail.com',
        'date' => '10/11/2023',
    ],
    [
        'id' => 23,
        'name' => 'Monica',
        'email' => 'monica@gmail.com',
        'date' => '10/11/2023',
    ],
    [
        'id' => 24,
        'name' => 'Sergio',
        'email' => 'sergio@gmail.com',
        'date' => '10/11/2023',
    ],
    [
        'id' => 25,
        'name' => 'Rosa',
        'email' => 'rosa@gmail.com',
        'date' => '10/11/2023',
    ],
];


$search = $_GET['search'] ?? null;  // Asignamos null si no está definido
$filtered = $data;  // Inicializamos con el array completo

if ($search) {
    $filtered = array_filter($data, function($item) use ($search) {
        return $item['name'] == $search;
          // Usamos comparación estricta
    });

    $filtered = array_filter($data, function($item) use ($search) {
        return $item['id'] == $search;
          // Usamos comparación estricta
    });
}




?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- iconos -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!--Styles-->
    <link rel="stylesheet" href="css/styles2.css">
    <title>Document</title>

</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="imagenes/logo.png" alt="Company Logo">
                    <h2 class="text-muted">ONE <span class="colorTitle">QUESTION</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-outlined">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="dashboard.php" class="active">
                    <span class="material-symbols-outlined">grid_view</span>
                    <h3>Dashboard</h3>
                </a>

                <a href="index.html">
                    <span class="material-symbols-outlined">person</span>
                    <h3>Customer</h3>
                </a>

                <a href="#">
                    <span class="material-symbols-outlined">list_alt</span>
                    <h3>Orders</h3>
                </a>

                <a href="#">
                    <span class="material-symbols-outlined">show_chart</span>
                    <h3>Analytics</h3>
                </a>

                <a href="#">
                    <span class="material-symbols-outlined">forum</span>
                    <h3>Messages</h3>
                    <span class="message-count"></span>
                </a>

                <a href="#">
                    <span class="material-symbols-outlined">conveyor_belt</span>
                    <h3>Products</h3>
                </a>

                <a href="#">
                    <span class="material-symbols-outlined">report</span>
                    <h3>Reports</h3>
                </a>

                <a href="#">
                    <span class="material-symbols-outlined">settings</span>
                    <h3>Settings</h3>
                </a>

                <a href="#">
                    <span class="material-symbols-outlined">add</span>
                    <h3>Add Product</h3>
                </a>

                <a href="#">
                    <span class="material-symbols-outlined">logout</span>
                    <h3>Log out</h3>
                </a>

            </div>
        </aside>

        <main>

        <div class="recent-orders">
            <form action="" class="searchf">
                    <input type="search" value="<?php echo $search; ?>" placeholder="buscar por nombre" name='search' class="colsesearch">

                </form>
        </div>

            <div class="recent-orders">
                <h2>Ordenes</h2>
                <table>
                    <thead>
                        <tr>
                        
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>date</th>
                            <th>status</th>
                            <th></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php foreach($filtered as $item) {  ?>
                            <tr class="colum">
                            <td><?php echo $item['id']; ?></td>
                            <td><?php echo $item['name']; ?></td>
                            <td><?php echo $item['email']; ?></td>
                            <td><?php echo $item['date']; ?></td>
                            </tr>
                            <?php } ?>
                        

                        

                    </tbody>

                </table>
                <a href="#">show all</a>
            </div>
        </main>
        <!-- messages-->
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-symbols-outlined">light_mode</span>
                    <span class="material-symbols-outlined">dark_mode</span>
                </div>

                <div class="profile">
                    <div class="info">
                        <p>Hii, <b>Camilo</b></p>
                        <small class="text-muted">admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="imagenes/profile-1.png" alt="">
                    </div>
                </div>
            </div>



        </div>

    </div>
</body>


</body>

</html>