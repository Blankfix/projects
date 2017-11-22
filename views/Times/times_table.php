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
                foreach( current( $content['entries'] ) as $col => $cell)
                {
                    if($col != 'id' && $col != 'status')
                    {
                        echo '<th>' . _t($col) . '</th>';
                    }
                }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach( $content['entries'] as $row )
            {
        ?>
                <tr data-id="<?php echo $row['id']; ?>" data-status="<?php echo $row['status']; ?>">
                    <?php
                        foreach( $row as $col => $cell )
                        {
                            if($col != 'id' && $col != 'status')
                            {
                                echo '<td>' . $cell . '</td>';
                            }
                        }
                    ?>
                </tr>
        <?php
            }
        ?>
    </tbody>
</table>
