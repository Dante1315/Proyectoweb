<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disponibilidad</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <link rel="stylesheet" href="../css/disponibilidad.css">
</head>
<body>
<?php include '../templates/headerWorker.php'; ?>

    <h1 class="title">Disponibilidad</h1>

    <div class="container">
        <div id="calendar"></div>
        <div class="time-selection">
            <label for="start-time">Hora de inicio:</label>
            <input type="time" id="start-time" name="start-time">
            <label for="end-time">Hora de fin:</label>
            <input type="time" id="end-time" name="end-time">
            <button id="update-btn">Actualizar</button>
        </div>
    </div>

    <?php include '../templates/headerworker.php'; ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                selectable: true,
                selectHelper: true,
                select: function(start, end) {
                    var title = prompt('Enter Event Title');
                    var eventData;
                    if (title) {
                        eventData = {
                            title: title,
                            start: start,
                            end: end
                        };
                        $('#calendar').fullCalendar('renderEvent', eventData, true); 
                    }
                    $('#calendar').fullCalendar('unselect');
                },
                editable: true,
                eventLimit: true 
            });
        });
    </script>
</body>
</html>
