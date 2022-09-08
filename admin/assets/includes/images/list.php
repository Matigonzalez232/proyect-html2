<div class="container">
    <div class="row mt-5">
        <?php
        include_once dirname(__DIR__, 4) . '/Classes/images.php';
        $image = new images;
        if (isset($_GET['content'])) {
            if (isset($_GET['id'])) {

                $image->delete($_GET['id']); //
                echo "delete";
            }
            echo "content";
            $contents = $image->list($_GET['content']);
           
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
                        <td> <a href="ver.php?class=images&action=list&id=<?php echo $content['id']; ?>&content=<?php echo $_GET['content']; ?>">delete</a></td>
                        <td> <a href="update.php?class=images&id=<?php echo $content['id']; ?>">update</a></td>
                    </tr>

                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
</div>