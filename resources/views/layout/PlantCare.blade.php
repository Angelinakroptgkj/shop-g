@include('vite')
@include('layout.header')


<div class="ShoppingCart_link container">
  <a href="" class="link">Home</a>
  <p>/</p>
  <a href="" class="link">Shop</a>
  <p>/</p>
  <a href="" class="link_plant">Shopping Cart</a>
</div>

<div class="plant_Products container">
  <!-- oc -->
  <div class="products_block">
    <div class="products_block1">
      <div class="products_definitions">
        <p class="productsTEXT">Products</p>
        <div class="products_definitions1">
          <p class="productsTEXT">Price</p>
          <p class="productsTEXT">Quantity</p>
          <p class="productsTEXT">Total</p>
        </div>
      </div>
      <div class="products_line"></div>
    </div>
    <div class="goods">
      <div class="goods_naming">
        <img src="img/image11.png" alt="">
        <div class="naming_title">
          <div class="naming_title1">
            <h2>Barberton Daisy</h2>
            <p><b>SKU:</b> 1995751877966</p>
          </div>
        </div>
      </div>
      <div class="price_Products">
        <div class="price_Products1">
          <p>$119.00</p>
          <div class="price-quantity">
            <button id="minuses" class="adjuster">-</button>
            <span id="sign" class="adjuster1">0</span>
            <button id="pros" class="adjuster">+</button>
          </div>
          <h2>$238.00</h2>
        </div>
        <button class="btn_svg"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="21" viewBox="0 0 19 21" fill="none">
            <path d="M15.8892 8.55408C15.8892 16.5731 17.0435 20.1979 9.27967 20.1979C1.5149 20.1979 2.693 16.5731 2.693 8.55408" stroke="#727272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M17.3652 5.47985H1.21472" stroke="#727272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M12.7149 5.47983C12.7149 5.47983 13.2435 1.71411 9.28923 1.71411C5.3359 1.71411 5.86447 5.47983 5.86447 5.47983" stroke="#727272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg></button>
      </div>
    </div>
    <div class="goods">
      <div class="goods_naming">
        <img src="img/image15.png" alt="">
        <div class="naming_title">
          <div class="naming_title1">
            <h2>Barberton Daisy</h2>
            <p><b>SKU:</b> 1995751877966</p>
          </div>
        </div>
      </div>
      <div class="price_Products">
        <div class="price_Products1">
          <p>$119.00</p>
          <div class="price-quantity">
            <button id="minus" class="adjuster">-</button>
            <span id="number" class="adjuster1">0</span>
            <button id="plus" class="adjuster">+</button>
          </div>
          <h2>$238.00</h2>
        </div>
        <button class="btn_svg"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="21" viewBox="0 0 19 21" fill="none">
            <path d="M15.8892 8.55408C15.8892 16.5731 17.0435 20.1979 9.27967 20.1979C1.5149 20.1979 2.693 16.5731 2.693 8.55408" stroke="#727272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M17.3652 5.47985H1.21472" stroke="#727272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M12.7149 5.47983C12.7149 5.47983 13.2435 1.71411 9.28923 1.71411C5.3359 1.71411 5.86447 5.47983 5.86447 5.47983" stroke="#727272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg></button>
      </div>
    </div>
    <div class="goods">
      <div class="goods_naming">
        <img src="img/image16.png" alt="">
        <div class="naming_title">
          <div class="naming_title1">
            <h2>Barberton Daisy</h2>
            <p><b>SKU:</b> 1995751877966</p>
          </div>
        </div>
      </div>
      <div class="price_Products">
        <div class="price_Products1">
          <p>$119.00</p>
          <div class="price-quantity">
            <button id="reduce" class="adjuster">-</button>
            <span id="quantity" class="adjuster1">0</span>
            <button id="add" class="adjuster">+</button>
          </div>
          <h2>$238.00</h2>
        </div>
        <button class="btn_svg"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="21" viewBox="0 0 19 21" fill="none">
            <path d="M15.8892 8.55408C15.8892 16.5731 17.0435 20.1979 9.27967 20.1979C1.5149 20.1979 2.693 16.5731 2.693 8.55408" stroke="#727272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M17.3652 5.47985H1.21472" stroke="#727272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M12.7149 5.47983C12.7149 5.47983 13.2435 1.71411 9.28923 1.71411C5.3359 1.71411 5.86447 5.47983 5.86447 5.47983" stroke="#727272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg></button>
      </div>
    </div>

  </div>

  <div class="cartTotals_block">
    <div class="cartTotals_text">
      <p>Cart Totals</p>
      <div class="lineTotal"></div>
    </div>
    <p class="cartTotals_title">Coupon Apply</p>
    <div class="coupon_input">
      <input type="text" name="text" placeholder="Enter coupon code here...">
      <button class="btn_apply">Apply</button>
    </div>
    <div class="subtotal">
      <p class="cartTotals_p">Subtotal</p>
      <h2>$2,683.00</h2>
    </div>
    <div class="coupon_DiscounT">
      <P class="cartTotals_p">Coupon Discount</P>
      <h2>(-) 00.00</h2>
    </div>
    <div class="shiping">
      <p class="cartTotals_p">Shiping</p>
      <h2>$16.00</h2>
    </div>
    <p class="view_text">View shipping charge</p>
    <div class="total">
      <p>Total</p>
      <h2>$2,699.00</h2>
    </div>
    <form action="{{ route('blogs') }}" method="get" class="proceed_form">
      <button type="submit">Proceed To Checkout</button>
    </form>
    <a href="#" class="continue">Continue Shopping</a>
  </div>

  <!-- oc -->
</div>

@include('layout.footer')