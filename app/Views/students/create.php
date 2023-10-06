<?= $this->extend('layouts/frontEnd.php') ?>
<?= $this->section('content') ?>


<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Add student <a href="/ci4/students" class="btn btn-danger  float-end">Back</a></h5>

                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="users-list">

                        <div class="container">
                            <form action="/ci4/students/add" method="POST">
                                <div class="form-group my-4">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control my-1" id="name" name="name" placeholder="Enter name" required>
                                </div>
                                <div class="form-group my-4">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control my-1" id="email" name="email"
                                        aria-describedby="emailHelp" placeholder="Enter email" required>
                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                </div>
                                <div class="form-group my-4">
                                    <label for="phone">Phone</label>
                                    <input type="number" class="form-control my-1" id="phone" name="phone"
                                        placeholder="Enter phone number" required>
                                </div>
                                <div class="form-group my-4">
                                    <label for="course">Course</label>
                                    <input type="text" class="form-control my-1" id="course" name="course"
                                        placeholder="Enter course name" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>


                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content') ?>