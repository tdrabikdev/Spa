<template>
  <nav class="mb-3">
    <ul class="pagination justify-content-center">
      <li class="page-item"
          :class="{ 'disabled': meta_data.prev_page_url === null }">
        <button
            class="page-link"
            @click="next(meta_data.current_page-1)">
          Previous
        </button>
      </li>
      <li class="page-item disabled d-none d-sm-block"><span class="page-link">Current Page: {{meta_data.current_page}} of {{ meta_data.last_page}}</span></li>
      <li class="page-item"
          :class="{ 'disabled': meta_data.current_page === meta_data.last_page }">
        <button
            class="page-link"
            @click="next(meta_data.current_page+1)">
          Next
        </button>
      </li>
    </ul>
  </nav>
</template>
<script>
export default {
  name: 'Pagination',
  props: ['meta_data'],
  methods: {
    next(page) {
      this.$emit('next', page);
    }
  }
}
</script>
