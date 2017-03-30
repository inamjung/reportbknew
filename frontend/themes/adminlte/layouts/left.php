
    


<aside class="main-sidebar">
    <div style="margin-top:230px;">

    <section class="sidebar">

        <!-- Sidebar user panel -->
<!--        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>-->
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
//                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
//                    ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
//                    ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
//                    [
//                        'label' => 'Same tools',
//                        'icon' => 'fa fa-share',
//                        'url' => '#',
//                        'items' => [
//                            ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
//                            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
//                            [
//                                'label' => 'Level One',
//                                'icon' => 'fa fa-circle-o',
//                                'url' => '#',
//                                'items' => [
//                                    ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
//                                    [
//                                        'label' => 'Level Two',
//                                        'icon' => 'fa fa-circle-o',
//                                        'url' => '#',
//                                        'items' => [
//                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
//                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
//                                        ],
//                                    ],
//                                ],
//                            ],
//                        ],
//                    ],
                ],
            ]
        ) ?>
        
        
<ul class="sidebar-menu">            
            <li class="treeview active">
                    <a href="#">
                        <i class="glyphicon glyphicon-cog"></i><span>รายงาน</span>
                        <i class="fa pull-right fa-angle-down"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?php echo yii\helpers\Url::to(['/hosxp/report/report1']);?>">
                                <i class="fa fa-circle text-blue"></i>
                                    <span>รายงาน1</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo yii\helpers\Url::to(['/hosxp/report/report2']);?>">
                                <i class="fa fa-circle text-blue"></i>
                                    <span>รายงาน2</span>
                            </a>
                        </li>
                    </ul>
            </li>
   </ul> 
       <ul class="sidebar-menu">            
            <li class="treeview active">
                    <a href="#">
                        <i class="glyphicon glyphicon-cog"></i><span>ระบบเบิก</span>
                        <i class="fa pull-right fa-angle-down"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="#">
                                <i class="fa fa-circle text-red"></i>
                                    <span>เบิกของ</span>
                            </a>
                        </li>
                        
                      
                        
                    </ul>
            </li>
   </ul> 
        
            </li>
   </ul> 
    </section>
</div>
</aside>
