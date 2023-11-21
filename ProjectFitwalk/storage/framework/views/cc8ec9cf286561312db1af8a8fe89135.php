<div class="sidebar">
    <?php if($categories->count() > 0): ?>
    <div class="sidebar-widget">
        <div class="widget-title">
            <h5>Categories</h5>
        </div>
        <div class="widget-content widget-categories">
            <ul class="nav nav-category">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="nav-item border-bottom w-100">
                    <a class="nav-link" href="<?php echo e(shop_category_link($category)); ?>"><?php echo e($category->name); ?> <i class='bx bx-chevron-right'></i></a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
    <?php endif; ?>
    <div class="sidebar-widget mt-4">
        <div class="widget-title">
            <h5>Price Range</h5>
        </div>
        <div class="widget-content shop-by-price">
            <form method="GET" action="?">
                <div class="price-filter">
                    <div class="price-filter-inner">
                        <div id="slider-range"></div>
                        <div class="price_slider_amount">
                            <div class="label-input d-lg-flex justify-content-between">
                                <input type="hidden" id="min_price" value="<?php echo e($filter['price']['min']); ?>"/>
                                <input type="hidden" id="max_price" value="<?php echo e($filter['price']['max']); ?>"/>
                                <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                <button type="submit" class="btn-first-sm">Filter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><?php /**PATH C:\Users\USER\Documents\Haooo\Web Prog\ProjectFitwalk\resources\views/themes/projectfitwalk/products/sidebar.blade.php ENDPATH**/ ?>