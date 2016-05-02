<!DOCTYPE html>
<html>
<head>
    <?$this->load->view('common/head')?>
    <title>Shopping-app - Home</title>
</head>
<body>
<?$this->load->view('boxes/header')?>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <?foreach($categorias as $categoria):?>
                <button class="btn btn-block btn-default hide-text-overflow"><?= $categoria->name?></button>
            <?endforeach?>
        </div>
        <div class="col-md-10">
            <!-- Carousel start-->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active"><img src="/assets/images/ofertas/slider/2-lavadoras-haceb.jpg" alt=""
                                                  title="MY WEBSITE PRODUCTS" id="wows1_1"/></div>
                    <div class="item"><img src="/assets/images/ofertas/slider/vtr_gimnasio-290316.jpg" alt=""
                                           title="TECHNOLOGIX WEBSITE" id="wows1_0"/></div>
                    <div class="item">
                        <img src="/assets/images/ofertas/slider/2-consola-4juegos.jpg" alt=""
                             title="TECHNOLOGIX WEBSITE" id="wows1_0"/>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span
                        class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span>
                </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span>
                </a>
            </div>
            <!--Carousel End-->
            <hr>
            <div class="row">
                <div class="col-md-12">
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
                                        <a class="btn btn-primary" href="/ofertas/details/<?= $oferta->id?>">View Details</a>
                                    </div>
                                </div>
                            </div>
                        <?endforeach?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function truncateText(innerHtml, maxLength) {
        if (innerHtml.length > maxLength) {
            innerHtml = innerHtml.substr(0,maxLength) + '...';
        }
        return innerHtml;
    }
    $(document).ready(function(){
        $('a.offer-name.h4').each(function(i,e){
            $(e).html(truncateText($(e).html(), 30));
        });
    });
</script>
</body>
</html>