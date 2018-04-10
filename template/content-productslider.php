
<section id="slider3" class="section-productslider">
  <div class="section-container container">

    <div class="productslider-heading heading-box">
      <h2 class="heading-en">PRODUCTS</h2>
      <p class="heading-jp">「ちえのわ」製品紹介</p>
      <p class="heading-jp-sm">「おいしい」と言ってもらえる<br>農産物を自ら届ける</p>
    </div>

    <ul class="bxslider bxslider3" id="">

      <li class="bxslider-slide product-item">
        <img class="product-img" src="<?php bloginfo( 'template_directory'); ?>/images/product-1.png">
        <h2 class="product-heading-en heading-en">Betsukai Oishii Milk</h2>
        <p class="product-heading-jp heading-jp">ベイシア様のPB商品<br>「別海のおいしい牛乳」富士乳業</p>
        <p class="product-desc">2017年の夏より販売を開始し、ベイシア各店舗にて購入ができる「別海のおいしい牛乳」。<br>以前に販売していたパッケージの「別海のおいしい牛乳」が好評で、<br>ベイシア様のPB商品となりました。<br>この牛乳で作った関連商品もたくさんあります。<br></p>
        <div class="product-shop">取扱店: 
          <ul>
            <li><a href="https://www.beisia.co.jp/" target="_brank">ベイシア</a></li>
          </ul>
        </div>
      </li> <!-- /.product-item -->

      <li class="bxslider-slide product-item">
        <img class="product-img" src="<?php bloginfo( 'template_directory'); ?>/images/product-2.png">
        <h2 class="product-heading-en heading-en">Betsukai Oishii Milk</h2>
        <p class="product-heading-jp heading-jp">「別海のおいしい牛乳」近藤乳業</p>
        <p class="product-desc">2017年秋より販売を開始し、「OK」さんを始めとした<br>西関東の大手スーパーにて取扱いを行っています。</p>
      </li> <!-- /.product-item -->

      <li class="bxslider-slide product-item">
        <img class="product-img" src="<?php bloginfo( 'template_directory'); ?>/images/product-3.png">
        <h2 class="product-heading-en heading-en">"Betsukai Oishii Milk"</h2>
        <p class="product-heading-jp heading-jp">「別海のおいしい牛乳」富士乳業</p>
        <p class="product-desc">【販売中止】<br>約２年前に初めて、別海周辺の厳選された<br>農家の牛乳をブランド化して、山形の富士乳業<br>様から発売を開始した記念すべき牛乳です。<br></p>
        
      </li> <!-- /.product-item -->

      <li class="bxslider-slide product-item">
        <img class="product-img" src="<?php bloginfo( 'template_directory'); ?>/images/product-4.png">
        <h2 class="product-heading-en heading-en">"Oishii Milk From Konsen"</h2>
        <p class="product-heading-jp heading-jp">「根釧初おいしい牛乳」富士乳業</p>
        <p class="product-desc">【販売中止】<br>約２年前に初めて、別海周辺の厳選された<br>農家の牛乳をブランド化して、山形の富士乳業<br>様から発売を開始した記念すべき牛乳です。<br></p>
        
      </li> <!-- /.product-item -->

    </ul>

    <?php if( is_page_template('page-product.php')) { ?>
    <div class="productslider-bottom btn-box"></div>
    <?php } else { ?>
    <div class="productslider-bottom btn-box">
      <a class="product-link-product btn-solid" href="<?php bloginfo( 'url' ); ?>/product">東北海道の牛乳紹介</a>
    </div>
    <?php } ?>
    

  </div> <!-- /.section-container -->
</section> <!-- /#slider -->

