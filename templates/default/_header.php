<?php
// More about design modifications - www.opensolution.org/Quick.Cart/docs/ext_6.6/?id=en-design
// Generator tag is required: www.opensolution.org/licenses.html
if( !defined( 'CUSTOMER_PAGE' ) )
  exit;
?><!DOCTYPE HTML>
<html lang="<?php echo $config['language']; ?>">
<head>
  <title><?php echo $sTitle.$config['title']; ?></title>
  <meta name="Language" content="<?php echo $config['language']; ?>" />
  <meta name="Description" content="<?php echo $sDescription; ?>" />
  <meta name="Generator" content="Quick.Cart v<?php echo $config['version']; ?>" />

  <link rel="stylesheet" href="<?php echo $config['dir_skin'].$config['style']; ?>" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <script src="<?php echo $config['dir_plugins']; ?>jquery.min.js"></script>
  <script src="<?php echo $config['dir_core']; ?>common.js"></script>
  <script src="<?php echo $config['dir_libraries']; ?>quick.box.js"></script>
  <script>
    var aCF = {
      'sWarning' : '<?php echo $lang['cf_no_word']; ?>',
      'sEmail' : '<?php echo $lang['cf_mail']; ?>',
      'sInt' : '<?php echo $lang['cf_wrong_value']; ?>'
    };
  </script>
  <?php displayAlternateTranslations( ); ?>
</head>
<body<?php if( isset( $aData['iPage'] ) && is_numeric( $aData['iPage'] ) ) echo ' id="page'.$aData['iPage'].'"'; elseif( isset( $aData['iProduct'] ) && is_numeric( $aData['iProduct'] ) ) echo ' id="product'.$aData['iProduct'].'"'; ?>>


<div id="container">
<header class="header">
  <div class="container">
      <div class="containerHeader">
        <div class="logo">
        <div id="title">
          <a href="./" tabindex="4"><h2> <i class="fas fa-store"></i> WS <span>Store</span></h2></a>
        </div>
        </div>
        <nav>
        <?php echo $oPage->throwMenu( 2, $iContent, 0 ); // content of top menu second ?>
        </nav>
        <div class="searchBar">

        </div>
        <div class="cart">
        <i class="fas fa-shopping-cart"></i><?php echo $oPage->throwMenu( 1, $iContent, 0 ); // content of top menu first ?>
        </div>
      </div>

  </div>
</header>
  <div id="body"<?php if( isset( $config['this_is_order_page'] ) ) echo ' class="order"'; elseif( isset( $config['this_is_basket_page'] ) ) echo ' class="basket-page"'; ?>>
    <div class="container">
      <main>
      <div id="column"><?php 
        if( !isset( $config['this_is_order_page'] ) ){ // left column with left menu ?><?php
          if( isset( $config['page_search'] ) && is_numeric( $config['page_search'] ) && isset( $oPage->aPages[$config['page_search']] ) ){ // search form starts here ?>
            <a id="search" tabindex="-1"></a>
            <div class="searchForm">
            <form method="post" action="<?php echo $oPage->aPages[$config['page_search']]['sLinkName']; ?>" id="searchForm">
                <span><input placeholder="Search for products" type="text" size="15" name="sPhrase" id="searchField" value="<?php echo $sPhrase; ?>" class="input" maxlength="100" accesskey="1" /></span>
                <em><input type="submit" value="<?php echo $lang['search']; ?> &raquo;" class="submit" /></em>
            </form>
            </div>
            <?php
          }  // search form ends here ?><?php 
          echo $oPage->throwMenu( 3, $iContent, 1, true ); // content of left menu ?><?php 
        }?>       
      </div>
      <div class="hero">
        <img src="" alt="">
      </div>
      <div id="content">