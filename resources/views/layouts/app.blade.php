<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <title>  webvault - @yield('titulo')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="shortcut icon" href="{{asset('./asets/img/image.png')}}" type="image/x-icon">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-slate-50 text-stone-950 dark:bg-Slate-700 dark:text-cyan-50 font-roboto dark:dark:bg-slate-900 ">

    <header class="">
        <nav class="flex justify-between py-10 m-auto px-10 text-lg font-medium tracking-widest md:items-center">
           
            <a href=""><img src="{{asset('./asets/img/image.png')}}" alt="logo" width="58" class="p-2"> </a>
                

            <div id="menu" class="bg-white p-7 h-[380px] w-[320px] md:flex flex-col items-start 
            justify-around rounded-lg text-black dark:text-white md:flex-row md:w-full md:py-0 md:h-[50px] 
            md:bg-inherit md:dark:bg-Slate-700 hidden dark:bg-slate-800">
                
                <ul class="flex h-5/6 flex-col justify-around md:flex-row md:justify-center w-full ">
                    <li class="md:px-6 hover:text-sky-600"><a href="#desc">Quien Soy</a></li>
                    <li class="md:px-6 hover:text-sky-600"><a href="#exp">Experiencia</a></li>
                    <li class="md:px-6 hover:text-sky-600"><a href="#proy">Proyectos</a></li>
                    {{-- <li class="md:px-6 hover:text-sky-600"><a href="#contacto">Contacto</a></li> --}}
                </ul>

                <button id="darkButton">
                    <i class="bi bi-moon-stars-fill text-sky-600 text-2xl"></i>
                </button>

            </div>

            <button id='menu-button' class="absolute top-10 right-12 md:hidden">
                <span class="br-1 block bg-black dark:bg-white my-2 rounded-md h-[3px] w-[28px]"></span>
                <span class="br-2 block bg-black dark:bg-white my-2 rounded-md h-[3px] w-[28px]"></span>
                <span class="br-3 block bg-black dark:bg-white my-2 rounded-md h-[3px] w-[28px]"></span>
            </button>
        </nav>

    </header>

    <main>

        
        @yield('contenido')
 
    </main>

    <footer class="mt-10 text-center p-5 font-blood uppercase bg-color5 bg-slate-300 dark:bg-slate-800">
        <p>Diseñado &#38; Desarrolado por JCardona</p>
        <p> portafolio {{now()->year}}</p>
       
    </footer>
</body>
</html>