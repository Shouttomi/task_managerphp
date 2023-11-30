@extends('layout.baseview')
@section('title','All Tasks')

@section('style')
<style>
    .done {
        text-decoration: line-through;
    }
</style>

@endsection

@section('content')

@include('layout.navigation')

<!-- part 1 -->
<!-- <div class="container mt-5">
    <button class="btn btn-outline-primary mb-5 end-0" onclick="addtask()">Add Tasks</button>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Si No.</th>
                        <th scope="col">Task Description</th>
                        <th scope="col">Task Owner</th>
                        <th scope="col">Task ETA</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody id="taskTable">


                </tbody>
            </table>
        </div>
    </div>
</div> -->

<!-- newpart1 -->
<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h2>All Tasks</h2>
        </div>
        <div class="col-6 text-end">
            <button class="btn btn-outline-primary" onclick="addTask()">Add Task</button>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Si No.</th>
                        <th scope="col">Task Description</th>
                        <th scope="col">Task Owner</th>
                        <th scope="col">Task ETA</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody id="taskTable">
                    <!-- Task data will be populated here -->
                </tbody>
            </table>
        </div>
    </div>
</div>




<!-- part 2 -->
<!-- <div class="modal fade" id="createTaskModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Add Task
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>

                    <div class="form-group">
                        <label for="createTaskDescription">Task Description</label>
                        <input type="text" class="form-control" id="createTaskDescription" placeholder="Enter Task Description">
                    </div>

                    <div class="form-group">
                        <label for="createTaskDescription">Task Owner</label>
                        <input type="text" class="form-control" id="createTaskOwner" placeholder="Enter Task Owner">
                    </div>

                    <div class="form-group">
                        <label for="createTaskDescription">Task Owner Email</label>
                        <input type="text" class="form-control" id="createTaskEmail" placeholder="Enter Task Owner Email">
                    </div>

                    <div class="form-group">
                        <label for="createTaskDescription">Task ETA</label>
                        <input type="date" class="form-control" id="createTaskETA" placeholder="Enter ETA">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="button" onclick="createTask()">Submit</button>

            </div>


        </div>
    </div>
</div> -->

<!-- part2 modified -->
<div class="modal fade" id="createTaskModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Add Task
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>

                    <div class="mb-3">
                        <label for="createTaskDescription" class="form-label">Task Description</label>
                        <input type="text" class="form-control" id="createTaskDescription" placeholder="Enter Task Description">
                    </div>

                    <div class="mb-3">
                        <label for="createTaskOwner" class="form-label">Task Owner</label>
                        <input type="text" class="form-control" id="createTaskOwner" placeholder="Enter Task Owner">
                    </div>

                    <div class="mb-3">
                        <label for="createTaskEmail" class="form-label">Task Owner Email</label>
                        <input type="text" class="form-control" id="createTaskEmail" placeholder="Enter Task Owner Email">
                    </div>

                    <div class="mb-3">
                        <label for="createTaskETA" class="form-label">Task ETA</label>
                        <input type="date" class="form-control" id="createTaskETA" placeholder="Enter ETA">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="button" onclick="createTask()">Submit</button>
            </div>
        </div>
    </div>
</div>





<!-- part3 -->
<!-- <div class="modal fade" id="editTaskModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Add Task
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>

                    <div class="form-group">
                        <label for="editTaskDescription">Task Description</label>
                        <input type="text" class="form-control" id="editTaskDescription" placeholder="Enter Task Description">
                    </div>

                    <div class="form-group">
                        <label for="editTaskDescription">Task Owner</label>
                        <input type="text" class="form-control" id="editTaskOwner" placeholder="Enter Task Owner">
                    </div>

                    <div class="form-group">
                        <label for="editTaskDescription">Task Owner Email</label>
                        <input type="text" class="form-control" id="editTaskEmail" placeholder="Enter Task Owner Email">
                    </div>

                    <div class="form-group">
                        <label for="editTaskDescription">Task ETA</label>
                        <input type="date" class="form-control" id="editTaskETA" placeholder="Enter ETA">
                    </div>

                    <div class="form-group">
                        <label for="editTaskDescription">Task Status</label>
                        <select id="editTaskStatus" class="form-control">
                            <option>Set Task Status</option>
                            <option value="0">In Progress</option>
                            <option value="1">Done</option>

                        </select>

                    </div>

                    <input type="hidden" id="editTaskid">

                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="button" onclick="updateTask()">Submit</button>

            </div>


        </div>
    </div>
</div> -->


<!-- part3 modified -->
<div class="modal fade" id="editTaskModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Edit Task
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>

                    <div class="mb-3">
                        <label for="editTaskDescription" class="form-label">Task Description</label>
                        <input type="text" class="form-control" id="editTaskDescription" placeholder="Enter Task Description">
                    </div>

                    <div class="mb-3">
                        <label for="editTaskOwner" class="form-label">Task Owner</label>
                        <input type="text" class="form-control" id="editTaskOwner" placeholder="Enter Task Owner">
                    </div>

                    <div class="mb-3">
                        <label for="editTaskEmail" class="form-label">Task Owner Email</label>
                        <input type="text" class="form-control" id="editTaskEmail" placeholder="Enter Task Owner Email">
                    </div>

                    <div class="mb-3">
                        <label for="editTaskETA" class="form-label">Task ETA</label>
                        <input type="date" class="form-control" id="editTaskETA" placeholder="Enter ETA">
                    </div>

                    <div class="mb-3">
                        <label for="editTaskStatus" class="form-label">Task Status</label>
                        <select id="editTaskStatus" class="form-control">
                            <option>Set Task Status</option>
                            <option value="0">In Progress</option>
                            <option value="1">Done</option>
                        </select>
                    </div>

                    <input type="hidden" id="editTaskid">

                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="button" onclick="updateTask()">Submit</button>
            </div>
        </div>
    </div>
</div>





<!-- part4 -->
<div class="modal fade" id="doneTaskModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Mark task as done
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to Mark this task as done ?</p>
                <input type="hidden" id="doneTaskid">
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="button" onclick="updateMarkAsDone()">Mark as Done</button>

            </div>


        </div>
    </div>
</div>


<!-- part5 -->
<div class="modal fade" id="deleteTaskModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Delete Task
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p id="deletepara"></p>
                <input type="hidden" id="deleteTaskid">
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-danger" type="button" onclick="updateTaskDelete()">Delete</button>

            </div>


        </div>
    </div>
</div>
@endsection





@section('customjs')
<script>
    $(document).ready(function() {
        getAllTasks();
    });


    /* custom js part1 */
    /*  function getAllTasks() {


         $.ajax({
             type: 'get',
             url: 'http://localhost:8000/api/task',
             success: function(result) {
                 console.log(result);

                 var html = '';
                 for (var i = 0; i < result.length; i++) {

                     var lineThrough = result[i]['status'] == 1? 'class="done"': "";

                     html += '<tr>' +
                         '<th scope="row" '+lineThrough+' >' + (i + 1) + '</th>' +
                         '<td '+lineThrough+' >' + (result[i]['task_description']) + '</td>' +
                         '<td '+lineThrough+' >' + (result[i]['task_owner']) + '</td>' +
                         '<td '+lineThrough+' >' + (result[i]['task_eta']) + '</td>' +
                         '<td '+lineThrough+' >' +
                         '<i class="bi bi-pencil-square" onclick="editTask(' + result[i]['id'] + ')" ></i>' +
                         '<i class="bi bi-check2-square" onclick="markasdone(' + result[i]['id'] + ')"></i>' +
                         '<i class="bi bi-trash" onclick="deleteTask(' + result[i]['id'] + ')" ></i>'

                         +
                         '</td>'

                         +
                         ' </tr>'
                 }
                 $('#taskTable').html(html)

             },
             error: function(e) {
                 console.log(e.responseText);
             }
         })
     } */



    /* customjs part1 modified */
    function getAllTasks() {
        /* ajax Perform an asynchronous HTTP (Ajax) request. */
        $.ajax({
            type: 'get',
            url: 'http://localhost:8000/api/task',
            success: function(result) {
                console.log(result);

                var tableBody = $('#taskTable');
                tableBody.empty(); // Clear the table body before populating it again.

                for (let i = 0; i < result.length; i++) {
                    var lineThrough = result[i]['status'] == 1 ? 'done' : '';

                    var row = $('<tr>');
                    row.append($('<th>').attr('scope', 'row').addClass(lineThrough).text(i + 1));
                    row.append($('<td>').addClass(lineThrough).text(result[i]['task_description']));
                    row.append($('<td>').addClass(lineThrough).text(result[i]['task_owner']));
                    row.append($('<td>').addClass(lineThrough).text(result[i]['task_eta']));



                    var actionCell = $('<td>');
                    var editIcon = $('<i>').addClass('bi bi-pencil-square');
                    var markAsDoneIcon = $('<i>').addClass('bi bi-check2-square');
                    var deleteIcon = $('<i>').addClass('bi bi-trash');

                    editIcon.click(() => {
                        editTask(result[i]['id']);

                    });
                    markAsDoneIcon.click(() => {
                        markasdone(result[i]['id']);
                    });
                    deleteIcon.click(() => {
                        deleteTask(result[i]['id']);
                    });

                    actionCell.append(editIcon);
                    actionCell.append(markAsDoneIcon);
                    actionCell.append(deleteIcon);

                    row.append(actionCell);

                    tableBody.append(row);
                }
            },
            error: function(e) {
                console.log(e.responseText);
            }
        });
    }




    /* customjs part2 */
    function addTask() {
        $("#createTaskModal").modal('show');
    }


    /* customjs part3 */
    function createTask() {

        /* Get the current value of the first element in the set of matched elements. */
        var task_description = $('#createTaskDescription').val()
        var task_owner = $('#createTaskOwner').val()
        var task_owner_email = $('#createTaskEmail').val()
        var task_eta = $('#createTaskETA').val()

        console.log(task_description, task_owner, task_owner_email, task_eta)

        const taskdata = {
            task_description: task_description,
            task_owner: task_owner,
            task_owner_email: task_owner_email,
            task_eta: task_eta
        }
        $.ajax({
            type: 'post',
            url: 'http://localhost:8000/api/task',
            data: taskdata,
            success: function(result) {
                $("#createTaskModal").modal('hide');
                /* this will refresh the table for fresh entries  */
                getAllTasks();

            },
            error: function(e) {
                console.log(e.responseText);
            }
        })






    }



    /* customjs part4 */
    function editTask(id) {

        $.ajax({
            type: 'get',
            url: 'http://localhost:8000/api/task/' + id,
            success: function(result) {


                $("#editTaskDescription").val(result['task_description']);
                $("#editTaskOwner").val(result['task_owner']);
                $("#editTaskEmail").val(result['task_owner_email']);
                $("#editTaskETA").val(result['task_eta']);
                $("#editTaskStatus").val(result['status']);
                $("#editTaskid").val(result['id']);

                console.log($("#editTaskETA").val());


                $("#editTaskModal").modal('show');

            },
            error: function(e) {
                console.log(e.responseText);
            }
        })



    }

    /* customjs part5 */
    function updateTask() {
        console.log('hello')


        var id = $("#editTaskid").val()
        var task_description = $('#editTaskDescription').val()
        var task_owner = $('#editTaskOwner').val()
        var task_owner_email = $('#editTaskEmail').val()
        var task_eta = $('#editTaskETA').val()
        var task_status = $("#editTaskStatus").val()

        console.log(task_eta)



        console.log(task_description, task_owner, task_owner_email, task_eta)

       const taskdata = {
                task_description: task_description,
                task_owner: task_owner,
                task_owner_email: task_owner_email,
                task_eta: task_eta,
                task_status: task_status

            }

        $.ajax({
            type: 'put',
            url: 'http://localhost:8000/api/task/' + id,
            data: taskdata,
            success: function(result) {
                $("#editTaskModal").modal('hide');


                /* this will refresh the table for fresh entries  */
                getAllTasks();

            },
            error: function(e) {
                console.log(e.responseText);
            }
        })
    }




    /* customjs part6 */
    function markasdone(id) {
        $('#doneTaskid').val(id)
        $("#doneTaskModal").modal('show')

    }

    function helper(){

    }


    /* customjs part7 */
    function updateMarkAsDone() {
        var id = $("#doneTaskid").val()


        $.ajax({
            type: 'post',
            url: 'http://localhost:8000/api/task/done/' + id,

            success: function(result) {
                $("#doneTaskModal").modal('hide');





                /* this will refresh the table for fresh entries  */
                getAllTasks();

            },
            error: function(e) {
                console.log(e.responseText);
            }
        })
    }





    /* customjs part8 */
    function deleteTask(id) {
        $('#deleteTaskid').val(id)

        console.log('hello')

        $.ajax({
            type: 'get',
            url: 'http://localhost:8000/api/task/' + id,

            success: function(result) {


                $("#deletepara").text('are you sure you want to delete '+result['task_description']+' task ?');

                console.log($('#deletepara').val());



            },
            error: function(e) {
                console.log(e.responseText);
            }
        })


        $("#deleteTaskModal").modal('show')

    }



    /* customjs part9 */
    function updateTaskDelete() {
        var id = $("#deleteTaskid").val()


        $.ajax({
            type: 'delete',
            url: 'http://localhost:8000/api/task/' + id,

            success: function(result) {
                $("#deleteTaskModal").modal('hide');


                /* this will refresh the table for fresh entries  */
                getAllTasks();

            },
            error: function(e) {
                console.log(e.responseText);
            }
        })
    }
</script>

@endsection
