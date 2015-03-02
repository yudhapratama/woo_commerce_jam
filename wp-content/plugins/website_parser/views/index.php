<?php
include 'website_parser.php';

$links = $images = array();
$default_check = 'checked';

$href = isset($_GET['href']) ? 1 : 0;
$image = isset($_GET['image']) ? 1 : 0;
$meta = isset($_GET['meta']) ? 1 : 0;
$target_url = isset($_GET['target_url']) ? $_GET['target_url'] : '';
$link_type = isset($_GET['link_type']) ? $_GET['link_type'] : 'all';

$parser = new WebsiteParser($target_url, $link_type);

if (isset($_GET['target_url'])) {
    $default_check = '';

    $title = $parser->getTitle(true);

    if ($href)
        $links = $parser->getHrefLinks(false);

    if ($image)
        $images = $parser->getImageSources();

    if ($meta)
        $meta_tags = $parser->getMetaTags();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Extract Urls</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Morshed Alam">

    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <style>
        ul li a, .meta td {
            font-size: 10px;
        }

        .images {
            margin-left: 0px;
        }

        .images img {
            margin: 5px;
            max-width: 50px;
            max-height: 50px;
        }

        small.error {
            color: red;
            font-size: 10px;
        }

        .input-append select.link-type {
            width: 100px;
            font-size: 10px;
            height: 20px;
        }

        h3.title {
            border-bottom: 1px solid #c0c0c0;
        }
    </style>
</head>
<body>
<?php include_once '../nav.html' ?>

<div class="container" style="margin-top: 60px;">
    <div>
        <h4>
            Extract website links
            <small class="error"><?= $parser->message ? ('( ' . $parser->message . ' )') : '' ?></small>
        </h4>

        <form method="get" action="">

            <div class="input-prepend input-append">
                <input class="span2" type="text" style="width: 550px;height: 20px;"
                       value="<?= $target_url ?>" name="target_url"
                       placeholder="Enter a public website URL with trailing slash"/>

                <span class="add-on">
                        <input type="checkbox" name="href"
                               value="1" <?= $href ? 'checked' : $default_check ?> /> Href

                    <select name="link_type" class="link-type">
                        <option <?= $link_type == WebsiteParser::LINK_TYPE_ALL ? 'selected' : '' ?>
                            value="<?= WebsiteParser::LINK_TYPE_ALL ?>">All Links
                        </option>
                        <option <?= $link_type == WebsiteParser::LINK_TYPE_INTERNAL ? 'selected' : '' ?>
                            value="<?= WebsiteParser::LINK_TYPE_INTERNAL ?>">Internal
                        </option>
                        <option <?= $link_type == WebsiteParser::LINK_TYPE_EXTERNAL ? 'selected' : '' ?>
                            value="<?= WebsiteParser::LINK_TYPE_EXTERNAL ?>">External
                        </option>
                    </select>
                </span>

                <span class="add-on">
                        <input type="checkbox" name="image"
                               value="1" <?= $image ? 'checked' : $default_check ?> /> Image

                        <input type="checkbox" name="meta"
                               value="1" <?= $meta ? 'checked' : $default_check ?> /> Meta Tag
                </span>

                <input class="btn btn-primary" type="submit" name="extract" value="Extract Links"/>
            </div>
            <br/>
        </form>

        <?php include 'views/title.html.php'; ?>
        <?php include 'views/meta.html.php'; ?>
        <?php include 'views/href.html.php'; ?>
        <?php include 'views/image.html.php'; ?>
    </div>
</div>
</body>
</html>