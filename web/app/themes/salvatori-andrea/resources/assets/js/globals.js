//Setting up the url
//Vue.prototype.$appUrl = location.protocol+'//'+location.hostname+(location.port ? ':'+location.port: '')
Vue.prototype.$appUrl = location.protocol+'//'+location.hostname+(location.port ? ':'+location.port: '')


//setting up the axios method to Get Posts and Pages in a Mixin.

import pagination from './components/pagination.vue'

Vue.mixin({
    mounted() {
        this.getPosts(); 
    },
    components: {
        'pagination': pagination
    },
    data() {
        return {
            animate: 'animate',
            postsUrl: this.$appUrl + this.$options.endpoint,
            posts: [],
            postsData: {
                per_page: this.$options.per_page,
                page: 1
            },
            pagination: {
                prevPage: '',
                nextPage: '',
                totalPages: '',
                from: '',
                to: '',
                total: '',
            },
        }
    },
    methods: {
        getPosts() {
                axios.get(this.postsUrl, {
                        params: this.postsData
                    })
                    .then((response) => {
                        this.posts = response.data;
                        this.configPagination(response.headers);
                    })
                    .catch((error) => {
                        console.log(error);
                    });
        },
        configPagination(headers) {
            this.pagination.total = +headers['x-wp-total'];
            this.pagination.totalPages = +headers['x-wp-totalpages'];
            this.pagination.from = this.pagination.total ? ((this.postsData.page - 1) * this.postsData.per_page) +
                1 : ' ';
            this.pagination.to = (this.postsData.page * this.postsData.per_page) > this.pagination.total ? this.pagination
                .total : this.postsData.page * this.postsData.per_page;
            this.pagination.prevPage = this.postsData.page > 1 ? this.postsData.page : '';
            this.pagination.nextPage = this.postsData.page < this.pagination.totalPages ? this.postsData.page + 1 :
                '';
        }
    } 
  })
  