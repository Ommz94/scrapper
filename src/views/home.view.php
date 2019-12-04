<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Web scrapper</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../scrapper/src/assets/css/scraper.css">
</head>

<body>

    <div class="container">
        <header>
            <div class="row">
                <div class="col-md-12">
                    <div class="heading pt-3 text-center mb-4">
                        <h1>Scrappy</h1>
                    </div>
                    <div class="search-container py-4">
                        <form action="index.php" id="form-scrapper">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">URL to scrap:</label>
                                <div class="col-sm-7">
                                    <input id="search-input" class="form-control" type="url" name="url" autofocus placeholder="http://" value="<?php echo getEscapedUrl(); ?>">
                                </div>
                                <div class="col-sm-1">
                                    <button type="submit" class="btn btn-primary">Scrap</button>
                                </div>
                            </div>


                            <div class="filters mt-4 pt-3 d-flex justify-content-between border-top">
                                <fieldset class="the-fieldset">
                                    <legend class="the-legend">Content filters</legend>

                                    <div class="filter-inputs d-flex justify-content-start">
                                        <div class="pr-1">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="content_filters[]" value="images">
                                                <label class="form-check-label" for="inlineCheckbox1">Images</label>
                                            </div>
                                        </div>

                                        <div class="pr-1">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="content_filters[]" value="images">
                                                <label class="form-check-label" for="inlineCheckbox1">Images</label>
                                            </div>
                                        </div>

                                        <div class="pr-1">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="content_filters[]" value="images">
                                                <label class="form-check-label" for="inlineCheckbox1">Images</label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="d-flex align-items-center px-1">

                                    <label>Contains these keywords: </label>
                                    <input type="text" class="form-control">

                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </header>

        <main class="p-2">

            <?php if (getUrl()): ?>
                <section>
                    <h1>Result:</h1>

                    <?php
                    try {
                        $dispatcher = new Embed\Http\CurlDispatcher();
                        $info = Embed\Embed::create(getUrl(), $options, $dispatcher);
                    } catch (Exception $exception) {
                        echo '<table>';
                        foreach ($dispatcher->getAllResponses() as $response) {
                            echo '<tr>';
                            echo '<th>'.$response->getUrl().'</th>';
                            echo '</tr><tr><td>';
                            printHeaders($response->getHeaders());
                            echo '</td><tr><td><pre>';
                            printArray($response->getInfo());
                            echo '</td><tr><td><pre>';
                            printText($response->getContent());
                            echo '</pre></td></tr>';
                        }
                        echo '</table>';

                        throw $exception;
                    }
                    ?>

                    <table>
                        <?php foreach ($adapterData as $name => $fn): ?>
                            <tr>
                                <th><?php echo $name; ?></th>
                                <td><?php $fn($info->$name); ?></td>
                            </tr>
                        <?php endforeach ?>
                    </table>

                    <div class="view-advanced-data">
                        <button onclick="document.getElementById('advanced-data').style.display = 'block'; this.style.display = 'none';">View all collected data</button>
                    </div>

                    <div id="advanced-data">
                        <?php foreach ($info->getProviders() as $providerName => $provider): ?>
                            <h2><?php echo $providerName; ?> provider</h2>

                            <?php if (empty($provider->getBag()->getAll())): ?>
                                <p>No data collected</p>
                                <?php continue; ?>
                            <?php endif ?>

                            <table>
                                <?php foreach ($providerData as $name => $fn): ?>
                                    <?php if (!empty($provider->{'get'.$name}())): ?>
                                        <tr>
                                            <th><?php echo $providerName.'.'.$name; ?></th>
                                            <td><?php $fn($provider->{'get'.$name}(), false); ?></td>
                                        </tr>
                                    <?php endif ?>
                                <?php endforeach ?>

                                <tr>
                                    <th>All data collected</th>
                                    <td><?php printArray($provider->getBag()->getAll()); ?></td>
                                </tr>
                            </table>
                        <?php endforeach ?>

                        <h2>Http requests</h2>

                        <table>
                            <?php foreach ($info->getDispatcher()->getAllResponses() as $response): ?>
                                <tr>
                                    <th>
                                        <?php if ((string) $response->getStartingUrl() !== (string) $response->getUrl()): ?>
                                            <?= $response->getStartingUrl() ?> <code>=&gt;</code>
                                        <?php endif ?>

                                        <?= $response->getUrl() ?>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <?php printHeaders($response->getHeaders()); ?>
                                        <?php printArray($response->getInfo()); ?>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </table>

                        <h2>Content</h2>

                        <pre>
                    <?php printText($info->getResponse()->getContent()); ?>
                </pre>
                    </div>
                </section>

            <?php endif; ?>
        </main>
    </div>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="../../../scrapper/src/assets/js/scraper.js"></script>
</body>
</html>