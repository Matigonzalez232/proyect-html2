<div class="container">
    <div class="row mt-5">
        <?php
         include_once dirname(__DIR__, 4) . '/Classes/contents.php';
         $contents = new Contents;
        if (isset($_GET['id'])) {

            $contents->delete($_GET['id']); //

        }
        ?>
        <table class="col-12" width="50%" style="padding-right: 50%; ">
            <!--tabla de contenidos-->
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Content</th>
                </tr>
            </thead>
            <tbody>
                <?php
               
                foreach ($contents->list() as $content) {
                ?>
                    <tr>
                        <td><?php echo  $content['id']; ?></td>
                        <td><?php echo $content['title']; ?></td>
                        <td><?php echo $content['content']; ?></td>
                        <td> <a href="https://server.com/tutoriales-mati/proyect-html2/admin/?id=<?php echo $content['id']; ?>">delete</a></td>
                        <td> <a href="https://server.com/tutoriales-mati/proyect-html2/admin/modificar.php?id=<?php echo $content['id']; ?>">update</a></td>
                    </tr>

                <?php
                }
                ?>

            </tbody>
        </table>
        <a class="btn btn-primary col-3 m-5 " href="https://server.com/tutoriales-mati/proyect-html2/admin/crear.php">nuevo</a>
    </div>
</div>