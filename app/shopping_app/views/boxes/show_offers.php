<div class="row">
    <?foreach($ofertas as $oferta):?>
        <div class="col-md-3">
            <div class="thumbnail">
                <img src="/assets/images/ofertas/<?= $oferta->imagen?>">
                <div class="caption">
                    <a class="offer-name h4" title="<?=$oferta->name?>"><?=$oferta->name?></a>
                    <p>
                        <span class="strikethrough">$<?= $oferta->precio_anterior?></span>
                        <span class="">$<?= $oferta->precio?></span>
                    </p>
                    <a class="btn btn-primary btn-block" href="/ofertas/details/<?= $oferta->id?>">View Details</a>
                </div>
            </div>
        </div>
    <?endforeach?>
</div>