@include('Partials.header')

    <table class="table-fixed ml-2 mr-2">
        <thead>
          <tr>
            <th class="w-1/12 border">ID</th>
            <th class="w-2/12 border">ISBN</th>
            <th class="w-2/12 border">Title</th>
            <th class="w-2/12 border">Author</th>
            <th class="w-3/12 border">Descriprion</th>
            <th class="w-1/12 border">Date Published</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($book as $boo)
                <tr class="odd:bg-white even:bg-slate-100">
                    <td class="text-center">{{$boo->id}}</td>
                    <td class="text-center">{{$boo->isbn}}</td>
                    <td class="text-center">{{$boo->title}}</td>
                    <td class="text-center">{{$boo->author}}</td>
                    <td class="text-center">{{$boo->description}}</td>
                    <td class="text-center">{{$boo->date_published}}</td>
                </tr>
            @endforeach
        </tbody>
      </table>

@include('Partials.footer')