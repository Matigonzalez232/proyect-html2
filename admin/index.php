<?php 
include_once 'assets/includes/header.php';
include_once __DIR__. '/assets/includes/nav.inc.php';

// $contents=new Contents;
// foreach ($contents->list() as $content){
//     var_dump($content);
// }  
?>
  <table class="pt-5" width="50%" style="padding-right: 50%; margin-left: 350px; ">
        <!--tabla de contenidos-->
        <thead >
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
            </tr>
        </thead >
        <tbody >
        <?php
        include_once dirname(__DIR__,1) . '/Classes/contents.php';
        $contents = new Contents;
        foreach ($contents->list() as $content) {
        ?>
            <tr>
            <td><?php echo  $content['id']; ?></td>
            <td><?php echo $content['title']; ?></td>
            <td><?php echo $content['content']; ?></td>
            <td> <a href="">delete</a></td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
<?php

include_once 'assets/includes/footer.php';
?>