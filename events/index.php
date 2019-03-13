<?php
$page_title = "Teknothon19 - Events";
$body_class = "blog-page";
include("../header.php")
?>


    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="entry-header">
                        <h2 class="entry-title">Events</h2>

                        <ul class="breadcrumbs flex align-items-center">
                            <li><a href="#">Home</a></li>
                            <li>events</li>
                        </ul><!-- .breadcrumbs -->
                    </div><!-- entry-header -->
                </div><!-- col-12 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- page-header -->

    <div class="main-content">
        <div class="container">
            <div class="last-news">
                <div class="entry-header">
                    <div class="entry-title">
                        <p>Following are the Events that will be Organized at</p>
                        <h2>Teknothon 2019.</h2>
                    </div><!-- entry-title -->
                </div>

                <div class="row blog-list-page">
                    <?php
                    $events = json_decode(file_get_contents("events.json"),true);
                    if(is_array($events)){
                    foreach ($events as $name => $data) {?>

                    <div class="col-12 col-md-6 single-blog-content">
                        <div class="blog-content">
                            <figure class="featured-image">
                                <a href="<?php echo $data['link']; ?>"> <img src="<?php echo $data['image']; ?>" alt="teknothon+event"> </a>
                            </figure><!-- featured-image -->

                            <div class="box-link-date">
                                <a href=""><?php echo $data['datetime']; ?></a>
                            </div><!-- box-link-date -->

                            <div class="entry-content">
                                <div class="entry-header">
                                    <h2><?php echo $name; ?></h2>
                                </div><!-- entry-header -->

                                <div class="entry-meta">
                                    <span class="author-name"><a href="<?php echo $data['link']; ?>">Event Type: <?php echo $data['type']; ?></a></span>
                                    <span class="space">|</span>
                                    <span class="comments-count"><a href="<?php echo $data['link']; ?>">COST : <?php echo $data['cost']; ?></a></span>

                                </div><!-- entry-meta -->

                                <div class="entry-description">
                                    <p><?php echo $data['description']; ?></p>
                                </div><!-- entry-description -->
                            </div><!-- entry-content -->
                        </div>
                    </div><!-- col-6 -->

                    <?php }}?>

                    <div class="col-12 load-more flex justify-content-center">
                        <input type="submit" name="" value="Load More" class="btn">
                    </div>

                </div><!-- blog-list-page -->
            </div><!-- last-news -->
        </div><!-- container -->
    </div><!-- main-content -->

    <?php
    readfile("../footer.html");
    ?>

