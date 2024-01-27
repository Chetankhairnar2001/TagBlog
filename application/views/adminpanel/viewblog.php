<?php $this->load->view('adminpanel/header') ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h2>View Blog</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Sr No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Tag</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result) { // data is coming from blog->index()
                    $counter=1;
                    foreach ($result as $key => $value) {
                        echo "<tr>
                        <td>".$counter."</td>
                        <td>".$value['blog_title']."</td>
                        <td>".$value['tag']."</td>
                        <td>".$value['blog_desc']."</td>
                        <td><img src='".base_url().$value['blog_img']."' class='img-fluid' width='200'></td>
                        <td><a class=\"btn btn-info\" href='".base_url().'admin/blog/editblog/'.$value['blogid']."'>Edit</a></td>
			            <td><a class=\"btn delete btn-danger\" href='".base_url().'admin/blog/deleteblog/'.$value['blogid']."'>Delete</a></td>
                        </tr>";
                        $counter++;
                    }
                } else {
                    echo "<tr><td colspan='7'>No Record Found</tr></td>";
                }
                ?>

            </tbody>
        </table>
    </div>

</main>
</div>
</div>

<?php $this->load->view('adminpanel/footer.php') ?>

<?php 

			if (isset($_SESSION['updated'])) {
				if ($_SESSION['updated'] == "yes") {
					echo 'alert("Data has been updated!");';
				}else if($_SESSION['updated'] == "no"){
					echo 'alert("Some error occurred & data not updated!");';
				}
			}

	 ?>