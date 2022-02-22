<template>
  <div>
    <div class="row">
      <div class="col">
        <div class="card shadow-sm">
          <div class="card-body">
            <h3>Title</h3>
            <div class="card-text">
              Post
            </div>
            <div class="d-flex justify-content-end small text-muted">Created at</div>

          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-8 offset-2">
        <hr>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col">
        <p>Comments:</p>
      </div>
    </div>
    <div class="row" v-for="comment in comments" :key="comment.id">
      <CommentComponent :comment="comment"></CommentComponent>
    </div>
  </div>
</template>

<script>
import CommentComponent from "./CommentComponent";
export default {
  components:{
    CommentComponent,
  },
  name: "PostComponent"
}
</script>

<style scoped>

</style>
