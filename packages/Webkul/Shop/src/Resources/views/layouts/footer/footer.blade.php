<div class="footer">
    <div class="footer-content">
        <div class="footer-list-container">
            
            <div class="list-container">
                <span class="list-heading">Quick Links</span>
                <ul class="list-group">
                    <li>
                        <a href="{{ url('about') }}">About Us</a>
                    </li>
                    <li>
                        <a href="{{ url('contact') }}">Contact Us</a>
                    </li>
                    <li><a href="{{ url('team') }}">Our Team</a></li>
                    <li><a href="{{ url('product') }}">Our Products</a></li>
                    <li><a href="{{ url('service') }}">Our Services</a></li>
                    <li><a href="{{ url('factory') }}">Our Factory</a></li>
                </ul>
            </div>

            <?php
                $categories = [];

                foreach (app('Webkul\Category\Repositories\CategoryRepository')->getVisibleCategoryTree(core()->getCurrentChannel()->root_category_id) as $category){
                    if ($category->slug)
                        array_push($categories, $category);
                }
            ?>

            @if (count($categories))
                <div class="list-container">
                    <span class="list-heading">Categories</span>

                    <ul class="list-group">
                        @foreach ($categories as $key => $category)
                            <li>
                                <a href="{{ route('shop.categories.index', $category->slug) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!--{!! DbView::make(core()->getCurrentChannel())->field('footer_content')->render() !!}-->
            
            <div class="list-container">
                <span class="list-heading">Connect With Us</span>
                <ul class="list-group">
                    <li><a href="https://www.facebook.com/ZippyLeatherWare"> <span class="icon icon-facebook"></span>Facebook</a>
                    </li>
                </ul>
            </div>
            
            <div class="list-container">
                @if(core()->getConfigData('customer.settings.newsletter.subscription'))
                    <span class="list-heading">{{ __('shop::app.footer.subscribe-newsletter') }}</span>
                    <div class="form-container">
                        <form action="{{ route('shop.subscribe') }}">
                            <div class="control-group" :class="[errors.has('subscriber_email') ? 'has-error' : '']">
                                <input type="email" class="control subscribe-field" name="subscriber_email" placeholder="Email Address" required><br/>

                                <button class="btn btn-md btn-primary">{{ __('shop::app.subscription.subscribe') }}</button>
                            </div>
                        </form>
                    </div>
                @endif

                <?php
                    $query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
                    $searchTerm = explode("?", $query);

                    foreach($searchTerm as $term){
                        if (strpos($term, 'term') !== false) {
                            $serachQuery = $term;
                        }
                    }
                ?>

                <span class="list-heading">{{ __('shop::app.footer.locale') }}</span>
                <div class="form-container">
                    <div class="control-group">
                        <select class="control locale-switcher" onchange="window.location.href = this.value" @if (count(core()->getCurrentChannel()->locales) == 1) disabled="disabled" @endif>

                            @foreach (core()->getCurrentChannel()->locales as $locale)
                                @if(isset($serachQuery))
                                    <option value="?{{ $serachQuery }}?locale={{ $locale->code }}" {{ $locale->code == app()->getLocale() ? 'selected' : '' }}>{{ $locale->name }}</option>
                                @else
                                    <option value="?locale={{ $locale->code }}" {{ $locale->code == app()->getLocale() ? 'selected' : '' }}>{{ $locale->name }}</option>
                                @endif
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="currency">
                    <span class="list-heading">{{ __('shop::app.footer.currency') }}</span>
                    <div class="form-container">
                        <div class="control-group">
                            <select class="control locale-switcher" onchange="window.location.href = this.value">

                                @foreach (core()->getCurrentChannel()->currencies as $currency)
                                    @if(isset($serachQuery))
                                        <option value="?{{ $serachQuery }}?currency={{ $currency->code }}" {{ $currency->code == core()->getCurrentCurrencyCode() ? 'selected' : '' }}>{{ $currency->code }}</option>
                                    @else
                                        <option value="?currency={{ $currency->code }}" {{ $currency->code == core()->getCurrentCurrencyCode() ? 'selected' : '' }}>{{ $currency->code }}</option>
                                    @endif
                                @endforeach

                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>