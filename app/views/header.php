<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <style>
        .task-item {
            padding: 8px;
            margin-bottom: 5px;
            border-left: 5px solid transparent;
        }
        .completed {
            text-decoration: line-through;
            color: gray;
        }
        .priority-alta {
            border-left-color: red;
        }
        .priority-media {
            border-left-color: orange;
        }
        .priority-baja {
            border-left-color: green;
        }
    </style>
</head>
<body>
    <main>
