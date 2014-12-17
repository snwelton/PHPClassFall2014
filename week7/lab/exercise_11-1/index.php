<?php
if (isset($_POST['tasklist'])) {
    $task_list = $_POST['tasklist'];
} else {
    $task_list = array();

    // some hard-coded starting values to make testing easier
    $task_list[] = 'Write chapter';
    $task_list[] = 'Edit chapter';
    $task_list[] = 'Proofread chapter';
}

$errors = array();

switch( $_POST['action'] ) {
    case 'Add Task':
        $new_task = $_POST['newtask'];
        if (empty($new_task)) {
            $errors[] = 'The new task cannot be empty.';
        } else {
            array_push($task_list, $new_task);
        }
        break;
    case 'Delete Task':
        $task_index = $_POST['taskid'];
        unset($task_list[$task_index]);
        $task_list = array_values($task_list);
        break;
     case 'Modify Task':
        $task_index = $_POST['taskid'];
        $task_to_modify = $task_list[$task_index];
        break;
    //save changes
    case 'Save Changes':
        $i = $_POST['modifiedtaskid'];
        $modified_task = $_POST['modifiedtask'];
        $task_list[$i] = $modified_task;
        $modified_task = '';
        break;
    //cancel
    case 'Cancel Changes':
        $modified_task = '';
        break;
    //promote task code
    case 'Promote Task':
        $task_index = $_POST['taskid'];
        if ($task_index == 0) {  
            $errors[] = 'The first task cannot be promoted.  Please select another task.';
        } else {
            $task_order_default = $task_list[$task_index];
            $task_order_new = $task_list[$task_index-1];
            $task_list[$task_index-1] = $task_order_default;
            $task_list[$task_index] = $task_order_new;
        }
        break;
    case 'Sort Tasks':
        sort($task_list);
        break;
        
    

}

include('task_list.php');
?>