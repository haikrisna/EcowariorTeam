@if(count($leapYears) > 0)
    <h2>Tahun Kabisat:</h2>
    <ul>
        @foreach($leapYears as $year)
            <li>{{ $year }}</li>
        @endforeach
    </ul>
@else
    <h2>Tidak ada tahun kabisat dalam rentang waktu tersebut.</h2>
@endif
