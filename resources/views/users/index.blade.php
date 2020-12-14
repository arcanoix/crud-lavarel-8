<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Usuarios
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
              
               <table class="border-separate border border-green-800">
                   <thead>
                       <th class="border border-green-600">Usuario</th>
                       <th class="border border-green-600">Email</th>
                   </thead>
                   <tbody>
                       @foreach($users as $user)
                            <tr>
                                <td class="border border-green-600">{{ $user->name }}</td>
                                <td class="border border-green-600">{{ $user->email }}</td>
                            </tr>
                       @endforeach
                   </tbody>
               </table>
               {{ $users->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
