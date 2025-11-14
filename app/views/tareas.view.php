<?php include '../app/views/header.php'; ?>

<h2>Tareas Pendientes</h2>
<ul>
    <?php
    foreach ($tareas as $tarea) {echo renderizarTarea($tarea);}
    ?>
</ul>

<?php include '../app/views/footer.php'; ?>
