@extends('layouts.app')


@section('titulo')
    portafolio
@endsection
      

@section('contenido')

<section class="my-0 flex flex-col lg:flex-row lg:h-[850px] " id="desc">
    <div class="p-10 lg:w-[80%] lg:h-[500px] lg:self-center">
        <h1 class="text-sky-600 dark:text-sky-300 text-2xl font-bold tracking-widest leading-10 expcard">Softeare Engenieer.</h1>
        <p class="py-2 text-3xl font-bold text-slate-600 dark:text-slate-300 expcard">Josue Cardona</p>
        <p class="text-3xl font-bold text-slate-500 dark:text-slate-600 expcard">Full stack Developer</p>
        <p class="mt-5 text-lg expcard">Creo aplicaciones que impactan positivamente al trabajo, Con experiencia en proyectos a nivel nacional.</p>
        
        {{-- redes sociales --}}
        <div class="py-6">
            <a href="https://twitter.com/dev_del_pueblo" class="pr-2 text-2xl hover:text-sky-600 " target="_blank"> <i class="bi bi-twitter px-2 "></i>  </a>
            <a href="https://www.instagram.com/josue_cardona__/" class="pr-2 text-2xl hover:text-sky-600 " target="_blank"> <i class="bi bi-instagram px-2"></i></a>
            <a href="https://www.linkedin.com/in/josue-daniel-cardona-pineda-541126195/" class="pr-2 text-2xl hover:text-sky-600 " target="_blank"> <i class="bi bi-linkedin px-2"></i> </a>
            <a href="https://github.com/MRJosue" class="pr-2 text-2xl hover:text-sky-600 " target="_blank"> <i class="bi bi-github px-2"></i>   </a>
           
            <a href="mailto:ingjosue.cardona@gmail.com?" class="pr-2 text-2xl hover:text-sky-600 " target="_blank"> <i class="bi bi-envelope-at-fill"></i> </a>
        </div>

        <div>
           <a  href="mailto:ingjosue.cardona@gmail.com?" class="rounded-lg border-solid border-2 border-gray-800  p-4 w-[250px] text-lg traking-widest hover:bg-sky-500 hover:dark:text-slate-900  transition duration-100" >Contactame</a> 
        </div>
    </div>

        <div class="my-10 w-full Items-center " >
            <img src="{{asset('./asets/img/perfilb.png')}}" alt="user" class="w-[400px] h-[620] m-auto bg-cover rounded-lg expcard">
        </div>
    </div>

</section>

<h2 class="text-3xl text-slate-700 dark:text-white font-bold tracking-widest
w-[85%] m-auto text-center pt-8 " id="exp">Experiencia Laboral</h2>
<section class="my-12 flex flex-col w-[84%] m-auto lg:flex-row lg:w-[87%] lg:my-28"  id="jobSection">
    
    <div class="flex justify-between lg:flex-col lg:w-[20%]"> 
        <button  class="buttonlg"  type="button" data-id="job1">Infotec</button>
        <button  class="buttonlg"  type="button" data-id="job2">sykes</button>
        <button  class="buttonlg"  type="button" data-id="job3">domo</button>
        {{-- <button  class="buttonlg"  type="button" data-id="job4">Creative tech</button> --}}
    </div>


    <div class="my-5 lg:px-10 lg:my-0 lg:max-w-[900px]">
       
        <article id="job1">
            <h3>(Desarrollador PHP full stack)<span class="text-sky-500 font-bold text-lg py-2"> @Infotec S.A. de C.V</span></h3>
            <h4 class="text-sm- pb-5">Noviembre del 2021 en la actualidad</h4>
            <ul>
                <li class="flex items-center ">
                    <span class="pr-2 text-sky-500 font-black">&#9655;</span>
                    <p class="text-stone-900 dark:text-cyan-50 font-normal px-5">
                        Diseño de sistemas de administración con bases de datos 
                        relacionales.
                        Resolución de problemas de bases de datos.
                        Despliegues a producción</p></li>
                <li class="flex items-center py-2">
                    <span class="pr-2 text-sky-500 font-black">&#9655;</span>
                    <p class="text-stone-900 dark:text-cyan-50 font-normal px-5">
                        Desarrollo de modulo de administracion para el area juridica, se crean paneles que ayuden con la adminsitracion de las demandas relacionadas con la horganizacion.
                    </p></li>
                
            </ul>
        </article>

        <article id="job2">
            <h3>(Soporte tecnico lv1)<span class="text-sky-500 font-bold text-lg py-2"> @Sykes S.A. de C.V</span></h3>
            <h4 class="text-sm- pb-5">Julio del 2019 al Noviembre del 2021</h4>
            <ul>
                <li class="flex items-center ">
                    <span class="pr-2 text-sky-500 font-black">&#9655;</span>
                    <p class="text-stone-900 dark:text-cyan-50 font-normal px-5">
                        Administración de usuarios de dominio, administración 
                        de plataformas y resolución de problemas de bases de 
                        datos
                    </p></li>
            </ul>
        </article>

        <article id="job3">
            <h3>(Desarrollador PHP)<span class="text-sky-500 font-bold text-lg py-2"> @Domo Educativo S.A. de C.V</span></h3>
            <h4 class="text-sm- pb-5">Agosto del 2019 - julio del 2020</h4>
            <ul>
                <li class="flex items-center ">
                    <span class="pr-2 text-sky-500 font-black">&#9655;</span>
                    <p class="text-stone-900 dark:text-cyan-50 font-normal px-5">
                        Soporte técnico nivel 2, administración de servidores y 
                        desarrollo de aplicaciones web, administración de ERP y 
                        programas de respaldo de información.
                    </p></li>

            </ul>
        </article>
        {{-- 
                <article id="job4">
                    <h3>Ingeniero de Software <span class="text-sky-500 font-bold text-lg py-2">@Intelio</span></h3>
                    <h4 class="text-sm- pb-5">Junio 2020 - Presente</h4>
                    <ul>
                        <li class="flex items-center ">
                            <span class="pr-2 text-sky-500 font-black">&#9655;</span>
                            <p class="text-stone-900 dark:text-cyan-50 font-normal px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quibusdam ab error nisi. Illo quia eum explicabo laboriosam tempore excepturi hic ad doloremque asperiores, enim ut atque. Rerum, recusandae quaerat!</p></li>
                        <li class="flex items-center py-2">
                            <span class="pr-2 text-sky-500 font-black">&#9655;</span>
                            <p class="text-stone-900 dark:text-cyan-50 font-normal px-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo quasi illum esse! Cumque deleniti, fuga cupiditate eum non facere sequi nam excepturi inventore commodi pariatur architecto voluptate, beatae iste qui!</p></li>
                        <li class="flex items-center py-2">
                            <span class="pr-2 text-sky-500 font-black">&#9655;</span>
                            <p class="text-stone-900 dark:text-cyan-50 font-normal px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur soluta nostrum praesentium repellat reiciendis, deleniti iste maiores, fugit natus odio ipsam cum aperiam officia sequi placeat id! Quidem, quia numquam.</p></li>
                    </ul>
                </article> --}}

    </div>

</section>

<h3 class="text-3xl text-slate-700 dark:text-white my-5 px-12 font-bold tracking-widest md:text-center" id="proy">Mis ultimos Proyectos</h3>

<section class="my-12 flex flex-col items-center justify-center w-[90%] m-auto lg:flex-row" >

    <div class="border-1 rounded-lg bg-white dark:bg-slate-800 m-5 expcard">
        <div class="m-2">
            <img src="{{asset('./asets/img/Screenshotdevs.png')}}" alt="" class="opacity-80 hover:opacity-100">
            <h4 class="font-bold my-2">Dev Stagram</h4>
            <article class="flex justify-between">
                <div class="flex flex-nowrap items-center">
                    <span class="bg-slate-200 rounded-lg px-2 mr-2 text-slate-700">Laravel</span>
                    <span class="bg-slate-200 rounded-lg px-2 mr-2 text-slate-700">SQL</span>
                    <span class="bg-slate-200 rounded-lg px-2 mr-2 text-slate-700">Tailwind</span>
                    <span class="bg-slate-200 rounded-lg px-2 mr-2 text-slate-700">MVC</span>
                </div>
                <div class="text-xl text-slate-600 dark:text-slate-200 pr-2 flex flex-nowrap">
                    <a href="" ><i class="bi bi-github px-2 "></i></a>
                    <a href="" ><i class="bi bi-eye px-2 "></i></a>
                </div>
            </article>
        </div>
    </div>

    <div class="border-1 rounded-lg bg-white dark:bg-slate-800 m-5 expcard">
        <div class="m-2">
            <img src="{{asset('./asets/img/Screenshotdevs.png')}}" alt="" class="opacity-80 hover:opacity-100">
            <h4 class="font-bold my-2">Punto de venta</h4>
            <article class="flex justify-between">
                <div class="flex flex-nowrap items-center">
                    <span class="bg-slate-200 rounded-lg px-2 mr-2 text-slate-700">Laravel</span>
                    <span class="bg-slate-200 rounded-lg px-2 mr-2 text-slate-700">Tailwind</span>
                    <span class="bg-slate-200 rounded-lg px-2 mr-2 text-slate-700">SQL</span>
                    <span class="bg-slate-200 rounded-lg px-2 mr-2 text-slate-700">MVC</span>
                </div>
                <div class="text-xl text-slate-600 dark:text-slate-200 pr-2 flex flex-nowrap">
                    <a href="" ><i class="bi bi-github px-2 "></i></a>
                    <a href="" ><i class="bi bi-eye px-2 "></i></a>
                </div>
            </article>
        </div>
    </div>

    <div class="border-1 rounded-lg bg-white dark:bg-slate-800 m-5 expcard">
        <div class="m-2">
            <img src="{{asset('./asets/img/Screenshotdevs.png')}}" alt="" class="opacity-80 hover:opacity-100">
            <h4 class="font-bold my-2">Control de gastos</h4>
            <article class="flex justify-between">
                <div class="flex flex-nowrap items-center">
                    <span class="bg-slate-200 rounded-lg px-2 mr-2 text-slate-700">Laravel</span>
                    <span class="bg-slate-200 rounded-lg px-2 mr-2 text-slate-700">Tailwind</span>
                    <span class="bg-slate-200 rounded-lg px-2 mr-2 text-slate-700">SQL</span>
                    <span class="bg-slate-200 rounded-lg px-2 mr-2 text-slate-700">MVC</span>
                </div>
                <div class="text-xl text-slate-600 dark:text-slate-200 pr-2 flex flex-nowrap">
                    <a href="" ><i class="bi bi-github px-2 "></i></a>
                    <a href="" ><i class="bi bi-eye px-2 "></i></a>
                </div>
            </article>
        </div>
    </div>

</section>

    {{-- contacto --}}
{{-- <h3 class=" text-3xl text-slate-700 dark:text-white mt-12 mb-10 px-10 font-bold tracking-widest text-center" id="contacto"> Contactame </h3>
<section class="flex flex-col w-[90%] m-auto" >
        <form  method="POST" class="w-[90%] md:max-w-[25em] m-auto  text-slate-700">
            @csrf
            <div  class="py-3">
                <input  type="email" name="email" id="email" placeholder="email" 
                class="p-3 w-full rounded-lg focus:outline-none focus:ring focus:ring-blue-400">
            </div>
            <div class="py-3">
                <input type="text" name="name" id="name" placeholder="nombre" class="p-3 w-full rounded-lg focus:outline-none focus:ring focus:ring-blue-400">
            </div>
            <div class="py-3">
                <textarea placeholder="Mensaje" name="comment" id="comment" cols="" rows="5" class="p-3 w-full rounded-lg focus:outline-none focus:ring focus:ring-blue-400">
                </textarea>
            </div>

            <div class="py-3">
                <button class="bg-sky-600 text-white p-3 w-full rounded-lg text-cl -tracking-widest" >Enviar Mensaje</button>
            </div>
        </form>
</section> --}}
@endsection