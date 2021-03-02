<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php include 'includes/header.php' ?>
    <body>
        <?php
            require_once 'controllers/task.php';
            $task = new Task;
            
            $id = $_GET['id'];
            
            // Show task
            $data = $task->show($id);  
            
            $statusOptions = ['to do', 'doing', 'done'];
        ?>
        
        <div class="container p-4">
            <!-- formulario -->
            <form method="POST" action="request/editRequest.php?id=<?php echo $data['id']; ?>">
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control" id="description" rows="3" name="description"><?php echo $data['description']; ?></textarea>
                </div>

                <div class="form-group">
                  <label for="status">Status</label>
                  <select class="form-control" id="status" name="status">
                      <?php foreach($statusOptions as $status): ?>
                      <option <?php echo ($status == $data['status'] ? 'selected' : ''); ?>><?php echo $status; ?></option>
                      <?php endforeach; ?>
                  </select>
                </div>

                  <button type="submit" class="btn btn-primary">Update</button>
              </form>
        </div>
               
        <?php include 'includes/footer.php' ?>
    </body>
</html>
