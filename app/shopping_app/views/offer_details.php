<!DOCTYPE html>
<html>
<head>
    <?$this->load->view('common/head')?>
    <title>Shopping-app - Details</title>
</head>
<body>
<?$this->load->view('boxes/header')?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="thumbnail">
                <img src="/assets/images/ofertas/<?= $offer->imagen?>">
                <div class="caption ">
                    <h3 class="center"><?=$offer->name?></h3>
                    <p class="center">
                        <span class="strikethrough">$<?= number_format($offer->precio_anterior,0,',','.')?></span>
                        <span class="">$<?= number_format($offer->precio,0,',','.')?></span>
                    </p>
                    <h5 class="center">Description</h5>
                    <p>
                        <?= nl2br($offer->description)?>
                    </p>
                    <p class="center">
                        <a target="_blank" class="btn btn-primary btn-lg" href="<?= $offer->url?>">View Details</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
