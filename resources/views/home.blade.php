@extends('layouts.app')


@section('titulo')
    portafolio
@endsection
      

@section('contenido')


  {{-- <div class="flex">
      <div class="bg-color1 text-white  flex-auto  w-4 text-center">
      1
      </div>
      <div class="bg-color2  text-white flex-auto  w-4 text-center">
        2
      </div>
      <div class="bg-color3  flex-auto  w-4 text-center">
        3
      </div>

      <div class="bg-color4  flex-auto w-4 text-center">
        4
      </div>

      <div class="bg-color5  flex-auto w-4 text-center">
        5
      </div>

      <div class="bg-color6  flex-auto w-4 text-center">
        6
      </div>
  </div> --}}

  <div class="grid  grid-rows-1 grid-cols-1 gap-4 p-5 rounded-lg ">


    <div>
      <h1 class="font-semibold ">Josue Cardona</h1>
      <p class="font-medium">Softeare Engenieer. Full stack Developer</p>
    </div>

    <div class="relative overflow-hidden rounded-lg bg-cover bg-no-repeat " style="background-image: url({{asset('./asets/img/1682203652688831.jpg')}}); height: auto">
      <div class="relative bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed text-white gap-4 p-5" style="background-color: rgba(0, 0, 0, 0.6)">
        <p  class="font-medium">
          Como programador independiente, dedico mi tiempo y energía a transformar ideas en realidad a través del desarrollo de software. Mi pasión se centra en el diseño de soluciones eficientes para servidores, programación web y ERP, y encuentro gran satisfacción en simplificar tareas y mejorar la productividad de otros mediante la programación.
        </p>
        <p class="font-normal">
          Mi misión es crear aplicaciones que impacten positivamente la vida diaria, optimizando procesos administrativos y facilitando la gestión cotidiana. Con este fin, estoy comprometido a ampliar mi conocimiento en diversos lenguajes de programación y a perfeccionar mis habilidades lingüísticas, incluyendo el dominio del inglés. Mi meta profesional es crecer como desarrollador Senior de Backend, enfrentando desafíos complejos con destreza técnica y creatividad, y ofreciendo soluciones innovadoras que impulsen el progreso y la eficiencia.
        </p>
        <br>
        <div>
          <a href="" class="bg-transparent hover:bg-color1 text-white font-semibold hover:text-white py-2 px-4 border border-color2 hover:border-transparent rounded">Linkedin</a>
          <a href="" class="bg-transparent hover:bg-color1 text-white font-semibold hover:text-white py-2 px-4 border border-color2 hover:border-transparent rounded">github</a>
        </div>
      </div>
    </div>

  </div>

  <div class="proyectos">
    <div class="grid  grid-rows-1 grid-cols-1 gap-4 p-5 rounded-lg">
      <h1> Proyectos </h1>
    </div>
    
    <div>
      <div class="flex sm:flex-row place-content-around p-3 gap-5 flex-col ">
      
        <div class="bg-color6 rounded-lg p-3 shadow-lg grow max-w-2xl popline">
          <div>
            <span class="absolute top-10 z-0 h-20 w-20 rounded-full bg-sky-500 transition-all duration-300 group-hover:scale-[10]"></span>
            <img class="w-full" src="{{asset('./asets/img/Screenshotdevs.png')}}" alt="Sunset in the mountains">
            <h1 class="title">Devstagram</h1>
            <div class="px-6 pt-4 pb-2">
            <p class="">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta)</p>
            <div class="px-6 pt-4 pb-2">
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
            </div>
            </div>
          </div>
      
    
        </div>
      
        <div class="bg-color6 rounded-lg p-3 shadow-lg grow max-w-2xl popline">
          <div>
            <span class="absolute top-10 z-0 h-20 w-20 rounded-full bg-sky-500 transition-all duration-300 group-hover:scale-[10]"></span>
            <img class="w-full" src="{{asset('./asets/img/Screenshotdevs.png')}}" alt="Sunset in the mountains">
            <h1 class="title">Card Surface (Dark - 200)</h1>
            <div class="px-6 pt-4 pb-2">
            <p class="">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta)</p>
            <div class="px-6 pt-4 pb-2">
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
            </div>
            </div>
          </div>
      
    
        </div>
      
        <div class="bg-color6 rounded-lg p-3 shadow-lg grow max-w-2xl popline">
          <div>
            <span class="absolute top-10 z-0 h-20 w-20 rounded-full bg-sky-500 transition-all duration-300 group-hover:scale-[10]"></span>
            <img class="w-full" src="{{asset('./asets/img/Screenshotdevs.png')}}" alt="Sunset in the mountains">
            <h1 class="title">Control de gastos</h1>
            <div class="px-6 pt-4 pb-2">
            <p class="">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta)</p>
            <div class="px-6 pt-4 pb-2">
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
            </div>
            </div>
          </div>
      
    
        </div>
      

      </div>
    

    </div>
    
  </div>


  <div class="grid grid-rows-1 grid-cols-1 gap-4 p-5 rounded-lg ">
    <div class="flex sm:flex-row place-content-around p-3 gap-5 flex-col">

      <div class="rounded-lg p-3 overflow-hidden shadow-lg grow Items-center text-center popline">
    
        <h1 class="first-letter:text-color1">herramientas</h1>
        <p  class="font-normal">
          Como programador independiente, dedico mi tiempo.
        </p>
    
        <div class="px-6 pt-4 pb-2 items-center text-center">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 popline">Github</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 popline">Visual Studio Code</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 popline">Sublime Text</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 popline">Navicat</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 popline">jasper report</span>
        </div>
    
      </div>
      
      <div class="rounded-lg p-3 overflow-hidden shadow-lg grow Items-center text-center popline">
        <h1 class="first-letter:text-color1">Havilidades</h1>
        <p  class="font-normal">
          Como programador independiente, dedico mi tiempo.
        </p>
        <div class="px-6 pt-4 pb-2 items-center text-center">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 popline">PHP.</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 popline">Tailwind CSS.</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 popline">MYSQL.</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 popline">Laravel.</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 popline">Composer.</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 popline">Bootstrap.</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 popline">Python.</span>
        </div>
    
        <div class="px-6 pt-4 pb-2 items-center text-center">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 popline">HTML & CSS.</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 popline">Google Analythics y SEO.</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 popline">Javascript & JAVA.</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 popline">AJAX.</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 popline">Node JS.</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 popline">Jquery.</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 popline">Api rest.</span>
        </div>
      </div>
    
    </div>
    
  </div>

  <div class="Experiencia">
    <div class="grid  grid-rows-1 grid-cols-1 gap-4 p-5 rounded-lg">
      <h1> Experiencia </h1>
    
    </div>
    <div class="flex sm:flex-row place-content-around p-3 gap-5 flex-col">

        <div class="bg-white rounded-lg p-3 shadow-lg grow max-w-2xl expcard">
          
          <div class="">
            <h1 class="title-experiencia">Infotec S.A. de C.V </h1>
            <h2>(Desarrollador PHP full stack)</h2>
            <h3>Noviembre del 2021 en la actualidad</h3>
            <div class="px-6 pt-4 pb-2">
              <p class="">Diseño de sistemas de administración con bases de datos 
                relacionales.
                Resolución de problemas de bases de datos.
                Despliegues a producción</p>
              <p></p>
              <div class="px-6 pt-4 pb-2 items-center text-center">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">php</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Laravel</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">SQL</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">AJAX</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">JS</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">jquery</span>
              </div>
            </div>
          </div>




        </div>
        
        <div class="bg-white rounded-lg p-3 shadow-lg grow max-w-2xl expcard">
          <h1 class="title-experiencia">Sykes S.A. de C.V </h1>
          <h2>(Soporte tecnico lv1)</h2>
          <h3>Julio del 2019 en la Noviembre del 2021</h3>
          <div class="px-6 pt-4 pb-2">
            <p class="">Administración de usuarios de dominio, administración 
              de plataformas y resolución de problemas de bases de 
              datos</p>
            <div class="px-6 pt-4 pb-2 items-center text-center">
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">php</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Laravel</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">SQL</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">AJAX</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">JS</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">jquery</span>
            </div>
          </div>
        </div>

        <div class="bg-white rounded-lg p-3 shadow-lg grow max-w-2xl expcard">
          <h1 class="title-experiencia ">Domo Educativo S.A. de C.V </h1>
          <h2>(Desarrollador PHP)</h2>
          <h3>Agosto del 2019 - julio del 2020</h3>
          <div class="px-6 py-4">
            
            <p class="">Soporte técnico nivel 2, administración de servidores y 
              desarrollo de aplicaciones web, administración de ERP y 
              programas de respaldo de información</p>
            
            <div class="px-6 pt-4 pb-2 items-center text-center">
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">php</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Laravel</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">SQL</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">AJAX</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">JS</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">jquery</span>
            </div>
          
          </div>
      
        </div>

    </div>
  </div>


@endsection