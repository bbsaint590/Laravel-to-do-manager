<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-HI8mE5ZMoJF8Jdx1GdP9Ht4F5+8+aIjGiE8F8Y6C+/t8+k9PH76pZ7Zp1z2EJGfH8u2fJ5n/iYd2/rN1PJ61+A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ToDo_Manager</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<nav class="bg-slate-800 py-2 px-5">
    <span class="text-4xl text-white">Ben's To Do Manager</span>
</nav>

<header class="container mx-auto md:w-2/3 md:mt-10 py-16 px-8 bg-slate-200 rounded">
    <h1 class="text-5xl">To Do List</h1>
    <p>What needs to be completed...</p>
</header>

<section class="container mx-auto md:w-2/3 grid md:grid-cols-1 gap-5 mt-10">
    @foreach ($category->$toDos as $toDo)
        <div class="flex justify-between items-center bg-slate-100 p-5">
            <h3 class="text-2xl">{{$toDo->name}}</h3>
            @if(($toDo->completed) === true)
            <span class="bg-teal-500 text-2xl px-2 py-1 rounded">{{$toDo->completed}}</span>
            @else
            <span class="bg-red-500 text-2xl px-2 py-1 rounded">{{$toDo->completed}}</span>
            @endif
        </div>
    @endforeach
</section>

<footer class="container mx-auto md:w-2/3 border-t mt-10 pt-5">
    <p>© Copyright 2024</p>
</footer>

</body>
</html>
