<?php
include_once 'assets/includes/header.php';
include_once __DIR__ . '/assets/includes/nav.inc.php';
include_once dirname(__DIR__, 1) . '/Classes/images.php';
$image = new images;

?>
<div class="container">
    <div class="row mt-5">
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

                foreach ($image->list() as $content) {
                ?>
                    <tr>
                        <td><?php echo  $content['id']; ?></td>
                        <td><?php echo $content['url']; ?></td>
                        <td><?php echo $content['content']; ?></td>
                        <td> <a href="https://server.com/tutoriales-mati/proyect-html2/admin/?id=<?php echo $content['id']; ?>">delete</a></td>
                        <td> <a href="https://server.com/tutoriales-mati/proyect-html2/admin/modificar.php?id=<?php echo $content['id']; ?>">update</a></td>
                    </tr>

                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
</div>
<?php include_once 'assets/includes/footer.php'; ?>