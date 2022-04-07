<h2 class="text-center font-weight-bold">留言管理</h2>

<div class="container box1 mt-5 mb-5">
    <div class="row">
        <div class="col-12">
            <form class="text-center" action="../api/edit_message.php" method="post" style="width: 100%;">
                <table>
                    <tr>
                        <td colspan="7" style="border: none;">
                            <h1>待聯絡清單管理</h1>
                        </td>
                    </tr>
                    <tr>
                        <td width="10%">名稱</td>
                        <td width="10%">公司</td>
                        <td width="15%">E-mail</td>
                        <td width="15%">主旨</td>
                        <td width="20%">內容</td>
                        <td width="5%">時間</td>
                        <td width="10%">已處理</td>
                        <td width="10%">刪除</td>
                    </tr>
                    <?php
                    $total = $Message->math("count", "*");
                    $div = 10;
                    $pages = ceil($total / $div);
                    $now = $_GET['p'] ?? 1;
                    $start = ($now - 1) * $div;

                    $rows = $Message->all(" limit $start,$div");
                    foreach ($rows as $key => $row) {
                        $checked = ($row['sh'] == 1) ? "checked" : "";
                    ?>
                        <tr>
                            <td>
                                <input style="width: 97%;" type="text" name="name[]" value="<?= $row['name']; ?>">
                            </td>
                            <td>
                                <input style="width: 97%;" type="text" name="company[]" value="<?= $row['company']; ?>">
                            </td>
                            <td>
                                <input style="width: 97%;" type="text" name="email[]" value="<?= $row['email']; ?>">
                            </td>
                            <td>
                                <input style="width: 97%;" type="text" name="subject[]" value="<?= $row['subject']; ?>">
                            </td>
                            <td>
                                <textarea name="content[]" style="width: 100%;"><?= $row['content']; ?></textarea>
                            </td>
                            <td>
                                <input type="text" name="time[]" value="<?= date("Y-m-d", strtotime($row['time'])); ?>" disabled>
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
                        echo "<a href='?do=contact&p=$prev'> ";
                        echo " <i class='fas fa-2x fa-arrow-alt-circle-left'></i> ";
                        echo " </a>";
                        echo "&emsp;";
                    }


                    for ($i = 1; $i <= $pages; $i++) {
                        $font = ($now == $i) ? '24px' : '16px';
                        echo "&emsp;";
                        echo "<a href='?do=contact&p=$i' style='font-size:$font'> ";
                        echo $i;
                        echo " </a>";
                        echo "&emsp;";
                    }

                    if (($now + 1) <= $pages) {
                        $next = $now + 1;
                        echo "&emsp;";
                        echo "<a href='?do=contact&p=$next'> ";
                        echo " <i class='fas fa-2x fa-arrow-alt-circle-right'></i> ";
                        echo " </a>";
                    }

                    ?>
                </div>
            </form>
        </div>
    </div>
</div>