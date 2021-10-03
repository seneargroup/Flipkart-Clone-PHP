    <!-- discounts for you section -->
    <section id="topSelection" class="bg-white w-full shadow overflow-hidden">
        <!-- header -->
        <div class="flex px-6 py-3 justify-between items-center">
            <h1 class="text-xl font-medium">Discounts for You</h1>
            <a href="#" class="bg-primary-blue text-xs font-medium text-white px-5 py-2.5 rounded-sm shadow-lg">VIEW ALL</a>
        </div>
        <hr>
        <!-- header -->
        
        <!-- products container -->
        <div class="flex items-center justify-between owl-carousel owl-theme relative">

            <?php
            foreach($product->getData('discount_for_you') as $item):
            ?>

            <!-- one product -->
            <a class="flex flex-col items-center gap-1.5 p-6" href="<?php echo $item['url']; ?>">
                <div class="w-36 h-36 transform hover:scale-110 transition-transform duration-100 ease-out">
                    <img class="w-full h-full object-contain" src="assets/images/discount_for_you/<?php echo $item['img']; ?>.png" alt="<?php echo $item['img_alt']; ?>">
                </div>
                <h2 class="font-medium text-sm mt-2"><?php echo $item['title']; ?></h2>
                <span class="text-primary-green text-sm"><?php echo $item['discount']; ?></span>
                <span class="text-gray-500 text-sm"><?php echo $item['tag']; ?></span>
            </a>

            <?php
            endforeach;
            ?>

        </div>
        <!-- products container -->
    </section>
    <!-- discounts for you section -->