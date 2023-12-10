 <a href="{{ route('admin.index') }}">管理トップ</a> | <a href="{{ route('institutions.create') }}">新規登録</a>

 <table>
     <tr>
         <th>Name</th>
         <th>town_id</th>
         <th>town_name</th>
         <th >Action</th>
     </tr>
     @foreach ($institutions as $institution)
     <tr>
         <td>{{ $institution->name }}</td>
         <td>{{ $institution->town_id }}</td>
         <td>{{ $institution->town_name }}</td>
         <td>
             <form action="{{ route('institutions.destroy', $institution->id) }}" method="POST">
                <a href="{{ route('institutions.show', $institution->id) }}">Show</a>
                <a href="{{ route('institutions.edit', $institution->id) }}">Edit</a>
                 @csrf
                 @method('DELETE')
                 <button type="submit">Delete</button>
             </form>
         </td>
     </tr>
     @endforeach
 </table>