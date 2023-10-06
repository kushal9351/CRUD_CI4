<?= $this->extend('layouts/frontEnd.php') ?>

<?= $this->section('content') ?>
    
    <!-- <h1 class="text-center">Welcome</h1> -->

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>student data <a href="students/create" class="btn btn-info float-end">Add</a></h5>
                        
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="users-list">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Course</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if($students){
                                    foreach($students as $row){
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['phone'] ?></td>
                                        <td><?php echo $row['course'] ?></td>
                                        <td>
                                            <a href="<?=base_url('/students/edit/'.$row['id'])  ?>" class="btn btn-sm btn-primary">edit</a>
                                            <a href="<?=base_url('/students/delete/'.$row['id'])  ?>" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>

                                <?php } } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>
