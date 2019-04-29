<?php
$model_name = "GST";
$column_names_as = array(
        "gst_id" => "GST Id",
        "hsn_code" => "HSN Code",
        "wef" => "With Effect From",
);
require_once 'includes/pages/gst/delete-gst.php';
?>
<div class="row">
    <div class="offset-1 col-md-10">
        <div class="table-responsive">
            <table id="tables" class="table table-bordered">
                <thead>
                    <tr>
                        <?php
                        foreach ($column_names_as as $column_name_as) {
                            echo "<th>{$column_name_as}</th>";
                        }
                        ?>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $column_names = array_keys($column_names_as);
                require_once "db/models/{$model_name}.class.php";
                $rs=$model_name::viewAll();
                while($row = $rs->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    foreach ($column_names as $column_name) {
                        echo "<td>$row[$column_name]</td>";
                    }
                    echo "<td><a class='btn btn-primary text-white' href='gst.php?src=edit-gst&id={$row["gst_id"]}' data-toggle='tooltip' data-html='true' title='Edit this GST entry'><i class='fa fa-edit'></i></a></td>";
                    echo "<td><a class='btn btn-danger text-white delete' data-toggle='modal' data-target='#deleteModal' data-html='true' title='Delete this GST entry' data-delete='gst.php?form=delete-gst&hsn_code={$row["hsn_code"]}'><i class='fa fa-times'></i></a></td>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include_once 'includes/modal.php';
createModal(DELETE_TITLE, DELETE_MSG, "Delete");
?>