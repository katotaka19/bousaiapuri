<a href="{{ route('institution.create') }}"> Create New Product</a>
 
 <table>
     <tr>
         <th>town_id</th>
         <th>institution_name</th>
         <th>institution_type</th>
         <th>Action</th>
     </tr>
     @foreach ($institutions as $institution)
     <tr>
         <td>{{ $institution->town_id }}</td>
         <td>{{ $institution->institution_name }}</td>
         <td>{{ $institution->institution_type }}</td>
         <td>
             <a href="{{ route('institution.show',$institution->id) }}">Show</a>
             <a href="{{ route('institution.edit',$institution->id) }}">Edit</a>
         </td>
     </tr>
     @endforeach
 </table>