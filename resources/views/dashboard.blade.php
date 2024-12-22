
    @extends("panel.layout.app")



    @section('content')
        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             Hoşgeldin   {{ Auth::user()->name}} !
                </h2>
            </x-slot>


            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                </div>
            </div>
        </x-app-layout>


    @endsection


