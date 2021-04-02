<?php 
include_once('../entete.php'); 
include_once('../fonction.php');
?>


<div id="app"  >
  {{ message }}
  {{ id }}

  <span v-bind:title="message">
    Hover your mouse over me for a few seconds
    to see my dynamically bound title!
  </span>

  <span v-if="seen">Now you see me</span>
  <ol>
    <li v-for="todo in todos">
      {{ todo.text }}
    </li>
  </ol>


  <p>{{ message1 }}</p>
  <button v-on:click="reverseMessage">Reverse Message</button>
</div>






</body>

<script>

var app = new Vue({
  el: '#app',
  data: {
    message: 'You loaded this page on ' + new Date().toLocaleString(),
    message1 : 'Hello Vue.js!',
   id:1,
   seen: false,
   todos: [
      { text: 'Learn JavaScript' },
      { text: 'Learn Vue' },
      { text: 'Build something awesome' }
    ]


  },
  methods: {
    reverseMessage: function () {
      this.message1 = this.message1.split('').reverse().join('')
    }
  }

})

</script>


</html>