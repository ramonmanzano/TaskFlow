<?php
function obtenerClasePrioridad($prioridad) {
 

return match($prioridad){
    'alta'=>' prioridad-alta',
    'media'=>' prioridad-media',
    'baja'=>' prioridad-baja', 
    default=>'',
};


function renderizarTarea($tarea) {
    $clases = 'task-item';
    
    if ($tarea['completado']) {
        $clases .= ' completed';
    }
    
    $clases .= obtenerClasePrioridad($tarea['prioridad']);
    
    return '<li class="' . htmlspecialchars($clases) . '">' . htmlspecialchars($tarea['titulo']) . '</li>';
}
?>
