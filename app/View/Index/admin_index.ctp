<div class="row-fluid ">
    <div class="box span4">
        <div class="box-header well">
            <h2>
                <i class="icon-calendar"></i>
                <?php echo $this->Html->link('Liên hệ', array('controller' => 'contacts', 'action' => 'index')); ?>
            </h2>
        </div>

        <div class="box-content">
            <?php
            if (!empty($contact)) {
                foreach ($contact as $data) {
                    ?>
                    <div class="tab-pane active" id="info">
                        <h3 style="font-size:14px">
                            <?php
                            $datetime = date('d-m-Y', strtotime($data['Contact']['send_date']));
                            echo $this->Html->link(
                                    h($data['Contact']['name'], '') . '&nbsp;&nbsp;<small>[' . $datetime . '] </small>'
                                    , array('controller' => 'contacts',
                                'action' => 'view', $data['Contact']['id']), array('escape' => false));
                            ?>

                        </h3>
                        <p>
                            <?php
                            echo AppHelper::cutString(h($data['Contact']['content']), 30, '...')
                            ?>
                        </p>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
    <!--/span-->

    <div class="box span4">
        <div class="box-header well" data-original-title>
            <h2>
                <i class="icon-align-justify"></i>
                <?php echo $this->Html->link('Tin Tức', array('controller' => 'news', 'action' => 'index')); ?>
            </h2>
        </div>
        <div class="box-content">
            <ul class="dashboard-list">

                <?php
                if (!empty($news)) {
                    foreach ($news as $data) {
                        ?>
                        <li>
                            <?php
                            echo '<h3 style="font-size:14px">' . $this->Html->link(
                                    h($data['News']['title'], '')
                                    , array('controller' => 'news',
                                'action' => 'view', $data['News']['id']), array('escape' => false));
                            ?></h3>
                            <strong>Ngày Đăng : </strong> <?php
                            echo date('d-m-Y', strtotime($data['News']['publishdate']));
                            ?> 
                            <br>
                            <p> <?php
                                echo AppHelper::cutString($data['News']['content'], 30, '...');
                                ?></p>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
    </div>
    <!--/span-->

    <div class="box span4">
        <div class="box-header well" data-original-title>
            <h2> <?php echo $this->Html->link('Tuyển dụng', array('controller' => 'recruits', 'action' => 'index')); ?> </h2>
        </div>
        <div class="box-content">
            <ul class="dashboard-list">
                <?php
                if (!empty($recruit)) {
                    foreach ($recruit as $data) {
                        ?>
                        <li>
                            <?php
                            echo '<h3 style="font-size:14px">' . $this->Html->link(
                                    h($data['Recruit']['title'], '')
                                    , array('controller' => 'recruits',
                                'action' => 'view', $data['Recruit']['id']), array('escape' => false));
                            ?>
                            </h3> <strong>Có hiệu lực từ: </strong> <?php
                            echo date('d-m-Y', strtotime($data['Recruit']['startdate'])) . ' - ';
                            echo date('d-m-Y', strtotime($data['Recruit']['enddate']));
                            ?> 
                            <br> 
                            <p><?php echo AppHelper::cutString(h($data['Recruit']['content']), 30, '...'); ?></p>
                        </li>

                    <?php }
                } ?>

            </ul>
        </div>
    </div>    <!--/span-->

</div><!--/row-->

