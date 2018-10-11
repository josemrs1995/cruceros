<template>
    <div class="animate">
        <h2 class="title">List of all Pages</h2>
        <!--posts start here-->
        <div class="posts-container columns is-multiline">
            <div v-for="(post, index) in posts" :key="index" class="column is-3 post-item  animate fadeIn">
               <div  class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            {{post.title.rendered}}
                        </p>
                        <a :href="post.link" class="card-header-icon" aria-label="View page">
                            <span class="icon">
                                <i class="fas fa-angle-down" aria-hidden="true"></i>
                            </span>
                        </a>
                    </header>
                    <figure class="image is-4by3">
                       <img :src="post.fimg_url" />
                        </figure>
                    <div class="card-content">
                        <div class="content">
                            {{post.excerpt.rendered}}
                            <a :href="post._embedded.author[0].link">{{post._embedded.author[0].name}}</a>.
                            <br>
                            <time datetime="post.date_gmt">{{post.date_gmt}}</time>
                        </div>
                    </div>
                      <footer class="card-footer">
                            <a  :href="post.link" class="card-footer-item">More</a>
                            <a href="javascript:void(0)" class="card-footer-item">Share</a>
                            <a href="javascript:void(0)" class="card-footer-item">Tweet</a>
                        </footer>
                </div>
            </div>
        </div>
        <pagination :pagination="this.pagination" @prev="--postsData.page; getPosts();" @next="postsData.page++; getPosts();">
        </pagination>
    </div>

</template>

<script>
    export default {
        //To check these methods, check global.js
        endpoint: '/wp-json/wp/v2/pages/?_embed',
        per_page: 4,
    }

</script>

<style lang="scss" scoped>
    @for $i from 1 through 10 {
        .post-item:nth-of-type(#{$i}n) {
            animation-delay: #{$i * 0.5}s;
            animation-name: fadeIn;
        }
    }

</style>
