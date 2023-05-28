<template>
    <div v-if="$route.path == '/'">
        <div>
            <!-- Category slider area start -->
            <div class="category-slider-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3" style="position: fixed;width: 23%">
                            <!-- CATEGORY-MENU-LIST START -->
                            <div class="left-category-menu hidden-sm hidden-xs">
                                <div class="left-product-cat">
                                    <div class="category-heading">
                                        <h2>Категории</h2>
                                    </div>
                                    <div class="category-menu-list">
                                        <ul>
                                            <!-- Single menu start -->
                                            <li v-for="category in $root.categories" class="arrow-plus">
                                                <a :href="'#'+category.id">{{category.name}}</a>
                                                <!--  MEGA MENU START -->

                                                <!-- MEGA MENU END -->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- END CATEGORY-MENU-LIST -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Category slider area End -->
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            foods: "",
            categories: ""
        };
    },
    methods: {},
    mounted() {
        // this.getFoods();
    }
};
</script>
<style>
.single-product:hover {
    -webkit-box-shadow: 1px 2px 23px 0px rgb(210, 46, 81, 1);
    -moz-box-shadow: 1px 2px 23px 0px rgb(210, 46, 81, 1);
    box-shadow: 1px 2px 23px 0px rgb(210, 46, 81, 1);
}

</style>

