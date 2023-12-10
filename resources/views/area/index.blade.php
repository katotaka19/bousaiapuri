<table>
     <tr>
         <th>Name</th>
     </tr>
     @foreach ($area as $val)
     <tr>
         <td>{{ $val->area_name }}</td>
     </tr>
     @endforeach
 </table>