<div class="container">
    <div class="row mt-5">
        <?php
        include_once dirname(__DIR__, 4) . '/Classes/images.php';
        $image = new images;
        if (isset($_GET['content'])) {

            $contents = $image->list($_GET['content']);
            if (isset($_GET['id'])) {

                $image->delete($_GET['id']); //
    
            }
        }
        
        ?>
        <table class="col-12" width="50%" style="padding-right: 50%; ">
            <!--tabla de contenidos-->
            <thead>


                <tr>
                    <th>Id</th>
                    <th>url</th>
                    <th>Content</th>
                </tr>
            </thead>
            <tbody>
                <?php

                foreach ($contents as $content) {
                ?>
                    <tr>
                        <td><?php echo  $content['id']; ?></td>
                        <td><?php echo $content['url']; ?></td>
                        <td><?php echo $content['content']; ?></td>
                        <td> <a href="http://localhost/curso/proyecto-html-bootstrap_desafio2/admin/ver.php?content=<?php echo $_GET['content']; ?>&id=<?php echo $content['id']; ?>">delete</a></td>
                        <td> <a href="http://localhost/curso/proyecto-html-bootstrap_desafio2/admin/assets/includes/images/update.php/?id=<?php echo $content['id']; ?>">update</a></td>
                    </tr>

                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
</div>