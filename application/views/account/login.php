    <!-- Begin mainmenu area -->
    <div class="mainmenu-area" ng-controller="MenuController">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="http://<?php echo site_url("home"); ?>">Accueil</a></li>
                        <li><a href="http://<?php echo site_url("shop"); ?>">Magasin</a></li>
                        <li><a href="http://<?php echo site_url("shop"); ?>">Trouver produit</a></li>
                        <li class="active"><a href="http://<?php echo site_url("cart"); ?>">Panier</a></li>
                        <li><a href="#">Catégories</a></li>
                        <li><a href="#">Dépliants</a></li>
                        <li><a href="#">Contactez nous</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> 
    <!-- End mainmenu area -->


<div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 form_conta">
                    <div class="product-content-right">
                        <div class="woocommerce">

                            <form id="login-form-wrap" class="login" method="post">

                                <p>Si vous êtes un nouveau client, passez à la section commande et expédition.</p>

                                <p class="form-row form-row-first">
                                    <label for="username">nom d'utilisateur <span class="required">*</span>
                                    </label>
                                    <input type="text" id="username" name="username" class="input-text">
                                </p>
                                <p class="form-row form-row-last">
                                    <label for="password">Mot de passe <span class="required">*</span>
                                    </label>
                                    <input type="password" id="password" name="password" class="input-text">
                                </p>
                                <div class="clear"></div>


                                <p class="form-row">
                                    <input type="submit" value="S'identifier" name="login" class="button">
                                    <label class="inline" for="rememberme"><input type="checkbox" value="forever" id="rememberme" name="rememberme"> Se rappeler de moi </label>
                                </p>
                                <p class="lost_password">
                                    <a href="#">Mot de passe oublié?</a>
                                </p>

                                <div class="clear"></div>
                            </form>

                        </div>                       
                    </div>                    
                </div>
            </div>
        </div>
    </div>
