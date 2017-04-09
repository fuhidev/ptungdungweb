<html class="projects-index" lang="en">

<head>
    <link rel="stylesheet" href="css/lession.css">
</head>

<body>
    <!-- Flash notices -->


    <div id="projects">
                <header>
            <a class="brand" href="/projects">Dash</a>
            <a class="logout" href="/login.php?signout=1">Logout</a>
            <div class="current-user">
                <p><span class="user-username">fU-Hi</span></p>
            </div>
        </header>


        <div class="container">
            <div class="mobile-warning">
                <h2>Mobile Preview</h2>
                <p>Dash's lessons are designed for desktop use. Come back when you've got your laptop, and in the meantime check out the projects you'll build in Dash!</p>
            </div>

            <!-- Sidebar -->


            <!-- Projects -->
            <div class="projects-container">
                <div class="project-category">
                    <?php
                    require_once ('classes/class.project.php');
                    require_once ('classes/class.lession.php');
                    $projects=Project::getAll();
                    foreach($projects as $key => $value) {

                        ?>
                        <h1><?php echo $value->name?></h1>
                        <h2 class="subtitle"><?php echo $value->description?></h2>
                        <div class="project-screenshot">
                            <div class="project-screenshot-chrome">
                                <span></span><span></span><span></span>
                            </div>
                            <div class="project-screenshot-image" style="background: url(<?php echo $value->img ?>)">
                            </div>
                        </div>

                        <div class="project-parts">
                            <?php
                            $str_lessions = preg_split("/[,]/",$value->lessions);

                            if(!empty($str_lessions)){
                            $i = 1;
                            foreach($str_lessions as $key1=>$value1){
                                if($value1 == 0)
                                    break;
                                $lession = Lession::getById(intval($value1));
                            ?>
                            <a class="project-part
          " href="/projects/annas-website-1">
                                <span class="checkbox"></span>
                                <span class="project-part-name"><?php echo $i.". ". $lession->name ?></span>
                            </a>
                            <?php
                            $i++;
                            }} ?>
                            <div class="clearfix"></div>
                            <a data-confirm="You will lose all progress for this project, are you sure?" class="button danger" href="/reset-project/annas-website">Restart</a>
                        </div>

                        <div class="clearfix"></div>
                        <?php
                    }
                    ?>


                </div>


</body>

</html>
