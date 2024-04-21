<?php
include '../src/Tasks.php';
require '../src/xajax_core/xajax.inc.php';

$service = new Google_Service_Tasks($client);

$xajax = new xajax('../src/Tools.php');
$xajax->register(XAJAX_FUNCTION, 'ordenarEnvios');

$xajax->configure('javascript URI', '../src/');
//$xajax->configure('debug', false);
$xajax->processRequest();

function getListasTareas()
{
    global $service;
    $optParams = ['maxResults' => 100];
    $results = $service->tasklists->listTasklists($optParams);
    return $results;
}

function getTareas($id)
{
    global $service;
    $res1 = $service->tasks->listTasks($id);
    return $res1;
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Fontawesome CDN-->
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Repartos</title>
    <?php $xajax->printJavascript(); ?>
    <script src="../js/funciones.js"></script>
</head>

<body style="background:#00bfa5;">
<?php
if (isset($_POST['lat'])) {
    $note = $_POST['lat'] . "," . $_POST['lon'];
    $title = ucwords($_POST['pro']) . ". " . ucwords($_POST['dir']) . ", Almería. ";
    $idLt = $_POST['idLTarea'];
    unset($_SESSION[$idLt]);
    //guardamos la tarea
    $op = ['title' => $title, 'notes' => $note];
    $tarea = new Google_Service_Tasks_Task($op);
    try {
        $res = $service->tasks->insert($idLt, $tarea);
    } catch (Google_Exception $ex) {
        die("Error al guardar la tarea: " . $ex);
    }
    unset($_POST['lat']);
}
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'blt':

            try {
                $service->tasklists->delete($_GET['idlt']);
            } catch (Google_Exception $ex) {
                die("Error al borrar la lista de tareas: " . $ex);
            }
            unset($_SESSION[$_GET['idlt']]);
            break;
        case 'bt':
            try {
                $service->tasks->delete($_GET['idlt'], $_GET['idt']);
            } catch (Google_Exception $ex) {
                die("Error al borrar la tarea: " . $ex);
            }
            unset($_SESSION[$_GET['idlt']]);
            break;
        case 'nlt':
            $opciones = ["title" => $_GET['title']];
            $taskList = new Google_Service_Tasks_TaskList($opciones);
            try {
                $service->tasklists->insert($taskList);
            } catch (Google_Exception $ex) {
                die("Error al crear una lista de tareas: " . $ex);
            }
            break;
        case 'oEnvios':
            $apos = $_GET['pos'];
            $id_lista = $_GET['idLt'];
            unset($_SESSION['idLt']);
            //Obtenemos todas las tareas de esta lista de tareas
            $tareas = getTareas($id_lista);
            foreach ($apos as $k => $v) {
                //los envios me los manda ordenaods del 1 al n
                //en php los array empiezan por cero, poe eso restamos 1
                //asi el envio 1 pasa a ser el 0, el 2 el 1 ...
                $p = $v - 1;
                $arrayO[$k] = $tareas->getItems()[$p]->getTitle();
            }
            $_SESSION[$id_lista] = $arrayO;
    }
}
?>
<h4 class="text-center mt-3">Gestión de Pedidos</h4>
<div class="container mt-4" style='width:80rem;'>
    <form action='<?php echo $_SERVER['PHP_SELF'] ?>' method='get'>
        <div class="row">
            <div class="col-md-3 mb-2">
                <button type='submit' class="btn btn-info"><i class='fas fa-plus mr-1'></i>Nueva Lista de Reparto
                </button>
            </div>
            <input type='hidden' name='action' value='nlt'>
            <div class="col-md-4">
                <input type=text class="form form-control" id="title" name="title" placeholder='Lista de Reparto'
                       required></div>
        </div>
    </form>
    <?php
    $listas = getListasTareas();
    foreach ($listas->getItems() as $lista) {
        if ($lista->getTitle() == "My Tasks" || $lista->getTitle() == "Mis tareas") continue;
        echo "<table class='table mt-2' id='{$lista->getId()}'>\n";
        echo "<thead class='bg-secondary'>\n";
        echo "<tr>\n";
        echo "<th scope='col' style='width:42rem;'>{$lista->getTitle()}</th>\n";
        echo "<th scope='col' class='text-right'>\n";
        echo "<a href='envio.php?id={$lista->getId()}' class='btn btn-info mr-2 btn-sm'><i class='fas fa-plus mr-1'></i>Nuevo</a>\n";
        echo "<button class='btn btn-success mr-2 btn-sm' onclick=\"ordenarEnvios('{$lista->getId()}')\"><i class='fas fa-sort mr-1'></i>ordenar</button>\n";
        echo "<a href='repartos.php?action=blt&idlt={$lista->getId()}' class='btn btn-danger btn-sm' onclick=\"return confirm('¿Borrar Lista?')\"><i class='fas fa-trash mr-1'></i>Borrar</a>\n";
        echo "</th></tr>\n";
        echo "</thead>\n";
        echo "<tbody style='font-size:0.8rem'>\n";
        $tareas = getTareas($lista->getId());
        foreach ($tareas->getItems() as $tarea) {
            echo "<tr>\n";
            echo "<th scope='row'>{$tarea->getTitle()} ({$tarea->getNotes()})\n";
            echo "<input type='hidden' value='{$tarea->getNotes()}'></th>\n";
            echo "<th scope='row' class='text-right'>\n<a href='repartos.php?action=bt&idlt={$lista->getId()}&idt={$tarea->getId()}' class='btn btn-danger btn-sm' onclick=\"return confirm('¿Borrar Tarea?')\">";
            echo "<i class='fas fa-trash mr-1'></i>Borrar</a>\n";
            echo "<a href='#' class='btn btn-info ml-2 btn-sm'><i class='fas fa-map mr-1'></i>Mapa</a>\n</th>\n";
            echo "</tr>\n";
        }
        echo "</tbody>\n";
        echo "</table>\n";
        if (isset($_SESSION[$lista->getId()])) {
            echo "<div class='container mt-2 mb-2' style='font-size:0.8rem'>";
            echo "<ul class='list-group'>";
            foreach ($_SESSION[$lista->getId()] as $k => $v) {
                echo "<li class='list-group-item list-group-item-info'>" . ($k + 1) . ".- " . $v . "</li>";
            }
            echo "</div>";
        }
    }
    ?>


</div>
</body>

</html>
