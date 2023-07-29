<div class="card border shadow-sm">
    <div class="card-body">
<h3 class="mb-3 text-secondary">Past & Upcoming Events</h3>
        <table id="datas" class=" table table-borderless  table-hover table-striped table-sm">
            <thead>
                <tr class=" mt-2">
                    <th>Subject</th>
                    <th>Publish On</th>
                    <th>View</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include_once('classes/queries.php');
                $prod = new Query();
                $data = $prod->select_all_events();
                while ($row = $data->fetch()) {
                ?>
                    <tr>
                        <td><?= $row["subjects"] ?></td>
                        <td><?= $row["date_of_event"] ?></td>
                        <td><a href="../events.php?eventId=<?=$row['id']?>" class="btn btn-sm btn-outline-danger ">Read Events</a></td>
                        <td><a href="deletor.php?table=events&page=upcoming_event.php&id=<?=$row['id']?>" class="btn btn-sm btn-outline-danger ">Delete Event</a></td>
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
    </div>
</div>