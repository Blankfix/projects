<?php
/**
 * Created by PhpStorm.
 * User: cyril
 * Date: 19/11/2017
 * Time: 12:50
 */
?>
<table class="table table-striped table-bordered table-hover table-responsive">
    <thead>
    <tr>
        <?php
        foreach( $content['thead'] as $col ){
            echo '<th>' . $col . '</th>';
        }
        ?>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php
        foreach( $content['tbody'] as $row ){
            echo '<td>' . $row . '</td>';
        }
        ?>
    </tr>
    </tbody>
</table>
