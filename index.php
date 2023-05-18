<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <!-- fontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <title>To Do List(vue)</title>
</head>
<body>
  
  <div id="app">
    <div class="logo">
      <img src="img/download.png" alt="logo">
    </div>

    <div class="input-container">

      <input
       @keydown.enter="newTask(tasks)"
       v-model.trim="taskText"
       type="text"
       placeholder="Aggiungi un nuovo task"
      >

      <button  
       
       @click="newTask(tasks)"
      >
        Aggiungi</button>
      
      <p class="errorMessage">{{message}}</p>
    </div>

    <div class="tasks-container">
      <ul class="tasks-list">
        <li
         v-if="tasks.length !== 0"
         v-for="(task, index) in tasks"
         @click="task.done = !task.done"
         >
          
          <span :class="{'done': task.done}">
            {{task.text}}
          </span>
          
          <i
           @click.stop="removeTask(task, index)"
           class="fa-solid fa-x"
          >
          </i>

        </li>
        <h1 v-else>Complimenti! hai completato tutti i tasks 🤯</h1>
      </ul>

    </div>


  </div>


  <script src="js/main.js"></script>
</body>
</html>