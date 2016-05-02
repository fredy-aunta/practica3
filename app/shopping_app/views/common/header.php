<header>
    <div class="container no_left no_right">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <!-- logo -->
                <div class="logo">
                    <a href="index.php">
                        <h1>SHOPPING-APP</h1>
                    </a>

                    <p class="slogan">
                        To build up your place
                    </p>

                    <div class="block"></div>
                </div>
                <!-- logo -->
            </div>
            <div class="col-md-8 col-xs-12 right_header no_right right_header">
                <ul class="fr">
                    <? if ($this->tank_auth->is_logged_in()): ?>
                        <li>
                            <a href="/account">MY ACCOUNT</a>
                        </li>
                        <li>
                            <a href="/auth/logout">LOGOUT</a>
                        </li>
                    <? else: ?>
                        <li>
                            <a href="/auth/register">REGISTER</a>
                        </li>
                        <li>
                            <a href="/auth/login">LOGIN</a>
                        </li>
                    <? endif ?>
                </ul>
            </div>
        </div>
    </div>
</header>
<!--
<ul>
    <li>
        <input type="checkbox" name="ckboxCat1" id="ckboxCat1" class="pointer">
        <label class="pointer">Supermercados</label>
    </li>
    <li data-id="4" data-name="Informática y electrónica" class="pointer"><input type="checkbox" name="ckboxCat4"
                                                                                 id="ckboxCat4" class="pointer"><label
            class="pointer">Informática y electrónica</label></li>
    <li data-id="3" data-name="Ropa, zapatos y complementos" class="pointer"><input type="checkbox" name="ckboxCat3"
                                                                                    id="ckboxCat3"
                                                                                    class="pointer"><label
            class="pointer">Ropa, zapatos y complementos</label></li>
    <li data-id="28" data-name="Almacenes por departamentos" class="pointer"><input type="checkbox" name="ckboxCat28"
                                                                                    id="ckboxCat28"
                                                                                    class="pointer"><label
            class="pointer">Almacenes por departamentos</label></li>
    <li data-id="2" data-name="Hogar y muebles" class="pointer"><input type="checkbox" name="ckboxCat2" id="ckboxCat2"
                                                                       class="pointer"><label class="pointer">Hogar y
            muebles</label></li>
    <li data-id="5" data-name="Perfumerías y belleza" class="pointer"><input type="checkbox" name="ckboxCat5"
                                                                             id="ckboxCat5" class="pointer"><label
            class="pointer">Perfumerías y belleza</label></li>
    <li data-id="26" data-name="Farmacia, droguería y óptica" class="pointer"><input type="checkbox" name="ckboxCat26"
                                                                                     id="ckboxCat26"
                                                                                     class="pointer"><label
            class="pointer">Farmacia, droguería y óptica</label></li>
    <li data-id="8" data-name="Juguetes y bebes" class="pointer"><input type="checkbox" name="ckboxCat8" id="ckboxCat8"
                                                                        class="pointer"><label class="pointer">Juguetes
            y bebes</label></li>
    <li data-id="6" data-name="Ferreterías y Contrucción" class="pointer"><input type="checkbox" name="ckboxCat6"
                                                                                 id="ckboxCat6" class="pointer"><label
            class="pointer">Ferreterías y Contrucción</label></li>
    <li data-id="7" data-name="Deporte" class="pointer"><input type="checkbox" name="ckboxCat7" id="ckboxCat7"
                                                               class="pointer"><label class="pointer">Deporte</label>
    </li>
    <li data-id="10" data-name="Coche, moto y repuestos" class="pointer"><input type="checkbox" name="ckboxCat10"
                                                                                id="ckboxCat10" class="pointer"><label
            class="pointer">Coche, moto y repuestos</label></li>
    <li data-id="13" data-name="Restaurantes" class="pointer"><input type="checkbox" name="ckboxCat13" id="ckboxCat13"
                                                                     class="pointer"><label
            class="pointer">Restaurantes</label></li>
    <li data-id="11" data-name="Viajes" class="pointer"><input type="checkbox" name="ckboxCat11" id="ckboxCat11"
                                                               class="pointer"><label class="pointer">Viajes</label>
    </li>
    <li data-id="9" data-name="Libros y ocio" class="pointer"><input type="checkbox" name="ckboxCat9" id="ckboxCat9"
                                                                     class="pointer"><label class="pointer">Libros y
            ocio</label></li>
    <li data-id="14" data-name="Bancos y seguros" class="pointer"><input type="checkbox" name="ckboxCat14"
                                                                         id="ckboxCat14" class="pointer"><label
            class="pointer">Bancos y seguros</label></li>
    <li data-id="25" data-name="Bodas" class="pointer"><input type="checkbox" name="ckboxCat25" id="ckboxCat25"
                                                              class="pointer"><label class="pointer">Bodas</label></li>
</ul>-->