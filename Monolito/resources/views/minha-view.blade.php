<h1>Ola, essa é Minha view</h1>

<style>
     table,
     th,
     td{
         border: 1px solid black;
         border-collapse: collapse;
     }
 </style>

<table>
       <thead>
             <tr>
                     <th>Id</th>
                     <th>Nome</th>
             </tr>
     </thead>
     <tbody>
             @foreach ($lista as $item)
                <tr>
                      <td>id: {{ $item -> id }} </td>
                      <td>name: {{ $item -> name }} </td>
                </tr>
        @endforeach
        </tbody>
</table>
@dump($lista)