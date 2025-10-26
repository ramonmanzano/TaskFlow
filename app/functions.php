<?php
function obtenerClasePrioridad($prioridad) {
    if ($prioridad == 'alta') {
        return ' priority-alta';
    } elseif ($prioridad == 'media') {
        return ' priority-media';
    } else {
        return ' priority-baja';
    }
}

function renderizarTarea($tarea) {
    $clases = 'task-item';
    
    if ($tarea['completado']) {
        $clases .= ' completed';
    }
    
    $clases .= obtenerClasePrioridad($tarea['prioridad']);
    
    return '<li class="' . $clases . '">' . $tarea['titulo'] . '</li>';
}
?>