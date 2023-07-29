<table id="datas" class=" table table-hover table-borderless table-striped table-sm">
    <thead style="border:none">
        <tr class=" mt-2">
            <th>Title</th>
            <th>Publish On</th>
            <th>View</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include_once('classes/queries.php');
        $prod = new Query();
        $pic = $prod->select_all_pictures();
        while ($row = $pic->fetch()) {
        ?>
            <tr>
                <td><?= $row["descriptions"] ?></td>
                <td><?= $row["uploadedTime"] ?></td>
                <td> <a href="#" class="btn btn-sm w-100 rounded-pill btn-outline-primary">View</a></td>
                <td><a href="deletor.php?table=galary&page=galary.php&id=<?=$row['id']?>" class="btn btn-sm btn-outline-danger ">Delete Picture</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datas').DataTable();
    });
</script>