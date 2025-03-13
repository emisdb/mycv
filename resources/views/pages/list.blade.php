@foreach($list as $li)
      <li>
          @foreach($li as $ph)
              @include('pages.paragraph',['ph'=>$ph] )
          @endforeach
      </li>
@endforeach



