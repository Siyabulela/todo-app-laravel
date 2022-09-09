<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Poppins&display=swap"
        rel="stylesheet"
        />
        
        <!-- Icons -->
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
        integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk="
        crossorigin="anonymous"
      />
        <!-- Styles -->
        <style>
            * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    background: #2C0735;
    color: white;
    font-family: "Poppins", sans-serif;
    min-height: 100vh;
  }
  header {
    font-size: 2rem;
  }
  
  header,
  .formIn {
    min-height: 20vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .formIn input,
  .formIn button {
    padding: 0.5rem;
    font-size: 2rem;
    border: none;
    background: white;
  }
  .formIn button {
    color: #B6174B;
    background: #f7fffe;
    cursor: pointer;
    transition: all 0.3s ease;
  }
  form button:hover {
    background: #B6174B;
    color: white;
  }
  .todo-container {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .todo-list {
    min-width: 30%;
    list-style: none;
  }
  
  .todo {
    margin: 0.5rem;
    background: white;
    font-size: 1.5rem;
    color: black;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: all 1s ease;
  }
  .filter-todo {
    padding: 1rem;
  }
  .todo li {
    flex: 1;
  }
  
  .trash-btn,
  .complete-btn,
  .edit-btn {
    background: #B6174B;
    color: white;
    border: none;
    padding: 1rem;
    cursor: pointer;
    font-size: 1rem;
  }
  .complete-btn {
    background: #018d02;
  }
  .edit-btn {
    background: #be832a;
  }
  .todo-item {
    padding: 0rem 0.5rem;
  }
  
  .fa-trash,
  .fa-check {
    pointer-events: none;
  }
  
  .completed {
    text-decoration: line-through;
    opacity: 0.5;
  }
  
     </style>
    </head>
    <body class="antialiased">
        <div class="App">
            <div>
                <header>
                    <h1>Todo List Laravel</h1>
                  </header>
                <form method="post" class="formIn" action="{{ route('saveItem') }}" accept-charset="UTF-8">
                    {{ csrf_field() }}
                    <input type="text" name="listItem" class="todo-input" required="true">
                    <button class="todo-button" type="submit">
                        <i class="fas fa-plus"></i>
                    </button>
                </form>
                <div class="todo-container">
                    <ul class="todo-list">
                        @foreach ($listItems as $listItem)
                            <div class="todo">
                                <li class="">{{ $listItem->name }}</li>
                                <form method="post" action="{{ route('deleteItem', $listItem->id) }}" accept-charset="UTF-8">
                                  {{ csrf_field() }}
                                  <button class="trash-btn">
                                    <i class="fas fa-trash"></i>
                                  </button>
                                </form>
                            </div>
                        @endforeach
                    </ul>
                </div>
            </div>    
        </div>
    </body>
</html>
