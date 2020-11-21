                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($userList as $ul) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $ul['name']; ?></td>
                                    <td><?= $ul['email']; ?></td>
                                    <td><?= $ul['image']; ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>


                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->