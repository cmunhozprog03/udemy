<x-app-layout>

    <!-- Cabeçalho -->
    <section class="bg-cover" style="background-image: url({{asset('img/home/peoples.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-semibold text-4xl">Domine a tecnologia web com Coders Free</h1>
                <p class="text-white text-lg mt-2 mb-4">Em Coders Free entrará cursos, manuais y artigos que te ajudarão a converter em um proficional da web.</p>
                <!-- component -->
                <!-- This is an example component -->
                    <div class="pt-2 relative mx-auto text-gray-600">
                        <input class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                        type="search" name="search" placeholder="Search">
                        
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 
                                    text-white font-bold py-2 px-4 rounded absolute right-0 top-0 mt-2">
                            Buscar
                          </button>
                        
                    </div>
            </div>
            
        </div>
    </section>

    <!-- Conteúdo -->
    <section class="mt-16">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTEÚDO</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 grid 
            grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/advent.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-gray-700 text-xl uppercase">Cursos y proyectos</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat omnis consectetur nihil quod sed vero ipsum, repellat impedit dicta vitae.</p>
            
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/amaryllis.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-gray-700 text-xl uppercase">Manual Laravel</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat omnis consectetur nihil quod sed vero ipsum, repellat impedit dicta vitae.</p>

            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/architecture.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-gray-700 text-xl uppercase">Blog</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat omnis consectetur nihil quod sed vero ipsum, repellat impedit dicta vitae.</p>

            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/fire.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-gray-700 text-xl uppercase">Programação Web</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat omnis consectetur nihil quod sed vero ipsum, repellat impedit dicta vitae.</p>

            </article>
            
        </div>
    </section>

    <!--Body -->
    <section class="mt-16 bg-gray-700 py-12">
        <h1 class="text-center text-3xl text-white">Não sabe qual curso comprar?</h1>
        <p class="text-center text-white font-semibold">Vá ao catalogo de cursos 
            filtrado por categorias de níveis.</p>
        
        <div class="flex justify-center mt-2">
            <a href="{{route('courses.index')}}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 
                px-4 rounded uppercase" >
            Lista de Cursos
        </a>
        </div>
        
    </section>

    <!-- Cursos -->
    <section class="my-24">
        <h1 class="text-center text-gray-700 text-3xl uppercase">Últimos cursos</h1>
        <p class="text-center text-gray-700 font-semibold mb-6">Trabalho duro para seguir os cursos</p>
        
        <div class ="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 grid 
        grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($courses as $course)
                <article class="bg-white shadow-lg rounded overflow-hidden">
                    <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                    <div class="px-4 py-6">
                        <h1 class="text-xl text-cool-gray-700 leading-6
                         font-semibold">{{Str::limit($course->title, 35)}}</h1>
                         <p class="text-gray-600 text-sm mt-2 mb-2">Prof: {{$course->teacher->name}}</p>
                    </div>

                    <div class="flex">
                        <ul class="flex text-sm">
                            <li class="mr-1">
                                <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                            </li>
                            <li class="mr-1">
                                <i class="fas fa-star text-{{$course->rating >= 2 ? 'yellow' : 'gray'}}-400"></i>
                            </li>
                            <li class="mr-1">
                                <i class="fas fa-star text-{{$course->rating >= 3 ? 'yellow' : 'gray'}}-400"></i>
                            </li>
                            <li class="mr-1">
                                <i class="fas fa-star text-{{$course->rating >= 4 ? 'yellow' : 'gray'}}-400"></i>
                            </li>
                            <li class="mr-1">
                                <i class="fas fa-star text-{{$course->rating == 5 ? 'yellow' : 'gray'}}-400"></i>
                            </li>
                        </ul>

                        <p class="text-sm text-gray-500 ml-auto">
                            <i class="fas fa-users"></i>
                            ({{$course->students_count}})
                        </p>

                        
                    </div>
                    <a href="{{route('course.show', $course)}}" class="bg-blue-500 
                    hover:bg-blue-700 text-center text-white block font-bold py-2 px-4 
                        rounded w-full mt-4 uppercase">
                            Mais informações
                    </a>
                    
                </article>
                
            @endforeach
        </div>
    </section>


</x-app-layout>


