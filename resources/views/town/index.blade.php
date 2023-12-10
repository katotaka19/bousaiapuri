 <table>
     <tr>
         <th>Name</th>
     </tr>
     @foreach ($town as $val)
     <tr>
         <td>{{ $val->town_name }}</td>
     </tr>
     @endforeach
 </table>