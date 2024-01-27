<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BlogSpot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.3/examples/blog/blog.css" rel="stylesheet">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
</head>

<body>
    <header>

        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="<?= base_url() . 'home/top_blog/' ?>" class="navbar-brand d-flex align-items-center">
                    <strong>BlogSpot</strong>
                </a>
            </div>
        </div>
    </header>

    <?php

    // echo "<pre>";
    // print_r($result);

    ?>

    <!-- <main>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
            <div class="col-md-6 p-lg-5 mx-auto my-5">
                <h1 class="display-3 fw-bold">Top 5 Blogs</h1>
                <h3 class="fw-normal text-muted mb-3">No:1 <?= $result[0]['blog_title'] ?></h3>
                <div class="d-flex gap-3 justify-content-center lead fw-normal">
                    <a class="icon-link" href="<?= base_url() . 'home/blog_detail/' . $result[0]['blogid'] ?>">
                        Open
                        <svg class="bi">
                            <use xlink:href="#chevron-right" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>


        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
            <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5"><a class="icon-link" href="<?= base_url() . 'home/blog_detail/' . $result[1]['blogid'] ?>"><?= $result[1]['blog_title'] ?> </a></h2>
                    <p class="lead"><?= $result[1]['tag'] ?></p>
                </div>
                <img src="<?= base_url() . $result[1]['blog_img'] ?>" class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></img>
            </div>
            <div class="text-bg-primary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5"><a class="icon-link link-secondary" href="<?= base_url() . 'home/blog_detail/' . $result[2]['blogid'] ?>"> <?= $result[2]['blog_title'] ?> </a> </h2>
                    <p class="lead"><?= $result[2]['tag'] ?></p>
                </div>
                <img src="<?= base_url() . $result[2]['blog_img'] ?>" class="bg-body-tertiary shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></>
            </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
            <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5"> <a class="icon-link" href="<?= base_url() . 'home/blog_detail/' . $result[3]['blogid'] ?>"> <?= $result[3]['blog_title'] ?> </a> </h2>
                    <p class="lead"><?= $result[3]['tag'] ?></p>
                </div>
                <img src="<?= base_url() . $result[3]['blog_img'] ?>" class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></img>
            </div>
            <div class="text-bg-primary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5"><a class="icon-link link-secondary" href="<?= base_url() . 'home/blog_detail/' . $result[4]['blogid'] ?>"> <?= $result[4]['blog_title'] ?> </a> </h2>
                    <p class="lead"><?= $result[4]['tag'] ?></p>
                </div>
                <img src="<?= base_url() . $result[4]['blog_img'] ?>" class="bg-body-tertiary shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></>
            </div>
        </div>

        </div>
    </main> -->

    <main class="container m-5">
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary" style="background-image: url('<?= base_url() . $result[0]['blog_img'] ?>'); background-size: cover; opacity: 0.8;">
            <div class="col-lg-6 px-0">
                <h1 class="display-4 fst-italic"><?= $result[0]['blog_title'] ?></h1>
                <p class="lead my-3"><?= substr($result[0]['blog_desc'], 0, 100) ?></p>
                <p class="lead mb-0"><a href="<?= base_url() . 'home/blog_detail/' . $result[0]['blogid'] ?>" class="text-body-emphasis fw-bold">Continue reading...</a></p>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary-emphasis"></strong>
                        <h3 class="mb-0"><?= $result[1]['blog_title'] ?></h3>
                        <div class="mb-1 text-body-secondary"></div> 
                        <p class="card-text mb-auto"><?php
                        $tags = explode('#', $result[1]['tag']);
                        foreach ($tags as $tag) {
                            if (!empty($tag)) {
                                echo '<button type="button" class="btn btn-secondary me-2">' . $tag . '</button>';
                            }
                        }
                        ?></p>
                        <a href="<?= base_url() . 'home/blog_detail/' . $result[1]['blogid'] ?>" class="icon-link gap-1 icon-link-hover stretched-link">
                            Continue reading
                            <svg class="bi">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="<?= base_url() . $result[1]['blog_img'] ?>" alt="Thumbnail" width="200" height="250" style="object-fit: cover;">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary-emphasis"></strong>
                        <h3 class="mb-0"><?= $result[2]['blog_title'] ?></h3>
                        <div class="mb-1 text-body-secondary"></div> 
                        <p class="card-text mb-auto"><?php
                        $tags = explode('#', $result[2]['tag']);
                        foreach ($tags as $tag) {
                            if (!empty($tag)) {
                                echo '<button type="button" class="btn btn-secondary me-2">' . $tag . '</button>';
                            }
                        }
                        ?></p>
                        <a href="<?= base_url() . 'home/blog_detail/' . $result[2]['blogid'] ?>" class="icon-link gap-1 icon-link-hover stretched-link">
                            Continue reading
                            <svg class="bi">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="<?= base_url() . $result[2]['blog_img'] ?>" alt="Thumbnail" width="200" height="250" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-5">
            <div class="">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                    BlogSpot Special
                </h3>

                <article class="blog-post">
                    <h2 class="display-5 link-body-emphasis mb-1"><?= $result[3]['blog_title'] ?></h2>
                    <p class="blog-post-meta">Created-on: <?= substr($result[3]['created_on'],0,10) ?> <a href="<?= base_url() . 'home/blog_detail/' . $result[3]['blogid'] ?>">View</a></p>

                    <img src="<?= base_url() . $result[3]['blog_img'] ?>" alt="Thumbnail" width="20%" height="auto" class="img-fluid rounded" style="border-radius: 1rem;">   <br>    <br>              
                    <h3>Description</h3>
                    <p><?= $result[3]['blog_desc'] ?></p>
                </article>

                <article class="blog-post">
                    <h2 class="display-5 link-body-emphasis mb-1"><?= $result[4]['blog_title'] ?></h2>
                    <p class="blog-post-meta">Created-on: <?= substr($result[4]['created_on'],0,10) ?> <a href="<?= base_url() . 'home/blog_detail/' . $result[4]['blogid'] ?>">View</a></p>

                    <img src="<?= base_url() . $result[4]['blog_img'] ?>" alt="Thumbnail" width="20%" height="auto" class="img-fluid rounded" style="border-radius: 1rem;">   <br>    <br>              
                    <h3>Description</h3>
                    <p><?= $result[4]['blog_desc'] ?></p>
                </article>
            </div>
        </div>
    </main>


    <footer class="py-5 text-center text-body-secondary bg-body-tertiary">
        <p>Build by Chetan</p>
        <p class="mb-0">
            <a class="text-decoration-none" href="#">Back to Top</a> <br> <br>
            <button><a class="text-decoration-none" href="<?= base_url() . 'home/top_blog/' ?>">View All Blog</a></button>
        </p>
    </footer>

    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>