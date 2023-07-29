<div class="card border shadow-sm">
    <div class="card-body ">
    <h3 class="text-secondary">Published News/Articles</h3>
        <table id="datas" class="table table-borderless rounded  table-striped table-hover table-sm">
            <thead>
                <tr class=" mt-2">
                    <th>Headline</th>
                    <th>Publish On</th>
                    <th>View</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include_once('classes/queries.php');
                $prod = new Query();
                $data = $prod->select_all_news();
                while ($row = $data->fetch()) {
                ?>
                    <tr class="text-secondary rounded">
                        <td><?= $row["headline"] ?></td>
                        <td><?= $row["publishDate"] ?></td>
                        <td><a href="../news.php?newsId=<?=$row['id']?>" class="btn btn-sm btn-outline-danger ">Read News</a></td>
                        <td><a href="deletor.php?table=news&page=publish_latest_news.php&id=<?=$row['id']?>" class="btn btn-sm btn-outline-danger ">Delete Article</a></td>
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