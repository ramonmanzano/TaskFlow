<?php
require_once '../app/functions.php';

$tareas = [
        ['titulo' => 'Esta es mi tarea 1 ', 'completado' => true, 'prioridad' => 'alta'],
        ['titulo' => 'Esta es mi tarea 2', 'completado' => true, 'prioridad' => 'alta'],
        ['titulo' => 'Esta es mi tarea 3', 'completado' => false, 'prioridad' => 'media'],
        ['titulo' => 'Esta es mi tarea 4', 'completado' => false, 'prioridad' => 'alta'],
        ['titulo' => 'Esta es mi tarea 5', 'completado' => false, 'prioridad' => 'baja']
        ];
                        
]
include '../app/views/header.php';
?>

<h2>Mis Tareas</h2>
<ul>
    <?php foreach ($tareas as $tarea): ?>
        <?php echo renderizarTarea($tarea); ?>
    <?php endforeach; ?>
</ul>

<?php include '../app/views/footer.php'; ?>