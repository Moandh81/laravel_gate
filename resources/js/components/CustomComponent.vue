<template>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Liste des Articles</div>


                    <ul class="list-group">

  

  <li  class="list-group-item"  v-for="post in posts.data">{{ post.id}} - {{ post.title}} </li>

  <!-- <li class="list-group-item" v-for="user in info"> {{user.name}}</li> -->


            </ul>

            <pagination :data="posts" @pagination-change-page="getResults">



            </pagination>



                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {

                posts: {} ,
            }
        } ,

        mounted() {
        //     axios.get('http://localhost:8000/posts')
        // .then(response => ( this.posts = response.data))
        //  .catch(function(error){
        //        console.log(error);
               
        //    });
        
        this.getResults() ;
         
        } ,


        methods: {

            getResults(page = 1) {
			axios.get('http://localhost:8000/posts?page=' + page)
				.then(response => {
                    this.posts = response.data;
                    
				});
		}
        }
    }
</script>
