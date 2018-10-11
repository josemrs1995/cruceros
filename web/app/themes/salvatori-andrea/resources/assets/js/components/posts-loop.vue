<template>
    <div>
        <h2 class="title">This is the list of the posts</h2>
        <!--posts start here-->
        <div class="posts-container columns is-mobile is-multiline">
            <div v-for="(post, index) in posts" :key="index" class="column is-3-desktop is-6-mobile post-item  animate fadeIn">
                <div class="card">
                    <img :src='post.fimg_url' />
                    <div class="card-content">
                        <h2 class="title">{{post.title.rendered}}</h2>
                    </div>
                    <footer class="card-footer">
                        <p class="card-footer-item">
                            <span>
                               Read <a :href="post.link">More</a>
                            </span>
                        </p>
                        <p class="card-footer-item">
                            <span>
                                Share on <a href="#">Facebook</a>
                            </span>
                        </p>
                    </footer>
                </div>
            </div>
        </div>



        <pagination :pagination="pagination" @prev="--postsData.page; getPosts();" @next="postsData.page++; getPosts();">
        </pagination>
    </div>

</template>

<script>
    export default {
        //To check these methods, check global.js
        endpoint: '/wp-json/wp/v2/posts/?_embed',
        per_page: 8,
    }

</script>

<style lang="scss" scoped>
    @for $i from 1 through 10 {
        .post-item:nth-of-type(#{$i}n) {
            animation-delay: #{$i * 0.5}s;
            animation-name: fadeInUp;
        }
    }

</style>
