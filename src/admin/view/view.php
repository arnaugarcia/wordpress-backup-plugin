<?php

function auto_backup_plugin_homepage()
{
    ?>
    <table>
        <tr>
            <th>Variable</th>
            <th>Value</th>
        </tr>
        <?php
        $options = find_database_options();
        foreach ($options as $key => $value) {
            ?>
            <tr>
                <td><?php echo $key ?></td>
                <td><?php echo $value ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
}