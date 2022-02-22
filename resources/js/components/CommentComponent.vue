<template>
  <div>
    <div class="col-2 d-flex justify-content-center">
      {{ comment.author }}
    </div>
    <div class="col-9">
      {{ comment.body }}
      <div class="d-flex justify-content-end small text-muted">Created at: {{ comment.created_at }}</div>
    </div>
    <div class="col-1">Reply</div>
  </div>
</template>

<script>
export default {
  props: [
    'comment'
  ],
  name: "CommentComponent"
}
</script>

<style scoped>

</style>
