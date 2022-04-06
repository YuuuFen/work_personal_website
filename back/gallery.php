<div class="container">
    <h2 class="text-center font-weight-bold">作品管理</h2>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#exampleModal">新增</button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">新增作品</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row m-0 p-0">
                            <div class="col-12 d-flex justify-content-center">
                                <form action="../api/add_work.php" method="post" enctype="multipart/form-data">
                                    <table>
                                        <tr>
                                            <td>預覽圖：</td>
                                            <td><input type="file" name="img_1" required></td>
                                        </tr>
                                        <tr>
                                            <td>標題：</td>
                                            <td><input type="text" name="title" required></td>
                                        </tr>
                                        <tr>
                                            <td>簡介：</td>
                                            <td><input type="text" name="intro"></td>
                                        </tr>
                                        <tr>
                                            <td>標籤：</td>
                                            <td><input type="text" name="tag"></td>
                                        </tr>
                                        <tr>
                                            <td>Demo：</td>
                                            <td><input type="text" name="demo_url"></td>
                                        </tr>
                                        <tr>
                                            <td>GitHub：</td>
                                            <td><input type="text" name="github_url"></td>
                                        </tr>
                                    </table>
                                    <div>
                                        <input class="btn btn-sm btn-warning d-inline-block" type="submit" value="保存">
                                        <input class="btn btn-sm btn-secondary" type="button" data-dismiss="modal" value="離開">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Work List -->
    <div class="row">
        <div class="col-12">
            <form class="text-center" action="api/edit_work.php" method="post" style="width: 100%;">
                <table>
                    <tr>
                        <td width="10%">作品縮圖</td>
                        <td width="10%">標題</td>
                        <td width="25%">簡介</td>
                        <td width="15%">標籤</td>
                        <td width="15%">Demo</td>
                        <td width="15%">GitHub</td>
                        <td width="5%">顯示</td>
                        <td width="5%">刪除</td>
                    </tr>
                    <?php
                    $total = $Works->math("count", "*");
                    $div = 5;
                    $pages = ceil($total / $div);
                    $now = $_GET['p'] ?? 1;
                    $start = ($now - 1) * $div;

                    $rows = $Works->all(" limit $start,$div");
                    foreach ($rows as $key => $row) {
                        $checked = ($row['sh'] == 1) ? "checked" : "";
                    ?>
                        <tr>
                            <td>
                                <img src="../upload/<?= $row['img_1']; ?>" style="height:100px">
                            </td>
                            <td>
                                <input style="width: 97%;" type="text" name="title[]" value="<?= $row['title']; ?>">
                            </td>
                            <td>
                                <input style="width: 97%;" type="text" name="intro[]" value="<?= $row['intro']; ?>">
                            </td>
                            <td>
                                <input style="width: 97%;" type="text" name="tag[]" value="<?= $row['tag']; ?>">
                            </td>
                            <td>
                                <input style="width: 97%;" type="text" name="demo_url[]" value="<?= $row['demo_url']; ?>">
                            </td>
                            <td>
                                <input style="width: 97%;" type="text" name="github_url[]" value="<?= $row['github_url']; ?>">
                            </td>
                            <td>
                                <input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= $checked; ?>>
                            </td>
                            <td>
                                <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                                <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <div>
                    <input class="btn btn-info d-inline-block" type="submit" value="確定">
                    <input class="btn btn-warning" type="reset" value="重置">
                </div>
                <div>
                    <?php

                    if (($now - 1) > 0) {
                        $prev = $now - 1;
                        echo "<a href='?do=prog&p=$prev'> ";
                        echo " <i class='fas fa-2x fa-arrow-alt-circle-left'></i> ";
                        echo " </a>";
                        echo "&emsp;";
                    }


                    for ($i = 1; $i <= $pages; $i++) {
                        $font = ($now == $i) ? '24px' : '16px';
                        echo "&emsp;";
                        echo "<a href='?do=prog&p=$i' style='font-size:$font'> ";
                        echo $i;
                        echo " </a>";
                        echo "&emsp;";
                    }

                    if (($now + 1) <= $pages) {
                        $next = $now + 1;
                        echo "&emsp;";
                        echo "<a href='?do=prog&p=$next'> ";
                        echo " <i class='fas fa-2x fa-arrow-alt-circle-right'></i> ";
                        echo " </a>";
                    }

                    ?>
                </div>
            </form>
        </div>
    </div>
</div>