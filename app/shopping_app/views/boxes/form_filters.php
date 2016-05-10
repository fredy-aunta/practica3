<nav class="navbar">
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-6 column">
                <form class="form-inline">
                    <div class="form-group">
                        <label>Buscar por:</label>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Centro Comercial
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <?foreach($malls as $mall):?>
                                    <?= $mall?>
                                    <li><a href="/ofertas/mall/<?= $mall->id?>"><?= $mall->name?></a></li>
                                <?endforeach?>
                                <li><a href="/ofertas/mall/1">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</nav>