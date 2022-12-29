<template>
   <Layout>
    <div class="row">
        <div v-for="book in books" v-bind:key="book.id" class="col-md-3 m-5">
                    <div class="card" >
                        <img v-bind:src="book.cover_image" /> 
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ book.book_name }}</h5>
                            <p class="card-text text-center">{{ book.author }}</p>
                            <p class="card-text text-center">TK. {{ book.price }}</p>
                            
                        </div>
                    </div>
        </div> 
    
    </div>

    </Layout>
</template>
  
  <script>
    import Layout from '../components/layouts/Layout.vue';
    import Vue from 'vue';
    import axios from 'axios';
    
  export default {
    
    name: 'Homepage',
    components: {
        Layout
    },
    data () {
      return {
        title: 'Table',
        subtitle: 'Table Details',
        msg: 'Customers List',
        books : {},
        book: {
            id: '',
            full_name: '',
            address: '',
            phone: ''
        }
      }
    },
    
    created() {
        this.getBooks();
    },

    methods: {
        getBooks()
        {
            var page = 'http://localhost:8000/api/books';
            axios.get(page)
            .then(
                ({data}) => {
                    console.log(data);
                    this.books = data;
                }
            )
        },

        
    }
  }
  </script>
  
  <!-- Add "scoped" attribute to limit CSS to this component only -->

  </style>
  



