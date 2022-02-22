<template>
  <section>
    <div class="row m-2" v-for="post in posts" :key="post.id">
      <div class="col">
        <div class="card shadow-sm">
          <router-link
              class="card-header"
              data-toggle="collapse"
              :to="{ name: 'post.show',params:{slug:post.slug} }"
          >{{ post.title }}
          </router-link>
          <div class="card-body">
            <div class="card-text">
              <p>{{ post.body }}</p>
            </div>
            <div class="d-flex justify-content-end small">
              Created At: {{ post.created_at }}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <pagination v-if="posts.length"
                    :meta_data="meta_data"
                    v-on:next="fetchData">
        </pagination>
      </div>
    </div>
  </section>
</template>

<script>
import Pagination from "./helpers/Pagination";

export default {
  name: "PostsComponent",
  components: {
    Pagination
  },
  data() {
    return {
      posts: '',
      meta_data: {
        last_page: null,
        current_page: 1,
        prev_page_url: null
      },
    }
  },
  mounted() {
    this.fetchData();
  },
  methods: {
    fetchData(page = 1) {
      axios.get('/api/post', {
        params: {
          page,
        }
      }).then(response => {
        this.posts = response.data.data;
        this.meta_data.last_page = response.data.meta.last_page;
        this.meta_data.current_page = response.data.meta.current_page;
        this.meta_data.prev_page_url = response.data.links.prev;
        this.meta_data.links = response.data.meta.links;
      })
    }
  }
}
</script>

<style scoped>

</style>
